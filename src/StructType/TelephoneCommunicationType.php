<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TelephoneCommunicationType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TelephoneCommunicationType
 * @subpackage Structs
 */
class TelephoneCommunicationType extends AbstractStructBase
{
    /**
     * The Access
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1
     */
    public $Access;
    /**
     * The AreaDialing
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1
     */
    public $AreaDialing;
    /**
     * The CountryDialing
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1
     */
    public $CountryDialing;
    /**
     * The DialNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1
     */
    public $DialNumber;
    /**
     * The Extension
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1
     */
    public $Extension;
    /**
     * The FormatedNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1
     */
    public $FormatedNumber;
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
     * Constructor method for TelephoneCommunicationType
     * @uses TelephoneCommunicationType::setAccess()
     * @uses TelephoneCommunicationType::setAreaDialing()
     * @uses TelephoneCommunicationType::setCountryDialing()
     * @uses TelephoneCommunicationType::setDialNumber()
     * @uses TelephoneCommunicationType::setExtension()
     * @uses TelephoneCommunicationType::setFormatedNumber()
     * @uses TelephoneCommunicationType::setPreference()
     * @uses TelephoneCommunicationType::setUseCode()
     * @uses TelephoneCommunicationType::setUserArea()
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $access
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $areaDialing
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $countryDialing
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $dialNumber
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $extension
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $formatedNumber
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferenceType $preference
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $useCode
     * @param \Randock\PostNL\BulkMailApi\StructType\UserAreaType $userArea
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\TextType1 $access = null, \Randock\PostNL\BulkMailApi\StructType\TextType1 $areaDialing = null, \Randock\PostNL\BulkMailApi\StructType\TextType1 $countryDialing = null, \Randock\PostNL\BulkMailApi\StructType\TextType1 $dialNumber = null, \Randock\PostNL\BulkMailApi\StructType\TextType1 $extension = null, \Randock\PostNL\BulkMailApi\StructType\TextType1 $formatedNumber = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferenceType $preference = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $useCode = null, \Randock\PostNL\BulkMailApi\StructType\UserAreaType $userArea = null)
    {
        $this
            ->setAccess($access)
            ->setAreaDialing($areaDialing)
            ->setCountryDialing($countryDialing)
            ->setDialNumber($dialNumber)
            ->setExtension($extension)
            ->setFormatedNumber($formatedNumber)
            ->setPreference($preference)
            ->setUseCode($useCode)
            ->setUserArea($userArea);
    }
    /**
     * Get Access value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getAccess()
    {
        return isset($this->Access) ? $this->Access : null;
    }
    /**
     * Set Access value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $access
     * @return \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType
     */
    public function setAccess(\Randock\PostNL\BulkMailApi\StructType\TextType1 $access = null)
    {
        if (is_null($access) || (is_array($access) && empty($access))) {
            unset($this->Access);
        } else {
            $this->Access = $access;
        }
        return $this;
    }
    /**
     * Get AreaDialing value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getAreaDialing()
    {
        return isset($this->AreaDialing) ? $this->AreaDialing : null;
    }
    /**
     * Set AreaDialing value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $areaDialing
     * @return \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType
     */
    public function setAreaDialing(\Randock\PostNL\BulkMailApi\StructType\TextType1 $areaDialing = null)
    {
        if (is_null($areaDialing) || (is_array($areaDialing) && empty($areaDialing))) {
            unset($this->AreaDialing);
        } else {
            $this->AreaDialing = $areaDialing;
        }
        return $this;
    }
    /**
     * Get CountryDialing value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getCountryDialing()
    {
        return isset($this->CountryDialing) ? $this->CountryDialing : null;
    }
    /**
     * Set CountryDialing value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $countryDialing
     * @return \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType
     */
    public function setCountryDialing(\Randock\PostNL\BulkMailApi\StructType\TextType1 $countryDialing = null)
    {
        if (is_null($countryDialing) || (is_array($countryDialing) && empty($countryDialing))) {
            unset($this->CountryDialing);
        } else {
            $this->CountryDialing = $countryDialing;
        }
        return $this;
    }
    /**
     * Get DialNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getDialNumber()
    {
        return isset($this->DialNumber) ? $this->DialNumber : null;
    }
    /**
     * Set DialNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $dialNumber
     * @return \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType
     */
    public function setDialNumber(\Randock\PostNL\BulkMailApi\StructType\TextType1 $dialNumber = null)
    {
        if (is_null($dialNumber) || (is_array($dialNumber) && empty($dialNumber))) {
            unset($this->DialNumber);
        } else {
            $this->DialNumber = $dialNumber;
        }
        return $this;
    }
    /**
     * Get Extension value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getExtension()
    {
        return isset($this->Extension) ? $this->Extension : null;
    }
    /**
     * Set Extension value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $extension
     * @return \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType
     */
    public function setExtension(\Randock\PostNL\BulkMailApi\StructType\TextType1 $extension = null)
    {
        if (is_null($extension) || (is_array($extension) && empty($extension))) {
            unset($this->Extension);
        } else {
            $this->Extension = $extension;
        }
        return $this;
    }
    /**
     * Get FormatedNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getFormatedNumber()
    {
        return isset($this->FormatedNumber) ? $this->FormatedNumber : null;
    }
    /**
     * Set FormatedNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $formatedNumber
     * @return \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType
     */
    public function setFormatedNumber(\Randock\PostNL\BulkMailApi\StructType\TextType1 $formatedNumber = null)
    {
        if (is_null($formatedNumber) || (is_array($formatedNumber) && empty($formatedNumber))) {
            unset($this->FormatedNumber);
        } else {
            $this->FormatedNumber = $formatedNumber;
        }
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
     * @return \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType
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
     * @return \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType
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
     * @return \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType
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
