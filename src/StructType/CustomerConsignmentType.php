<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerConsignmentType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CustomerConsignmentType
 * @subpackage Structs
 */
class CustomerConsignmentType extends AbstractStructBase
{
    /**
     * The ConsignmentAdministrativeReferences
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentAdministrativeReferencesType
     */
    public $ConsignmentAdministrativeReferences;
    /**
     * The ConsignmentAuthorizationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1
     */
    public $ConsignmentAuthorizationNumber;
    /**
     * The ConsignmentCharacteristics
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType
     */
    public $ConsignmentCharacteristics;
    /**
     * The ConsignmentIssueNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1
     */
    public $ConsignmentIssueNumber;
    /**
     * The ConsignmentPeriodicalName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1
     */
    public $ConsignmentPeriodicalName;
    /**
     * The CustomerPriceReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1
     */
    public $CustomerPriceReference;
    /**
     * The InsuredUnitsQuantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\QuantityType1
     */
    public $InsuredUnitsQuantity;
    /**
     * The IssueID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $IssueID;
    /**
     * Constructor method for CustomerConsignmentType
     * @uses CustomerConsignmentType::setConsignmentAdministrativeReferences()
     * @uses CustomerConsignmentType::setConsignmentAuthorizationNumber()
     * @uses CustomerConsignmentType::setConsignmentCharacteristics()
     * @uses CustomerConsignmentType::setConsignmentIssueNumber()
     * @uses CustomerConsignmentType::setConsignmentPeriodicalName()
     * @uses CustomerConsignmentType::setCustomerPriceReference()
     * @uses CustomerConsignmentType::setInsuredUnitsQuantity()
     * @uses CustomerConsignmentType::setIssueID()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentAdministrativeReferencesType $consignmentAdministrativeReferences
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $consignmentAuthorizationNumber
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $consignmentCharacteristics
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $consignmentIssueNumber
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $consignmentPeriodicalName
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1 $customerPriceReference
     * @param \Randock\PostNL\BulkMailApi\StructType\QuantityType1 $insuredUnitsQuantity
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $issueID
     */
    public function __construct(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentAdministrativeReferencesType $consignmentAdministrativeReferences = null, \Randock\PostNL\BulkMailApi\StructType\TextType1 $consignmentAuthorizationNumber = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $consignmentCharacteristics = null, \Randock\PostNL\BulkMailApi\StructType\TextType1 $consignmentIssueNumber = null, \Randock\PostNL\BulkMailApi\StructType\NameType1 $consignmentPeriodicalName = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1 $customerPriceReference = null, \Randock\PostNL\BulkMailApi\StructType\QuantityType1 $insuredUnitsQuantity = null, \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $issueID = null)
    {
        $this
            ->setConsignmentAdministrativeReferences($consignmentAdministrativeReferences)
            ->setConsignmentAuthorizationNumber($consignmentAuthorizationNumber)
            ->setConsignmentCharacteristics($consignmentCharacteristics)
            ->setConsignmentIssueNumber($consignmentIssueNumber)
            ->setConsignmentPeriodicalName($consignmentPeriodicalName)
            ->setCustomerPriceReference($customerPriceReference)
            ->setInsuredUnitsQuantity($insuredUnitsQuantity)
            ->setIssueID($issueID);
    }
    /**
     * Get ConsignmentAdministrativeReferences value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentAdministrativeReferencesType|null
     */
    public function getConsignmentAdministrativeReferences()
    {
        return isset($this->ConsignmentAdministrativeReferences) ? $this->ConsignmentAdministrativeReferences : null;
    }
    /**
     * Set ConsignmentAdministrativeReferences value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentAdministrativeReferencesType $consignmentAdministrativeReferences
     * @return \Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType
     */
    public function setConsignmentAdministrativeReferences(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentAdministrativeReferencesType $consignmentAdministrativeReferences = null)
    {
        if (is_null($consignmentAdministrativeReferences) || (is_array($consignmentAdministrativeReferences) && empty($consignmentAdministrativeReferences))) {
            unset($this->ConsignmentAdministrativeReferences);
        } else {
            $this->ConsignmentAdministrativeReferences = $consignmentAdministrativeReferences;
        }
        return $this;
    }
    /**
     * Get ConsignmentAuthorizationNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getConsignmentAuthorizationNumber()
    {
        return isset($this->ConsignmentAuthorizationNumber) ? $this->ConsignmentAuthorizationNumber : null;
    }
    /**
     * Set ConsignmentAuthorizationNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $consignmentAuthorizationNumber
     * @return \Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType
     */
    public function setConsignmentAuthorizationNumber(\Randock\PostNL\BulkMailApi\StructType\TextType1 $consignmentAuthorizationNumber = null)
    {
        if (is_null($consignmentAuthorizationNumber) || (is_array($consignmentAuthorizationNumber) && empty($consignmentAuthorizationNumber))) {
            unset($this->ConsignmentAuthorizationNumber);
        } else {
            $this->ConsignmentAuthorizationNumber = $consignmentAuthorizationNumber;
        }
        return $this;
    }
    /**
     * Get ConsignmentCharacteristics value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType|null
     */
    public function getConsignmentCharacteristics()
    {
        return isset($this->ConsignmentCharacteristics) ? $this->ConsignmentCharacteristics : null;
    }
    /**
     * Set ConsignmentCharacteristics value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $consignmentCharacteristics
     * @return \Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType
     */
    public function setConsignmentCharacteristics(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $consignmentCharacteristics = null)
    {
        if (is_null($consignmentCharacteristics) || (is_array($consignmentCharacteristics) && empty($consignmentCharacteristics))) {
            unset($this->ConsignmentCharacteristics);
        } else {
            $this->ConsignmentCharacteristics = $consignmentCharacteristics;
        }
        return $this;
    }
    /**
     * Get ConsignmentIssueNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getConsignmentIssueNumber()
    {
        return isset($this->ConsignmentIssueNumber) ? $this->ConsignmentIssueNumber : null;
    }
    /**
     * Set ConsignmentIssueNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $consignmentIssueNumber
     * @return \Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType
     */
    public function setConsignmentIssueNumber(\Randock\PostNL\BulkMailApi\StructType\TextType1 $consignmentIssueNumber = null)
    {
        if (is_null($consignmentIssueNumber) || (is_array($consignmentIssueNumber) && empty($consignmentIssueNumber))) {
            unset($this->ConsignmentIssueNumber);
        } else {
            $this->ConsignmentIssueNumber = $consignmentIssueNumber;
        }
        return $this;
    }
    /**
     * Get ConsignmentPeriodicalName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function getConsignmentPeriodicalName()
    {
        return isset($this->ConsignmentPeriodicalName) ? $this->ConsignmentPeriodicalName : null;
    }
    /**
     * Set ConsignmentPeriodicalName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $consignmentPeriodicalName
     * @return \Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType
     */
    public function setConsignmentPeriodicalName(\Randock\PostNL\BulkMailApi\StructType\NameType1 $consignmentPeriodicalName = null)
    {
        if (is_null($consignmentPeriodicalName) || (is_array($consignmentPeriodicalName) && empty($consignmentPeriodicalName))) {
            unset($this->ConsignmentPeriodicalName);
        } else {
            $this->ConsignmentPeriodicalName = $consignmentPeriodicalName;
        }
        return $this;
    }
    /**
     * Get CustomerPriceReference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1|null
     */
    public function getCustomerPriceReference()
    {
        return isset($this->CustomerPriceReference) ? $this->CustomerPriceReference : null;
    }
    /**
     * Set CustomerPriceReference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1 $customerPriceReference
     * @return \Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType
     */
    public function setCustomerPriceReference(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1 $customerPriceReference = null)
    {
        if (is_null($customerPriceReference) || (is_array($customerPriceReference) && empty($customerPriceReference))) {
            unset($this->CustomerPriceReference);
        } else {
            $this->CustomerPriceReference = $customerPriceReference;
        }
        return $this;
    }
    /**
     * Get InsuredUnitsQuantity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\QuantityType1|null
     */
    public function getInsuredUnitsQuantity()
    {
        return isset($this->InsuredUnitsQuantity) ? $this->InsuredUnitsQuantity : null;
    }
    /**
     * Set InsuredUnitsQuantity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\QuantityType1 $insuredUnitsQuantity
     * @return \Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType
     */
    public function setInsuredUnitsQuantity(\Randock\PostNL\BulkMailApi\StructType\QuantityType1 $insuredUnitsQuantity = null)
    {
        if (is_null($insuredUnitsQuantity) || (is_array($insuredUnitsQuantity) && empty($insuredUnitsQuantity))) {
            unset($this->InsuredUnitsQuantity);
        } else {
            $this->InsuredUnitsQuantity = $insuredUnitsQuantity;
        }
        return $this;
    }
    /**
     * Get IssueID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getIssueID()
    {
        return isset($this->IssueID) ? $this->IssueID : null;
    }
    /**
     * Set IssueID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $issueID
     * @return \Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType
     */
    public function setIssueID(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $issueID = null)
    {
        if (is_null($issueID) || (is_array($issueID) && empty($issueID))) {
            unset($this->IssueID);
        } else {
            $this->IssueID = $issueID;
        }
        return $this;
    }
}
