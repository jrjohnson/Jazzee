<?php

namespace Jazzee\CommonBundle\Entity;

/**
 * Attachment
 * Attach a file to an applicant
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @author  Jon Johnson  <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license BSD-3-Clause
 */
class Attachment
{

    protected $id;
    protected $answer;
    protected $applicant;
    protected $attachmentHash;
    protected $thumbnailHash;

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
     * Set the Applicant
     * @param Entity\Applicant $applicant
     */
    public function setApplicant(Applicant $applicant)
    {
        $this->applicant = $applicant;
    }

    /**
     * Get the Applicant
     * @return Entity\Applicant $applicant
     */
    public function getApplicant()
    {
        return $this->applicant;
    }

    /**
     * Set the answer
     * @param Answer $answer
     */
    public function setAnswer(Answer $answer)
    {
        $this->answer = $answer;
    }

    /**
     * Get the answer
     * @return Answer
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Convert the attachment to base64 and store it
     *
     * @param blob $blob
     */
    public function setAttachment($blob)
    {
        $this->attachmentHash =
            \Jazzee\Globals::getFileStore()->storeFile($blob);
    }

    /**
     * Get attachment
     *
     * @return text $attachment
     */
    public function getAttachment()
    {
        return \Jazzee\Globals::getFileStore()
                ->getFileContents($this->attachmentHash);
    }

    /**
     * Convert the thumbnail to base64 and store it
     *
     * @param blob $blob
     */
    public function setThumbnail($blob)
    {
        $this->thumbnailHash = \Jazzee\Globals::getFileStore()
                ->storeFile($blob);
    }

    /**
     * Get thumbnail
     *
     * @return blob $thumbnail
     */
    public function getThumbnail()
    {
        if ($this->thumbnailHash) {
            return \Jazzee\Globals::getFileStore()
                    ->getFileContents($this->thumbnailHash);
        }

        return false;
    }

    /**
     * Get the attachment hash
     * @return string
     */
    public function getAttachmentHash()
    {
        return $this->attachmentHash;
    }

    /**
     * Get the thumbnail hash
     * @return string
     */
    public function getThumbnailHash()
    {
        return $this->thumbnailHash;
    }

    /**
     * Remove any attachmetn file pointers
     */
    public function preRemove()
    {
        if ($this->thumbnailHash) {
            \Jazzee\Globals::getFileStore()->removeFile($this->thumbnailHash);
        }
        \Jazzee\Globals::getFileStore()->removeFile($this->attachmentHash);
    }
}
