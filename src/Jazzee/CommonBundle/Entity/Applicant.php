<?php

namespace Jazzee\CommonBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Applicant
 * Individual applicants are tied to an Application -
 * but a single person can be multiple Applicants
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @author  Jon Johnson  <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license BSD-3-Clause
 * */
class Applicant implements AdvancedUserInterface, EquatableInterface, \Serializable
{
    /**
     * The prefix to use for applicant caching
     * @var string
     */

    const ARRAY_CACHE_PREFIX = 'JazzeeApplicantArray-';

    protected $id;
    protected $uniqueId;
    protected $externalId;
    protected $application;
    protected $email;
    protected $password;
    protected $isLocked;
    protected $firstName;
    protected $middleName;
    protected $lastName;
    protected $suffix;
    protected $deadlineExtension;
    protected $lastLogin;
    protected $lastLoginIp;
    protected $lastFailedLoginIp;
    protected $failedLoginAttempts;
    protected $updatedAt;
    protected $createdAt;
    protected $percentComplete;
    protected $hasPaid;
    protected $deactivated;
    protected $answers;
    protected $attachments;
    protected $decision;
    protected $tags;
    protected $threads;
    protected $duplicates;
    protected $auditLogs;

    /**
     * If we set a manual update don't override it
     * @var boolean
     */
    private $updatedAtOveridden = false;

    public function __construct()
    {
        $this->answers = new ArrayCollection();
        $this->attachments = new ArrayCollection();
        $this->tags = new ArrayCollection();
        $this->threads = new ArrayCollection();
        $this->duplicates = new ArrayCollection();
        $this->createdAt = new \DateTime('now');
        $this->isLocked = false;
        $this->percentComplete = 0;
        $this->hasPaid = false;
        $this->deactivated = false;
    }

    /**
     * Get id
     *
     * @return bigint $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $passHash = new \PasswordHash(8, false);
        $this->password = $passHash->HashPassword($password);
        //when a new password is set reset the failedLogin counter
        $this->failedLoginAttempts = 0;
    }

    /**
     * Set Hashed password
     * Store the previously hashed version of the password
     * @param string $password
     */
    public function setHashedPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string $password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Check a password against its hash
     * @param string $password
     * @param string $hashedPassword
     */
    public function checkPassword($password)
    {
        $passHash = new \PasswordHash(8, false);

        return $passHash->CheckPassword($password, $this->password);
    }

    /**
     * Generate a unique id
     */
    public function generateUniqueId()
    {
        /*
         * PHPs uniquid function is time based and therefor guessable
         * A stright random MD5 sum is too long for email
         * and tends to line break causing usability problems So we get unique
         * through uniquid and we get random by prefixing it with a
         * part of an MD5 hopefully this results in a URL friendly
         * short, but unguessable string
         */
        $prefix = substr(
            md5($this->password . mt_rand() * mt_rand()),
            rand(0, 24),
            rand(6, 8)
        );
        $this->uniqueId = \uniqid($prefix);
    }

    /**
     * Set a uniqueid
     * Prefferably call generateUniqueId - but it can also be set manually
     * @param string $uniqueId;
     */
    public function setUniqueId($uniqueId)
    {
        $this->uniqueId = $uniqueId;
    }

    /**
     * Get uniqueId
     *
     * @return string $uniqueId
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * Generate a random password and store it returning the plain text
     *
     * @return string
     */
    public function generatePassword()
    {
        //removed the vowels so we dont accidntally spell anything rude
        //removed L l 1 0 so it will be less confusing
        $possibleChars = 'bcdfghjkmnpqrstvwxyzBCDFGHJKMNPQRSTVWXYZ23456789';
        $max = strlen($possibleChars) - 1;
        $password = '';
        for ($i = 0; $i < rand(8, 10); $i++) {
            $password .= substr($possibleChars, rand(0, $max), 1);
        }
        $this->setPassword($password);

        return $password;
    }

    /**
     * Set external ID
     *
     * This is used to specify an alternate campus or third party application ID
     * @param string $string
     */
    public function setExternalId($string)
    {
        $this->externalId = $string;
    }

    /**
     * Get the external ID
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Lock the Applicant
     */
    public function lock()
    {
        $this->isLocked = true;
        if (is_null($this->decision)) {
            $this->decision = new Decision();
            $this->decision->setApplicant($this);
        }
    }

