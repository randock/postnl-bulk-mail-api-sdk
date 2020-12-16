<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMailAddressCommunicationType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EMailAddressCommunicationType
 * @subpackage Structs
 */
class EMailAddressCommunicationType extends AbstractStructBase
{
    /**
     * The EMailAddressID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $EMailAddressID;
    /**
     * The HTMLPreferredIndicator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HTMLPreferredIndicator;
    /**
     * The HTMLPreferredIndicatorSpecified
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HTMLPreferredIndicatorSpecified;
    /**
     * The Preference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferenceType
     */
    public $Preference;
    /**
     * The UseCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $UseCode;
    /**
     * The UserArea
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\UserAreaType
     */
    public $UserArea;
    /**
     * Constructor method for EMailAddressCommunicationType
     * @uses EMailAddressCommunicationType::setEMailAddressID()
     * @uses EMailAddressCommunicationType::setHTMLPreferredIndicator()
     * @uses EMailAddressCommunicationType::setHTMLPreferredIndicatorSpecified()
     * @uses EMailAddressCommunicationType::setPreference()
     * @uses EMailAddressCommunicationType::setUseCode()
     * @uses EMailAddressCommunicationType::setUserArea()
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $eMailAddressID
     * @param bool $hTMLPreferredIndicator
     * @param bool $hTMLPreferredIndicatorSpecified
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferenceType $preference
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $useCode
     * @param \Randock\PostNL\BulkMailApi\StructType\UserAreaType $userArea
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $eMailAddressID = null, $hTMLPreferredIndicator = null, $hTMLPreferredIndicatorSpecified = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferenceType $preference = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $useCode = null, \Randock\PostNL\BulkMailApi\StructType\UserAreaType $userArea = null)
    {
        $this
            ->setEMailAddressID($eMailAddressID)
            ->setHTMLPreferredIndicator($hTMLPreferredIndicator)
            ->setHTMLPreferredIndicatorSpecified($hTMLPreferredIndicatorSpecified)
            ->setPreference($preference)
            ->setUseCode($useCode)
            ->setUserArea($userArea);
    }
    /**
     * Get EMailAddressID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getEMailAddressID()
    {
        return isset($this->EMailAddressID) ? $this->EMailAddressID : null;
    }
    /**
     * Set EMailAddressID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $eMailAddressID
     * @return \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType
     */
    public function setEMailAddressID(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $eMailAddressID = null)
    {
        if (is_null($eMailAddressID) || (is_array($eMailAddressID) && empty($eMailAddressID))) {
            unset($this->EMailAddressID);
        } else {
            $this->EMailAddressID = $eMailAddressID;
        }
        return $this;
    }
    /**
     * Get HTMLPreferredIndicator value
     * @return bool|null
     */
    public function getHTMLPreferredIndicator()
    {
        return $this->HTMLPreferredIndicator;
    }
    /**
     * Set HTMLPreferredIndicator value
     * @param bool $hTMLPreferredIndicator
     * @return \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType
     */
    public function setHTMLPreferredIndicator($hTMLPreferredIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($hTMLPreferredIndicator) && !is_bool($hTMLPreferredIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hTMLPreferredIndicator, true), gettype($hTMLPreferredIndicator)), __LINE__);
        }
        $this->HTMLPreferredIndicator = $hTMLPreferredIndicator;
        return $this;
    }
    /**
     * Get HTMLPreferredIndicatorSpecified value
     * @return bool|null
     */
    public function getHTMLPreferredIndicatorSpecified()
    {
        return $this->HTMLPreferredIndicatorSpecified;
    }
    /**
     * Set HTMLPreferredIndicatorSpecified value
     * @param bool $hTMLPreferredIndicatorSpecified
     * @return \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType
     */
    public function setHTMLPreferredIndicatorSpecified($hTMLPreferredIndicatorSpecified = null)
    {
        // validation for constraint: boolean
        if (!is_null($hTMLPreferredIndicatorSpecified) && !is_bool($hTMLPreferredIndicatorSpecified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hTMLPreferredIndicatorSpecified, true), gettype($hTMLPreferredIndicatorSpecified)), __LINE__);
        }
        $this->HTMLPreferredIndicatorSpecified = $hTMLPreferredIndicatorSpecified;
        return $this;
    }
    /**
     * Get Preference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferenceType|null
     */
    public function getPreference()
    {
        return isset($this->Preference) ? $this->Preference : null;
    }
    /**
     * Set Preference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferenceType $preference
     * @return \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType
     */
    public function setPreference(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferenceType $preference = null)
    {
        if (is_null($preference) || (is_array($preference) && empty($preference))) {
            unset($this->Preference);
        } else {
            $this->Preference = $preference;
        }
        return $this;
    }
    /**
     * Get UseCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getUseCode()
    {
        return isset($this->UseCode) ? $this->UseCode : null;
    }
    /**
     * Set UseCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $useCode
     * @return \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType
     */
    public function setUseCode(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $useCode = null)
    {
        if (is_null($useCode) || (is_array($useCode) && empty($useCode))) {
            unset($this->UseCode);
        } else {
            $this->UseCode = $useCode;
        }
        return $this;
    }
    /**
     * Get UserArea value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\UserAreaType|null
     */
    public function getUserArea()
    {
        return isset($this->UserArea) ? $this->UserArea : null;
    }
    /**
     * Set UserArea value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\UserAreaType $userArea
     * @return \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType
     */
    public function setUserArea(\Randock\PostNL\BulkMailApi\StructType\UserAreaType $userArea = null)
    {
        if (is_null($userArea) || (is_array($userArea) && empty($userArea))) {
            unset($this->UserArea);
        } else {
            $this->UserArea = $userArea;
        }
        return $this;
    }
}
