<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferredNameType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PreferredNameType
 * @subpackage Structs
 */
class PreferredNameType extends NameType1
{
    /**
     * The preferred
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $preferred;
    /**
     * The preferredSpecified
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $preferredSpecified;
    /**
     * Constructor method for PreferredNameType
     * @uses PreferredNameType::setPreferred()
     * @uses PreferredNameType::setPreferredSpecified()
     * @param bool $preferred
     * @param bool $preferredSpecified
     */
    public function __construct($preferred = null, $preferredSpecified = null)
    {
        $this
            ->setPreferred($preferred)
            ->setPreferredSpecified($preferredSpecified);
    }
    /**
     * Get preferred value
     * @return bool|null
     */
    public function getPreferred()
    {
        return $this->preferred;
    }
    /**
     * Set preferred value
     * @param bool $preferred
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferredNameType
     */
    public function setPreferred($preferred = null)
    {
        // validation for constraint: boolean
        if (!is_null($preferred) && !is_bool($preferred)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preferred, true), gettype($preferred)), __LINE__);
        }
        $this->preferred = $preferred;
        return $this;
    }
    /**
     * Get preferredSpecified value
     * @return bool|null
     */
    public function getPreferredSpecified()
    {
        return $this->preferredSpecified;
    }
    /**
     * Set preferredSpecified value
     * @param bool $preferredSpecified
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferredNameType
     */
    public function setPreferredSpecified($preferredSpecified = null)
    {
        // validation for constraint: boolean
        if (!is_null($preferredSpecified) && !is_bool($preferredSpecified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preferredSpecified, true), gettype($preferredSpecified)), __LINE__);
        }
        $this->preferredSpecified = $preferredSpecified;
        return $this;
    }
}
