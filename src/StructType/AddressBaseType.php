<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressBaseType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AddressBaseType
 * @subpackage Structs
 */
class AddressBaseType extends AbstractStructBase
{
    /**
     * The AttentionOfName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1
     */
    public $AttentionOfName;
    /**
     * The CareOfName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1
     */
    public $CareOfName;
    /**
     * The CityName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1
     */
    public $CityName;
    /**
     * The CitySubDivisionName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1
     */
    public $CitySubDivisionName;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CountryCodeType
     */
    public $CountryCode;
    /**
     * The CountryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1
     */
    public $CountryName;
    /**
     * The CountrySubDivisionCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCountrySubDivisionCodeType
     */
    public $CountrySubDivisionCode;
    /**
     * The DeliveryPointDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1
     */
    public $DeliveryPointDescription;
    /**
     * The DeliveryPointType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $DeliveryPointType;
    /**
     * The FormatCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $FormatCode;
    /**
     * The FormatDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1
     */
    public $FormatDescription;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1
     */
    public $ID;
    /**
     * The Items
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType
     */
    public $Items;
    /**
     * The ItemsElementName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType1
     */
    public $ItemsElementName;
    /**
     * The MunicipalityCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $MunicipalityCode;
    /**
     * The MunicipalityName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1
     */
    public $MunicipalityName;
    /**
     * The POBoxPostalCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $POBoxPostalCode;
    /**
     * The PostalCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $PostalCode;
    /**
     * The Preference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferenceType
     */
    public $Preference;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\StatusType
     */
    public $Status;
    /**
     * The TaxJurisdicationCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1
     */
    public $TaxJurisdicationCodes;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $Type;
    /**
     * The languageCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $languageCode;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * Constructor method for AddressBaseType
     * @uses AddressBaseType::setAttentionOfName()
     * @uses AddressBaseType::setCareOfName()
     * @uses AddressBaseType::setCityName()
     * @uses AddressBaseType::setCitySubDivisionName()
     * @uses AddressBaseType::setCountryCode()
     * @uses AddressBaseType::setCountryName()
     * @uses AddressBaseType::setCountrySubDivisionCode()
     * @uses AddressBaseType::setDeliveryPointDescription()
     * @uses AddressBaseType::setDeliveryPointType()
     * @uses AddressBaseType::setFormatCode()
     * @uses AddressBaseType::setFormatDescription()
     * @uses AddressBaseType::setID()
     * @uses AddressBaseType::setItems()
     * @uses AddressBaseType::setItemsElementName()
     * @uses AddressBaseType::setMunicipalityCode()
     * @uses AddressBaseType::setMunicipalityName()
     * @uses AddressBaseType::setPOBoxPostalCode()
     * @uses AddressBaseType::setPostalCode()
     * @uses AddressBaseType::setPreference()
     * @uses AddressBaseType::setStatus()
     * @uses AddressBaseType::setTaxJurisdicationCodes()
     * @uses AddressBaseType::setType()
     * @uses AddressBaseType::setLanguageCode()
     * @uses AddressBaseType::setType_1()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $attentionOfName
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $careOfName
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $cityName
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $citySubDivisionName
     * @param \Randock\PostNL\BulkMailApi\StructType\CountryCodeType $countryCode
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $countryName
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCountrySubDivisionCodeType $countrySubDivisionCode
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $deliveryPointDescription
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $deliveryPointType
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $formatCode
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $formatDescription
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $iD
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType $items
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType1 $itemsElementName
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $municipalityCode
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $municipalityName
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $pOBoxPostalCode
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $postalCode
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferenceType $preference
     * @param \Randock\PostNL\BulkMailApi\StructType\StatusType $status
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1 $taxJurisdicationCodes
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type
     * @param string $languageCode
     * @param string $type
     */
    public function __construct(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $attentionOfName = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $careOfName = null, \Randock\PostNL\BulkMailApi\StructType\NameType1 $cityName = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $citySubDivisionName = null, \Randock\PostNL\BulkMailApi\StructType\CountryCodeType $countryCode = null, \Randock\PostNL\BulkMailApi\StructType\NameType1 $countryName = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCountrySubDivisionCodeType $countrySubDivisionCode = null, \Randock\PostNL\BulkMailApi\StructType\TextType1 $deliveryPointDescription = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $deliveryPointType = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $formatCode = null, \Randock\PostNL\BulkMailApi\StructType\TextType1 $formatDescription = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $iD = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType $items = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType1 $itemsElementName = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $municipalityCode = null, \Randock\PostNL\BulkMailApi\StructType\NameType1 $municipalityName = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $pOBoxPostalCode = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $postalCode = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferenceType $preference = null, \Randock\PostNL\BulkMailApi\StructType\StatusType $status = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1 $taxJurisdicationCodes = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type = null, $languageCode = null, $type_1 = null)
    {
        $this
            ->setAttentionOfName($attentionOfName)
            ->setCareOfName($careOfName)
            ->setCityName($cityName)
            ->setCitySubDivisionName($citySubDivisionName)
            ->setCountryCode($countryCode)
            ->setCountryName($countryName)
            ->setCountrySubDivisionCode($countrySubDivisionCode)
            ->setDeliveryPointDescription($deliveryPointDescription)
            ->setDeliveryPointType($deliveryPointType)
            ->setFormatCode($formatCode)
            ->setFormatDescription($formatDescription)
            ->setID($iD)
            ->setItems($items)
            ->setItemsElementName($itemsElementName)
            ->setMunicipalityCode($municipalityCode)
            ->setMunicipalityName($municipalityName)
            ->setPOBoxPostalCode($pOBoxPostalCode)
            ->setPostalCode($postalCode)
            ->setPreference($preference)
            ->setStatus($status)
            ->setTaxJurisdicationCodes($taxJurisdicationCodes)
            ->setType($type)
            ->setLanguageCode($languageCode)
            ->setType_1($type_1);
    }
    /**
     * Get AttentionOfName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1|null
     */
    public function getAttentionOfName()
    {
        return isset($this->AttentionOfName) ? $this->AttentionOfName : null;
    }
    /**
     * Set AttentionOfName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $attentionOfName
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setAttentionOfName(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $attentionOfName = null)
    {
        if (is_null($attentionOfName) || (is_array($attentionOfName) && empty($attentionOfName))) {
            unset($this->AttentionOfName);
        } else {
            $this->AttentionOfName = $attentionOfName;
        }
        return $this;
    }
    /**
     * Get CareOfName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1|null
     */
    public function getCareOfName()
    {
        return isset($this->CareOfName) ? $this->CareOfName : null;
    }
    /**
     * Set CareOfName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $careOfName
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setCareOfName(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $careOfName = null)
    {
        if (is_null($careOfName) || (is_array($careOfName) && empty($careOfName))) {
            unset($this->CareOfName);
        } else {
            $this->CareOfName = $careOfName;
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
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
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
     * Get CitySubDivisionName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1|null
     */
    public function getCitySubDivisionName()
    {
        return isset($this->CitySubDivisionName) ? $this->CitySubDivisionName : null;
    }
    /**
     * Set CitySubDivisionName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $citySubDivisionName
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setCitySubDivisionName(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $citySubDivisionName = null)
    {
        if (is_null($citySubDivisionName) || (is_array($citySubDivisionName) && empty($citySubDivisionName))) {
            unset($this->CitySubDivisionName);
        } else {
            $this->CitySubDivisionName = $citySubDivisionName;
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
    public function getCountryCode()
    {
        return isset($this->CountryCode) ? $this->CountryCode : null;
    }
    /**
     * Set CountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CountryCodeType $countryCode
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setCountryCode(\Randock\PostNL\BulkMailApi\StructType\CountryCodeType $countryCode = null)
    {
        if (is_null($countryCode) || (is_array($countryCode) && empty($countryCode))) {
            unset($this->CountryCode);
        } else {
            $this->CountryCode = $countryCode;
        }
        return $this;
    }
    /**
     * Get CountryName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function getCountryName()
    {
        return isset($this->CountryName) ? $this->CountryName : null;
    }
    /**
     * Set CountryName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $countryName
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setCountryName(\Randock\PostNL\BulkMailApi\StructType\NameType1 $countryName = null)
    {
        if (is_null($countryName) || (is_array($countryName) && empty($countryName))) {
            unset($this->CountryName);
        } else {
            $this->CountryName = $countryName;
        }
        return $this;
    }
    /**
     * Get CountrySubDivisionCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCountrySubDivisionCodeType|null
     */
    public function getCountrySubDivisionCode()
    {
        return isset($this->CountrySubDivisionCode) ? $this->CountrySubDivisionCode : null;
    }
    /**
     * Set CountrySubDivisionCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCountrySubDivisionCodeType $countrySubDivisionCode
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setCountrySubDivisionCode(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCountrySubDivisionCodeType $countrySubDivisionCode = null)
    {
        if (is_null($countrySubDivisionCode) || (is_array($countrySubDivisionCode) && empty($countrySubDivisionCode))) {
            unset($this->CountrySubDivisionCode);
        } else {
            $this->CountrySubDivisionCode = $countrySubDivisionCode;
        }
        return $this;
    }
    /**
     * Get DeliveryPointDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getDeliveryPointDescription()
    {
        return isset($this->DeliveryPointDescription) ? $this->DeliveryPointDescription : null;
    }
    /**
     * Set DeliveryPointDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $deliveryPointDescription
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setDeliveryPointDescription(\Randock\PostNL\BulkMailApi\StructType\TextType1 $deliveryPointDescription = null)
    {
        if (is_null($deliveryPointDescription) || (is_array($deliveryPointDescription) && empty($deliveryPointDescription))) {
            unset($this->DeliveryPointDescription);
        } else {
            $this->DeliveryPointDescription = $deliveryPointDescription;
        }
        return $this;
    }
    /**
     * Get DeliveryPointType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getDeliveryPointType()
    {
        return isset($this->DeliveryPointType) ? $this->DeliveryPointType : null;
    }
    /**
     * Set DeliveryPointType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $deliveryPointType
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setDeliveryPointType(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $deliveryPointType = null)
    {
        if (is_null($deliveryPointType) || (is_array($deliveryPointType) && empty($deliveryPointType))) {
            unset($this->DeliveryPointType);
        } else {
            $this->DeliveryPointType = $deliveryPointType;
        }
        return $this;
    }
    /**
     * Get FormatCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getFormatCode()
    {
        return isset($this->FormatCode) ? $this->FormatCode : null;
    }
    /**
     * Set FormatCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $formatCode
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setFormatCode(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $formatCode = null)
    {
        if (is_null($formatCode) || (is_array($formatCode) && empty($formatCode))) {
            unset($this->FormatCode);
        } else {
            $this->FormatCode = $formatCode;
        }
        return $this;
    }
    /**
     * Get FormatDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getFormatDescription()
    {
        return isset($this->FormatDescription) ? $this->FormatDescription : null;
    }
    /**
     * Set FormatDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $formatDescription
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setFormatDescription(\Randock\PostNL\BulkMailApi\StructType\TextType1 $formatDescription = null)
    {
        if (is_null($formatDescription) || (is_array($formatDescription) && empty($formatDescription))) {
            unset($this->FormatDescription);
        } else {
            $this->FormatDescription = $formatDescription;
        }
        return $this;
    }
    /**
     * Get ID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1|null
     */
    public function getID()
    {
        return isset($this->ID) ? $this->ID : null;
    }
    /**
     * Set ID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $iD
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setID(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $iD = null)
    {
        if (is_null($iD) || (is_array($iD) && empty($iD))) {
            unset($this->ID);
        } else {
            $this->ID = $iD;
        }
        return $this;
    }
    /**
     * Get Items value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType|null
     */
    public function getItems()
    {
        return isset($this->Items) ? $this->Items : null;
    }
    /**
     * Set Items value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType $items
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setItems(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType $items = null)
    {
        if (is_null($items) || (is_array($items) && empty($items))) {
            unset($this->Items);
        } else {
            $this->Items = $items;
        }
        return $this;
    }
    /**
     * Get ItemsElementName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType1|null
     */
    public function getItemsElementName()
    {
        return isset($this->ItemsElementName) ? $this->ItemsElementName : null;
    }
    /**
     * Set ItemsElementName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType1 $itemsElementName
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setItemsElementName(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType1 $itemsElementName = null)
    {
        if (is_null($itemsElementName) || (is_array($itemsElementName) && empty($itemsElementName))) {
            unset($this->ItemsElementName);
        } else {
            $this->ItemsElementName = $itemsElementName;
        }
        return $this;
    }
    /**
     * Get MunicipalityCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getMunicipalityCode()
    {
        return isset($this->MunicipalityCode) ? $this->MunicipalityCode : null;
    }
    /**
     * Set MunicipalityCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $municipalityCode
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setMunicipalityCode(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $municipalityCode = null)
    {
        if (is_null($municipalityCode) || (is_array($municipalityCode) && empty($municipalityCode))) {
            unset($this->MunicipalityCode);
        } else {
            $this->MunicipalityCode = $municipalityCode;
        }
        return $this;
    }
    /**
     * Get MunicipalityName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function getMunicipalityName()
    {
        return isset($this->MunicipalityName) ? $this->MunicipalityName : null;
    }
    /**
     * Set MunicipalityName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $municipalityName
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setMunicipalityName(\Randock\PostNL\BulkMailApi\StructType\NameType1 $municipalityName = null)
    {
        if (is_null($municipalityName) || (is_array($municipalityName) && empty($municipalityName))) {
            unset($this->MunicipalityName);
        } else {
            $this->MunicipalityName = $municipalityName;
        }
        return $this;
    }
    /**
     * Get POBoxPostalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getPOBoxPostalCode()
    {
        return isset($this->POBoxPostalCode) ? $this->POBoxPostalCode : null;
    }
    /**
     * Set POBoxPostalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $pOBoxPostalCode
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setPOBoxPostalCode(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $pOBoxPostalCode = null)
    {
        if (is_null($pOBoxPostalCode) || (is_array($pOBoxPostalCode) && empty($pOBoxPostalCode))) {
            unset($this->POBoxPostalCode);
        } else {
            $this->POBoxPostalCode = $pOBoxPostalCode;
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
    public function getPostalCode()
    {
        return isset($this->PostalCode) ? $this->PostalCode : null;
    }
    /**
     * Set PostalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $postalCode
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setPostalCode(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $postalCode = null)
    {
        if (is_null($postalCode) || (is_array($postalCode) && empty($postalCode))) {
            unset($this->PostalCode);
        } else {
            $this->PostalCode = $postalCode;
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
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
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
     * Get Status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\StatusType|null
     */
    public function getStatus()
    {
        return isset($this->Status) ? $this->Status : null;
    }
    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\StatusType $status
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setStatus(\Randock\PostNL\BulkMailApi\StructType\StatusType $status = null)
    {
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
        }
        return $this;
    }
    /**
     * Get TaxJurisdicationCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1|null
     */
    public function getTaxJurisdicationCodes()
    {
        return isset($this->TaxJurisdicationCodes) ? $this->TaxJurisdicationCodes : null;
    }
    /**
     * Set TaxJurisdicationCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1 $taxJurisdicationCodes
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setTaxJurisdicationCodes(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1 $taxJurisdicationCodes = null)
    {
        if (is_null($taxJurisdicationCodes) || (is_array($taxJurisdicationCodes) && empty($taxJurisdicationCodes))) {
            unset($this->TaxJurisdicationCodes);
        } else {
            $this->TaxJurisdicationCodes = $taxJurisdicationCodes;
        }
        return $this;
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getType()
    {
        return isset($this->Type) ? $this->Type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setType(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $type = null)
    {
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }
        return $this;
    }
    /**
     * Get languageCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLanguageCode()
    {
        return isset($this->languageCode) ? $this->languageCode : null;
    }
    /**
     * Set languageCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $languageCode
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setLanguageCode($languageCode = null)
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageCode, true), gettype($languageCode)), __LINE__);
        }
        if (is_null($languageCode) || (is_array($languageCode) && empty($languageCode))) {
            unset($this->languageCode);
        } else {
            $this->languageCode = $languageCode;
        }
        return $this;
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getType_1()
    {
        return isset($this->type) ? $this->type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressBaseType
     */
    public function setType_1($type_1 = null)
    {
        // validation for constraint: string
        if (!is_null($type_1) && !is_string($type_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type_1, true), gettype($type_1)), __LINE__);
        }
        if (is_null($type_1) || (is_array($type_1) && empty($type_1))) {
            unset($this->type);
        } else {
            $this->type = $type_1;
        }
        return $this;
    }
}