    /**
     * UnLock the Applicant
     */
    public function unLock()
    {
        $this->isLocked = false;
    }

    /**
     * Get locked
     *
     * @return boolean $locked
     */
    public function isLocked()
    {
        return $this->isLocked;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get firstName
     *
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set middleName
     *
     * @param string $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    /**
     * Get middleName
     *
     * @return string $middleName
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set suffix
     *
     * @param string $suffix
     */
    public function setSuffix($suffix)
    {
        $this->suffix = $suffix;
    }

    /**
     * Get suffix
     *
     * @return string $suffix
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * Get an applicants full name
     *
     * Combines all the name parts nicely
     */
    public function getFullName()
    {
        $name = $this->firstName . ' ';
        if ($this->middleName) {
            $name .= $this->middleName;
        }
        $name .= ' ' . $this->lastName;
        if ($this->suffix) {
            $name .= ' ' . $this->suffix;
        }

        return $name;
    }

    /**
     * Set deadlineExtension
     *
     * @param string $deadlineExtension
     */
    public function setDeadlineExtension($deadlineExtension)
    {
        $this->deadlineExtension = new \DateTime($deadlineExtension);
    }

    /**
     * Get deadlineExtension
     *
     * @return DateTime $deadlineExtension
     */
    public function getDeadlineExtension()
    {
        return $this->deadlineExtension;
    }

    /**
     * remove deadlineExtension
     */
    public function removeDeadlineExtension()
    {
        $this->deadlineExtension = null;
    }

    /**
     * Register a sucessfull login
     *
     */
    public function login()
    {
        $this->lastLogin = new \DateTime();
        $this->lastLoginIp = $_SERVER['REMOTE_ADDR'];
        $this->failedLoginAttempts = 0;
    }

    /**
     * set lastLogin
     *
     * @param string $lastLogin
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = new \DateTime($lastLogin);
    }

    /**
     * Get lastLogin
     *
     * @return \DateTime $lastLogin
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Get lastLoginIp
     *
     * @return string $lastLoginIp
     */
    public function getLastLoginIp()
    {
        return $this->lastLoginIp;
    }

    /**
     * Get lastFailedLoginIp
     *
     * @return string $lastFailedLoginIp
     */
    public function getLastFailedLoginIp()
    {
        return $this->lastFailedLoginIp;
    }

    /**
     * Fail an applicant login
     */
    public function loginFail()
    {
        $this->lastFailedLoginIp = $_SERVER['REMOTE_ADDR'];
        $this->failedLoginAttempts++;
    }

    /**
     * Get failedLoginAttempts
     *
     * @return integer $failedLoginAttempts
     */
    public function getFailedLoginAttempts()
    {
        return $this->failedLoginAttempts;
    }

    /**
     * Set createdAt
     *
     * @param string $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = new \DateTime($createdAt);
    }

    /**
     * Get createdAt
     *
     * @return \DateTime $createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Mark the lastUpdate automatically
     */
    public function markLastUpdate()
    {
        if (!$this->updatedAtOveridden) {
            $this->updatedAt = new \DateTime();
        }
        $this->percentComplete = $this->calculatePercentComplete();
        $this->hasPaid = $this->checkIfPaid();
    }

    /**
     * Set updatedAt
     *
     * @param string $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAtOveridden = true;
        $this->updatedAt = new \DateTime($updatedAt);
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime $updatedAt
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set application
     *
     * @param Entity\Application $application
     */
    public function setApplication(Application $application)
    {
        $this->application = $application;
    }

    /**
     * Get application
     *
     * @return \Jazzee\CommonBundle\Entity\Application $application
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Add answer
     *
     * @param \Jazzee\CommonBundle\Entity\Answer $answer
     */
    public function addAnswer(\Jazzee\CommonBundle\Entity\Answer $answer)
    {
        $this->answers[] = $answer;
        if ($answer->getApplicant() != $this) {
            $answer->setApplicant($this);
        }
    }

    /**
     * get all answers
     *
     * @return array \Jazzee\CommonBundle\Entity\Answer
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Find answers for a page
     *
     * @param \Jazzee\CommonBundle\Entity\Page
     * @return array \Jazzee\CommonBundle\Entity\Answer
     */
    public function findAnswersByPage(Page $page)
    {
        $return = array();
        foreach ($this->answers as $answer) {
            if ($answer->getPage() === $page) {
                $return[] = $answer;
            }
        }

        return $return;
    }

    /**
     * Find answer by id
     *
     * @param  integer                            $answerId
     * @return \Jazzee\CommonBundle\Entity\Answer or false
     */
    public function findAnswerById($answerId)
    {
        foreach ($this->answers as $answer) {
            if ($answer->getId() == $answerId) {
                return $answer;
            }
        }

        return false;
    }

    /**
     * Add attachment
     *
     * @param \Jazzee\CommonBundle\Entity\Attachment $attachment
     */
    public function addAttachment(Attachment $attachment)
    {
        $this->attachments[] = $attachment;
        if ($attachment->getApplicant() != $this) {
            $attachment->setApplicant($this);
        }
    }

    /**
     * Remove attachment
     *
     * @param \Jazzee\CommonBundle\Entity\Attachment $attachment
     */
    public function removeAttachment(Attachment $attachment)
    {
        $this->attachments->removeElement($attachment);
    }

    /**
     * Get attachments
     *
     * @return Doctrine\Common\Collections\Collection $attachments
     */
    public function getAttachments()
    {
        $attachments = array();
        foreach ($this->attachments as $attachment) {
            if ($attachment->getAnswer() == null) {
                $attachments[] = $attachment;
            }
        }

        return $attachments;
    }

    /**
     * Set decision
     *
     * @param Entity\Decision $decision
     */
    public function setDecision(Decision $decision)
    {
        $this->decision = $decision;
    }

    /**
     * Get decision
     *
     * @return \Jazzee\CommonBundle\Entity\Decision $decision
     */
    public function getDecision()
    {
        return $this->decision;
    }

    /**
     * Add tags
     *
     * @param Entity\Tag $tag
     */
    public function addTag(Tag $tag)
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
            $this->markLastUpdate();
        }
    }

    /**
     * Remove tag
     *
     * @param Entity\Tag $tag
     */
    public function removeTag(Tag $tag)
    {
        $this->tags->removeElement($tag);
        $this->markLastUpdate();
    }

    /**
     * Get tags
     *
     * @return Doctrine\Common\Collections\Collection $tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Check if an applicant has a tag
     *
     * @param  Tag     $checkTag
     * @return boolean
     */
    public function hasTag($checkTag)
    {
        return $this->tags->contains($checkTag);
    }

    /**
     * Add thread
     *
     * @param \Jazzee\CommonBundle\Entity\Thread $thread
     */
    public function addThread(Thread $thread)
    {
        $this->threads[] = $thread;
        if ($thread->getApplicant() != $this) {
            $thread->setApplicant($this);
        }
    }

    /**
     * Get threads
     *
     * @return Doctrine\Common\Collections\Collection $threads
     */
    public function getThreads()
    {
        return $this->threads;
    }

    /**
     * Get duplicates
     *
     * @return Doctrine\Common\Collections\Collection $duplicates
     */
    public function getDuplicates()
    {
        return $this->duplicates;
    }

    /**
     * Get duplicate by ID
     *
     * @param  integer                                $duplicateId
     * @return Doctrine\Common\Collections\Collection $duplicates
     */
    public function getDuplicateById($duplicateId)
    {
        foreach ($this->duplicates as $duplicate) {
            if ($duplicate->getId() == $duplicateId) {
                return $duplicate;
            }
        }

        return false;
    }

    /**
     * Get Audit Logs
     *
     * @return Doctrine\Common\Collections\Collection $auditLogs
     */
    public function getAuditLogs()
    {
        return $this->auditLogs;
    }

    /**
     * Unread Message Count
     *
     * @return integer
     */
    public function unreadMessageCount()
    {
        $count = 0;
        foreach ($this->threads as $thread) {
            foreach ($thread->getMessages() as $message) {
                if (!$message->isRead(Message::PROGRAM)) {
                    $count++;
                }
            }
        }

        return $count;
    }

    /**
     * Get the applicants percent complete
     * If it isn't set then generate it
     */
    public function getPercentComplete()
    {
        return $this->percentComplete;
    }

    protected function calculatePercentComplete()
    {
        $complete = 0;
        $total = 0;
        $pages = $this->application->getApplicationPages(
            \Jazzee\CommonBundle\Entity\ApplicationPage::APPLICATION
        );
        foreach ($pages as $pageEntity) {
            if ($pageEntity->getJazzeePage()
                instanceof \Jazzee\Interfaces\ReviewPage
            ) {
                $total++;
                $pageEntity->getJazzeePage()->setApplicant($this);
                if ($pageEntity->getJazzeePage()->getStatus() ==
                    \Jazzee\Interfaces\Page::COMPLETE or
                    $pageEntity->getJazzeePage()->getStatus() ==
                    \Jazzee\Interfaces\Page::SKIPPED
                ) {
                    $complete++;
                }
            }
        }
        //avoid division by 0 and dividing 0 by something
        if ($complete == 0 or $total == 0) {
            return 0;
        }

        return round($complete / $total, 2);
    }

    protected function checkIfPaid()
    {
        foreach ($this->answers as $answer) {
            if ($payment = $answer->getPayment()) {
                if ($payment->getStatus() == Payment::SETTLED) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Check if an applicant has at least one settled payment
     * @return boolean
     */
    public function hasPaid()
    {
        return $this->hasPaid;
    }

    /**
     * Deactivate the Applicant
     */
    public function deactivate()
    {
        $this->deactivated = true;
    }

    /**
     * Activate the Applicant
     */
    public function activate()
    {
        $this->deactivated = false;
    }

    /**
     * Get deactivate
     *
     * @return boolean
     */
    public function isDeactivated()
    {
        return $this->deactivated;
    }

    /**
     * Get an applicants individual deadline
     * @return DateTime
     */
    public function getDeadline()
    {
        if ($this->getDeadlineExtension() and
            $this->getDeadlineExtension() > $this->getApplication()->getClose()
        ) {
            $deadline = $this->getDeadlineExtension();
        } else {
            $deadline = $this->getApplication()->getClose();
        }

        return $deadline;
    }

    /**
     * Create applicant XML file
     *
     * @param  \Jazzee\Controller $controller
     * @param  boolean            $partial
     * @param  integer            $version    the XML version
     * @return \DOMDocument
     */
    public function toXml($controller, $partial = false, $version = 2)
    {
        $dom = new \DOMDocument('1.0', 'UTF-8');
        $applicantXml = $dom->createElement("applicant");
        $account = $dom->createElement("account");
        $account->appendChild($dom->createElement('id', $this->getId()));
        $account->appendChild(
            $dom->createElement(
                'externalId',
                $this->getExternalId()
            )
        );
        $account->appendChild(
            $dom->createElement(
                'firstName',
                $this->getFirstName()
            )
        );
        $account->appendChild(
            $dom->createElement(
                'middleName',
                $this->getMiddleName()
            )
        );
        $account->appendChild(
            $dom->createElement(
                'lastName',
                $this->getLastName()
            )
        );
        $account->appendChild(
            $dom->createElement(
                'suffix',
                $this->getSuffix()
            )
        );
        $account->appendChild(
            $dom->createElement(
                'email',
                $this->getEmail()
            )
        );
        $account->appendChild(
            $dom->createElement(
                'isLocked',
                $this->isLocked() ? 'yes' : 'no'
            )
        );
        $account->appendChild(
            $dom->createElement(
                'isDeactivated',
                $this->isDeactivated() ? 'yes' : 'no'
            )
        );
        $account->appendChild(
            $dom->createElement(
                'lastLogin',
                $this->getLastLogin()->format('c')
            )
        );
        $account->appendChild(
            $dom->createElement(
                'updatedAt',
                $this->getUpdatedAt()->format('c')
            )
        );
        $account->appendChild(
            $dom->createElement(
                'createdAt',
                $this->getCreatedAt()->format('c')
            )
        );
        $account->appendChild(
            $dom->createElement(
                'percentComplete',
                $this->getPercentComplete()
            )
        );
        $applicantXml->appendChild($account);

        $decision = $dom->createElement("decision");
        $decision->appendChild(
            $dom->createElement(
                'status',
                $this->getDecision() ? $this->getDecision()->status() : 'none'
            )
        );
        $decision->appendChild(
            $dom->createElement(
                'nominateAdmit',
                ($this->getDecision() and
                $this->getDecision()->getNominateAdmit()) ?
                $this->getDecision()->getNominateAdmit()->format('c') : ''
            )
        );
        $decision->appendChild(
            $dom->createElement(
                'nominateDeny',
                ($this->getDecision() and
                $this->getDecision()->getNominateDeny()) ?
                $this->getDecision()->getNominateDeny()->format('c') : ''
            )
        );
        $decision->appendChild(
            $dom->createElement(
                'finalAdmit',
                ($this->getDecision() and
                $this->getDecision()->getFinalAdmit()) ?
                $this->getDecision()->getFinalAdmit()->format('c') : ''
            )
        );
        $decision->appendChild(
            $dom->createElement(
                'finalDeny',
                ($this->getDecision() and
                $this->getDecision()->getFinalDeny()) ?
                $this->getDecision()->getFinalDeny()->format('c') : ''
            )
        );
        $decision->appendChild(
            $dom->createElement(
                'acceptOffer',
                ($this->getDecision() and
                $this->getDecision()->getAcceptOffer()) ?
                $this->getDecision()->getAcceptOffer()->format('c') : ''
            )
        );
        $decision->appendChild(
            $dom->createElement(
                'declineOffer',
                ($this->getDecision() and
                $this->getDecision()->getDeclineOffer()) ?
                $this->getDecision()->getDeclineOffer()->format('c') : ''
            )
        );
            $applicantXml->appendChild($decision);

        $tags = $dom->createElement("tags");
        foreach ($this->getTags() as $tag) {
            $tagXml = $dom->createElement('tag');
            $tagXml->setAttribute('tagId', $tag->getId());
            $tagXml->appendChild($dom->createCDATASection($tag->getTitle()));
            $tags->appendChild($tagXml);
        }
        $applicantXml->appendChild($tags);
        if ($partial) {
            $dom->appendChild($applicantXml);

            return $dom;
        }

        $auditLogs = $dom->createElement("auditLogs");
        foreach ($this->getAuditLogs() as $log) {
            $logXml = $dom->createElement('log');
            $logXml->setAttribute('id', $log->getId());
            $logXml->setAttribute('userId', $log->getUser()->getId());
            $logXml->setAttribute('createAt', $log->getCreatedAt()->format('c'));
            $user = $dom->createElement('user');
            $user->appendChild(
                $dom->createCDATASection(
                    $log->getUser()->getLastName() . ', ' .
                    $log->getUser()->getFirstName()
                )
            );
            $logXml->appendChild($user);
            $text = $dom->createElement('text');
            $text->appendChild($dom->createCDATASection($log->getText()));
            $logXml->appendChild($text);
            $auditLogs->appendChild($logXml);
        }
        $applicantXml->appendChild($auditLogs);

        $pages = $dom->createElement("pages");
        $applicationPages = $this->application->getApplicationPages(
            ApplicationPage::APPLICATION
        );
        foreach ($applicationPages as $applicationPage) {
            if ($applicationPage->getJazzeePage()
                instanceof \Jazzee\Interfaces\XmlPage
            ) {
                $page = $dom->createElement("page");
                $page->setAttribute(
                    'title',
                    \htmlentities(
                        $applicationPage->getTitle(),
                        ENT_COMPAT,
                        'utf-8'
                    )
                );
                $page->setAttribute(
                    'type',
                    \htmlentities(
                        $applicationPage->getPage()->getType()->getClass(),
                        ENT_COMPAT,
                        'utf-8'
                    )
                );
                $page->setAttribute(
                    'name',
                    \htmlentities(
                        $applicationPage->getName(),
                        ENT_COMPAT,
                        'utf-8'
                    )
                );
                $page->setAttribute(
                    'pageId',
                    $applicationPage->getPage()->getId()
                );
                $answersXml = $dom->createElement('answers');
                $applicationPage->getJazzeePage()->setApplicant($this);
                $applicationPage->getJazzeePage()->setController($controller);
                $answers = $applicationPage->getJazzeePage()
                    ->getXmlAnswers($dom, $version);
                foreach ($answers as $answerXml) {
                    $answersXml->appendChild($answerXml);
                }
                $page->appendChild($answersXml);
                $pages->appendChild($page);
            }
        }
        $applicantXml->appendChild($pages);
        $dom->appendChild($applicantXml);

        return $dom;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array('ROLE_APPLICANT');
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
        
    }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->email;
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array($this->id));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list ($this->id) = unserialize($serialized);
    }

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return !$this->deactivated;
    }

    public function isEqualTo(UserInterface $user)
    {
        if (!$user instanceof Applicant) {
            return false;
        }

        if ($this->id !== $user->getId()) {
            return false;
        }

        return true;
    }
}
