<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $Ascription = null;
    /**
     * The BankName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $BankName = null;
    /**
     * The BankNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $BankNumber = null;
    /**
     * The CityName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $CityName = null;
    /**
     * The IBANID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $IBANID = null;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $ID = null;
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
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\NameType1 $ascription = null, ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $bankName = null, ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $bankNumber = null, ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $cityName = null, ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iBANID = null, ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD = null)
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
    public function getAscription(): ?\Randock\PostNL\BulkMailApi\StructType\NameType1
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
    public function setAscription(?\Randock\PostNL\BulkMailApi\StructType\NameType1 $ascription = null): self
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
    public function getBankName(): ?\Randock\PostNL\BulkMailApi\StructType\NameType1
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
    public function setBankName(?\Randock\PostNL\BulkMailApi\StructType\NameType1 $bankName = null): self
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
    public function getBankNumber(): ?\Randock\PostNL\BulkMailApi\StructType\CodeType1
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
    public function setBankNumber(?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $bankNumber = null): self
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
    public function getCityName(): ?\Randock\PostNL\BulkMailApi\StructType\NameType1
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
    public function setCityName(?\Randock\PostNL\BulkMailApi\StructType\NameType1 $cityName = null): self
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
    public function getIBANID(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
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
    public function setIBANID(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iBANID = null): self
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
    public function getID(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
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
    public function setID(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD = null): self
    {
        if (is_null($iD) || (is_array($iD) && empty($iD))) {
            unset($this->ID);
        } else {
            $this->ID = $iD;
        }
        
        return $this;
    }
}
