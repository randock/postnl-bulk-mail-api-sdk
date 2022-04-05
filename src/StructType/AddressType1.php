<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressType1 StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AddressType1
 * @subpackage Structs
 */
class AddressType1 extends AbstractStructBase
{
    /**
     * The BuildingNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\TextType1 $BuildingNumber = null;
    /**
     * The BuildingNumberExtension
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\TextType1 $BuildingNumberExtension = null;
    /**
     * The CityName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $CityName = null;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CountryCodeType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CountryCodeType $CountryCode = null;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $PostalCode = null;
    /**
     * The StreetName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $StreetName = null;
    /**
     * Constructor method for AddressType1
     * @uses AddressType1::setBuildingNumber()
     * @uses AddressType1::setBuildingNumberExtension()
     * @uses AddressType1::setCityName()
     * @uses AddressType1::setCountryCode()
     * @uses AddressType1::setPostalCode()
     * @uses AddressType1::setStreetName()
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $buildingNumber
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $buildingNumberExtension
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $cityName
     * @param \Randock\PostNL\BulkMailApi\StructType\CountryCodeType $countryCode
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $postalCode
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $streetName
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\TextType1 $buildingNumber = null, ?\Randock\PostNL\BulkMailApi\StructType\TextType1 $buildingNumberExtension = null, ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $cityName = null, ?\Randock\PostNL\BulkMailApi\StructType\CountryCodeType $countryCode = null, ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $postalCode = null, ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $streetName = null)
    {
        $this
            ->setBuildingNumber($buildingNumber)
            ->setBuildingNumberExtension($buildingNumberExtension)
            ->setCityName($cityName)
            ->setCountryCode($countryCode)
            ->setPostalCode($postalCode)
            ->setStreetName($streetName);
    }
    /**
     * Get BuildingNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getBuildingNumber(): ?\Randock\PostNL\BulkMailApi\StructType\TextType1
    {
        return isset($this->BuildingNumber) ? $this->BuildingNumber : null;
    }
    /**
     * Set BuildingNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $buildingNumber
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressType1
     */
    public function setBuildingNumber(?\Randock\PostNL\BulkMailApi\StructType\TextType1 $buildingNumber = null): self
    {
        if (is_null($buildingNumber) || (is_array($buildingNumber) && empty($buildingNumber))) {
            unset($this->BuildingNumber);
        } else {
            $this->BuildingNumber = $buildingNumber;
        }
        
        return $this;
    }
    /**
     * Get BuildingNumberExtension value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getBuildingNumberExtension(): ?\Randock\PostNL\BulkMailApi\StructType\TextType1
    {
        return isset($this->BuildingNumberExtension) ? $this->BuildingNumberExtension : null;
    }
    /**
     * Set BuildingNumberExtension value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $buildingNumberExtension
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressType1
     */
    public function setBuildingNumberExtension(?\Randock\PostNL\BulkMailApi\StructType\TextType1 $buildingNumberExtension = null): self
    {
        if (is_null($buildingNumberExtension) || (is_array($buildingNumberExtension) && empty($buildingNumberExtension))) {
            unset($this->BuildingNumberExtension);
        } else {
            $this->BuildingNumberExtension = $buildingNumberExtension;
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
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressType1
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
     * Get CountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CountryCodeType|null
     */
    public function getCountryCode(): ?\Randock\PostNL\BulkMailApi\StructType\CountryCodeType
    {
        return isset($this->CountryCode) ? $this->CountryCode : null;
    }
    /**
     * Set CountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CountryCodeType $countryCode
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressType1
     */
    public function setCountryCode(?\Randock\PostNL\BulkMailApi\StructType\CountryCodeType $countryCode = null): self
    {
        if (is_null($countryCode) || (is_array($countryCode) && empty($countryCode))) {
            unset($this->CountryCode);
        } else {
            $this->CountryCode = $countryCode;
        }
        
        return $this;
    }
    /**
     * Get PostalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getPostalCode(): ?\Randock\PostNL\BulkMailApi\StructType\CodeType1
    {
        return isset($this->PostalCode) ? $this->PostalCode : null;
    }
    /**
     * Set PostalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $postalCode
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressType1
     */
    public function setPostalCode(?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $postalCode = null): self
    {
        if (is_null($postalCode) || (is_array($postalCode) && empty($postalCode))) {
            unset($this->PostalCode);
        } else {
            $this->PostalCode = $postalCode;
        }
        
        return $this;
    }
    /**
     * Get StreetName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function getStreetName(): ?\Randock\PostNL\BulkMailApi\StructType\NameType1
    {
        return isset($this->StreetName) ? $this->StreetName : null;
    }
    /**
     * Set StreetName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $streetName
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressType1
     */
    public function setStreetName(?\Randock\PostNL\BulkMailApi\StructType\NameType1 $streetName = null): self
    {
        if (is_null($streetName) || (is_array($streetName) && empty($streetName))) {
            unset($this->StreetName);
        } else {
            $this->StreetName = $streetName;
        }
        
        return $this;
    }
}
