<?php

namespace Jazzee\CommonBundle\Entity;

/**
 * PaymentTypeVariable
 * Allow developers to store arbitrary data as a PaymentTypeVariable
 * so we don't need new tables for every new ApplyPaymentType type
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 * @author  Jon Johnson  <jon.johnson@ucsf.edu>
 * @license http://jazzee.org/license BSD-3-Clause
 */
class PaymentTypeVariable
{

    protected $id;
    protected $type;
    protected $name;
    protected $value;

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
     * Set type
     *
     * @param Entity\PaymentType $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Base64 encode the value
     * @param  mixed $value
     * @return mixed
     */
    public function setValue($value)
    {
        return $this->value = base64_encode($value);
    }

    /**
     * Get the base64 decoded value
     * @return blob
     */
    public function getValue()
    {
        return base64_decode($this->value);
    }
}
