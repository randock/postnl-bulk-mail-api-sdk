<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneNumber StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PhoneNumber
 * @subpackage Structs
 */
class PhoneNumber extends AbstractStructBase
{
    /**
     * The AreaID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AreaID;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CountryCode;
    /**
     * The CountryDiallingCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CountryDiallingCode;
    /**
     * The CountryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\MEDIUM_Name
     */
    public $CountryName;
    /**
     * The ExtensionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ExtensionID;
    /**
     * The SubscriberID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SubscriberID;
    /**
     * Constructor method for PhoneNumber
     * @uses PhoneNumber::setAreaID()
     * @uses PhoneNumber::setCountryCode()
     * @uses PhoneNumber::setCountryDiallingCode()
     * @uses PhoneNumber::setCountryName()
     * @uses PhoneNumber::setExtensionID()
     * @uses PhoneNumber::setSubscriberID()
     * @param string $areaID
     * @param string $countryCode
     * @param string $countryDiallingCode
     * @param \Randock\PostNL\BulkMailApi\StructType\MEDIUM_Name $countryName
     * @param string $extensionID
     * @param string $subscriberID
     */
    public function __construct($areaID = null, $countryCode = null, $countryDiallingCode = null, \Randock\PostNL\BulkMailApi\StructType\MEDIUM_Name $countryName = null, $extensionID = null, $subscriberID = null)
    {
        $this
            ->setAreaID($areaID)
            ->setCountryCode($countryCode)
            ->setCountryDiallingCode($countryDiallingCode)
            ->setCountryName($countryName)
            ->setExtensionID($extensionID)
            ->setSubscriberID($subscriberID);
    }
    /**
     * Get AreaID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAreaID()
    {
        return isset($this->AreaID) ? $this->AreaID : null;
    }
    /**
     * Set AreaID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $areaID
     * @return \Randock\PostNL\BulkMailApi\StructType\PhoneNumber
     */
    public function setAreaID($areaID = null)
    {
        // validation for constraint: string
        if (!is_null($areaID) && !is_string($areaID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($areaID, true), gettype($areaID)), __LINE__);
        }
        if (is_null($areaID) || (is_array($areaID) && empty($areaID))) {
            unset($this->AreaID);
        } else {
            $this->AreaID = $areaID;
        }
        return $this;
    }
    /**
     * Get CountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountryCode()
    {
        return isset($this->CountryCode) ? $this->CountryCode : null;
    }
    /**
     * Set CountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $countryCode
     * @return \Randock\PostNL\BulkMailApi\StructType\PhoneNumber
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        if (is_null($countryCode) || (is_array($countryCode) && empty($countryCode))) {
            unset($this->CountryCode);
        } else {
            $this->CountryCode = $countryCode;
        }
        return $this;
    }
    /**
     * Get CountryDiallingCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountryDiallingCode()
    {
        return isset($this->CountryDiallingCode) ? $this->CountryDiallingCode : null;
    }
    /**
     * Set CountryDiallingCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $countryDiallingCode
     * @return \Randock\PostNL\BulkMailApi\StructType\PhoneNumber
     */
    public function setCountryDiallingCode($countryDiallingCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryDiallingCode) && !is_string($countryDiallingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryDiallingCode, true), gettype($countryDiallingCode)), __LINE__);
        }
        if (is_null($countryDiallingCode) || (is_array($countryDiallingCode) && empty($countryDiallingCode))) {
            unset($this->CountryDiallingCode);
        } else {
            $this->CountryDiallingCode = $countryDiallingCode;
        }
        return $this;
    }
    /**
     * Get CountryName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\MEDIUM_Name|null
     */
    public function getCountryName()
    {
        return isset($this->CountryName) ? $this->CountryName : null;
    }
    /**
     * Set CountryName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\MEDIUM_Name $countryName
     * @return \Randock\PostNL\BulkMailApi\StructType\PhoneNumber
     */
    public function setCountryName(\Randock\PostNL\BulkMailApi\StructType\MEDIUM_Name $countryName = null)
    {
        if (is_null($countryName) || (is_array($countryName) && empty($countryName))) {
            unset($this->CountryName);
        } else {
            $this->CountryName = $countryName;
        }
        return $this;
    }
    /**
     * Get ExtensionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExtensionID()
    {
        return isset($this->ExtensionID) ? $this->ExtensionID : null;
    }
    /**
     * Set ExtensionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $extensionID
     * @return \Randock\PostNL\BulkMailApi\StructType\PhoneNumber
     */
    public function setExtensionID($extensionID = null)
    {
        // validation for constraint: string
        if (!is_null($extensionID) && !is_string($extensionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extensionID, true), gettype($extensionID)), __LINE__);
        }
        if (is_null($extensionID) || (is_array($extensionID) && empty($extensionID))) {
            unset($this->ExtensionID);
        } else {
            $this->ExtensionID = $extensionID;
        }
        return $this;
    }
    /**
     * Get SubscriberID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSubscriberID()
    {
        return isset($this->SubscriberID) ? $this->SubscriberID : null;
    }
    /**
     * Set SubscriberID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $subscriberID
     * @return \Randock\PostNL\BulkMailApi\StructType\PhoneNumber
     */
    public function setSubscriberID($subscriberID = null)
    {
        // validation for constraint: string
        if (!is_null($subscriberID) && !is_string($subscriberID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subscriberID, true), gettype($subscriberID)), __LINE__);
        }
        if (is_null($subscriberID) || (is_array($subscriberID) && empty($subscriberID))) {
            unset($this->SubscriberID);
        } else {
            $this->SubscriberID = $subscriberID;
        }
        return $this;
    }
}
