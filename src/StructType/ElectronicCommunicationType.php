<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ElectronicCommunicationType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ElectronicCommunicationType
 * @subpackage Structs
 */
class ElectronicCommunicationType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $ID;
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
     * Constructor method for ElectronicCommunicationType
     * @uses ElectronicCommunicationType::setID()
     * @uses ElectronicCommunicationType::setPreference()
     * @uses ElectronicCommunicationType::setUseCode()
     * @uses ElectronicCommunicationType::setUserArea()
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferenceType $preference
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $useCode
     * @param \Randock\PostNL\BulkMailApi\StructType\UserAreaType $userArea
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferenceType $preference = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $useCode = null, \Randock\PostNL\BulkMailApi\StructType\UserAreaType $userArea = null)
    {
        $this
            ->setID($iD)
            ->setPreference($preference)
            ->setUseCode($useCode)
            ->setUserArea($userArea);
    }
    /**
     * Get ID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getID()
    {
        return isset($this->ID) ? $this->ID : null;
    }
    /**
     * Set ID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD
     * @return \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType
     */
    public function setID(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD = null)
    {
        if (is_null($iD) || (is_array($iD) && empty($iD))) {
            unset($this->ID);
        } else {
            $this->ID = $iD;
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
     * @return \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType
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
     * @return \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType
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
     * @return \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType
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
