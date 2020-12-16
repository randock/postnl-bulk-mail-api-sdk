<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankAccountType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BankAccountType
 * @subpackage Structs
 */
class BankAccountType extends AbstractStructBase
{
    /**
     * The Ascription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1
     */
    public $Ascription;
    /**
     * The BankName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1
     */
    public $BankName;
    /**
     * The BankNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $BankNumber;
    /**
     * The CityName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1
     */
    public $CityName;
    /**
     * The IBANID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $IBANID;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $ID;
    /**
     * Constructor method for BankAccountType
     * @uses BankAccountType::setAscription()
     * @uses BankAccountType::setBankName()
     * @uses BankAccountType::setBankNumber()
     * @uses BankAccountType::setCityName()
     * @uses BankAccountType::setIBANID()
     * @uses BankAccountType::setID()
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $ascription
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $bankName
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $bankNumber
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $cityName
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iBANID
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\NameType1 $ascription = null, \Randock\PostNL\BulkMailApi\StructType\NameType1 $bankName = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $bankNumber = null, \Randock\PostNL\BulkMailApi\StructType\NameType1 $cityName = null, \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iBANID = null, \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD = null)
    {
        $this
            ->setAscription($ascription)
            ->setBankName($bankName)
            ->setBankNumber($bankNumber)
            ->setCityName($cityName)
            ->setIBANID($iBANID)
            ->setID($iD);
    }
    /**
     * Get Ascription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function getAscription()
    {
        return isset($this->Ascription) ? $this->Ascription : null;
    }
    /**
     * Set Ascription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $ascription
     * @return \Randock\PostNL\BulkMailApi\StructType\BankAccountType
     */
    public function setAscription(\Randock\PostNL\BulkMailApi\StructType\NameType1 $ascription = null)
    {
        if (is_null($ascription) || (is_array($ascription) && empty($ascription))) {
            unset($this->Ascription);
        } else {
            $this->Ascription = $ascription;
        }
        return $this;
    }
    /**
     * Get BankName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function getBankName()
    {
        return isset($this->BankName) ? $this->BankName : null;
    }
    /**
     * Set BankName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $bankName
     * @return \Randock\PostNL\BulkMailApi\StructType\BankAccountType
     */
    public function setBankName(\Randock\PostNL\BulkMailApi\StructType\NameType1 $bankName = null)
    {
        if (is_null($bankName) || (is_array($bankName) && empty($bankName))) {
            unset($this->BankName);
        } else {
            $this->BankName = $bankName;
        }
        return $this;
    }
    /**
     * Get BankNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getBankNumber()
    {
        return isset($this->BankNumber) ? $this->BankNumber : null;
    }
    /**
     * Set BankNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $bankNumber
     * @return \Randock\PostNL\BulkMailApi\StructType\BankAccountType
     */
    public function setBankNumber(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $bankNumber = null)
    {
        if (is_null($bankNumber) || (is_array($bankNumber) && empty($bankNumber))) {
            unset($this->BankNumber);
        } else {
            $this->BankNumber = $bankNumber;
        }
        return $this;
    }
    /**
     * Get CityName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function getCityName()
    {
        return isset($this->CityName) ? $this->CityName : null;
    }
    /**
     * Set CityName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $cityName
     * @return \Randock\PostNL\BulkMailApi\StructType\BankAccountType
     */
    public function setCityName(\Randock\PostNL\BulkMailApi\StructType\NameType1 $cityName = null)
    {
        if (is_null($cityName) || (is_array($cityName) && empty($cityName))) {
            unset($this->CityName);
        } else {
            $this->CityName = $cityName;
        }
        return $this;
    }
    /**
     * Get IBANID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getIBANID()
    {
        return isset($this->IBANID) ? $this->IBANID : null;
    }
    /**
     * Set IBANID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iBANID
     * @return \Randock\PostNL\BulkMailApi\StructType\BankAccountType
     */
    public function setIBANID(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iBANID = null)
    {
        if (is_null($iBANID) || (is_array($iBANID) && empty($iBANID))) {
            unset($this->IBANID);
        } else {
            $this->IBANID = $iBANID;
        }
        return $this;
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
     * @return \Randock\PostNL\BulkMailApi\StructType\BankAccountType
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
}
