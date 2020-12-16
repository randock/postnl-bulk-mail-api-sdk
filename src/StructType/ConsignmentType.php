<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsignmentType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ConsignmentType
 * @subpackage Structs
 */
class ConsignmentType extends AbstractStructBase
{
    /**
     * The AlternateConsignmentID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $AlternateConsignmentID;
    /**
     * The ConsignmentContract
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ConsignmentContractType
     */
    public $ConsignmentContract;
    /**
     * The ConsignmentID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $ConsignmentID;
    /**
     * The ConsignmentPhysicalData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType
     */
    public $ConsignmentPhysicalData;
    /**
     * The ConsignmentProcessing
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
     */
    public $ConsignmentProcessing;
    /**
     * The CustomerConsignment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType
     */
    public $CustomerConsignment;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemIDType
     */
    public $ItemID;
    /**
     * The MergedFromConsignmentID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1
     */
    public $MergedFromConsignmentID;
    /**
     * Constructor method for ConsignmentType
     * @uses ConsignmentType::setAlternateConsignmentID()
     * @uses ConsignmentType::setConsignmentContract()
     * @uses ConsignmentType::setConsignmentID()
     * @uses ConsignmentType::setConsignmentPhysicalData()
     * @uses ConsignmentType::setConsignmentProcessing()
     * @uses ConsignmentType::setCustomerConsignment()
     * @uses ConsignmentType::setItemID()
     * @uses ConsignmentType::setMergedFromConsignmentID()
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $alternateConsignmentID
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentContractType $consignmentContract
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $consignmentID
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType $consignmentPhysicalData
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType $consignmentProcessing
     * @param \Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType $customerConsignment
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemIDType $itemID
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $mergedFromConsignmentID
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $alternateConsignmentID = null, \Randock\PostNL\BulkMailApi\StructType\ConsignmentContractType $consignmentContract = null, \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $consignmentID = null, \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType $consignmentPhysicalData = null, \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType $consignmentProcessing = null, \Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType $customerConsignment = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemIDType $itemID = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $mergedFromConsignmentID = null)
    {
        $this
            ->setAlternateConsignmentID($alternateConsignmentID)
            ->setConsignmentContract($consignmentContract)
            ->setConsignmentID($consignmentID)
            ->setConsignmentPhysicalData($consignmentPhysicalData)
            ->setConsignmentProcessing($consignmentProcessing)
            ->setCustomerConsignment($customerConsignment)
            ->setItemID($itemID)
            ->setMergedFromConsignmentID($mergedFromConsignmentID);
    }
    /**
     * Get AlternateConsignmentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getAlternateConsignmentID()
    {
        return isset($this->AlternateConsignmentID) ? $this->AlternateConsignmentID : null;
    }
    /**
     * Set AlternateConsignmentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $alternateConsignmentID
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setAlternateConsignmentID(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $alternateConsignmentID = null)
    {
        if (is_null($alternateConsignmentID) || (is_array($alternateConsignmentID) && empty($alternateConsignmentID))) {
            unset($this->AlternateConsignmentID);
        } else {
            $this->AlternateConsignmentID = $alternateConsignmentID;
        }
        return $this;
    }
    /**
     * Get ConsignmentContract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentContractType|null
     */
    public function getConsignmentContract()
    {
        return isset($this->ConsignmentContract) ? $this->ConsignmentContract : null;
    }
    /**
     * Set ConsignmentContract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentContractType $consignmentContract
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setConsignmentContract(\Randock\PostNL\BulkMailApi\StructType\ConsignmentContractType $consignmentContract = null)
    {
        if (is_null($consignmentContract) || (is_array($consignmentContract) && empty($consignmentContract))) {
            unset($this->ConsignmentContract);
        } else {
            $this->ConsignmentContract = $consignmentContract;
        }
        return $this;
    }
    /**
     * Get ConsignmentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getConsignmentID()
    {
        return isset($this->ConsignmentID) ? $this->ConsignmentID : null;
    }
    /**
     * Set ConsignmentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $consignmentID
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setConsignmentID(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $consignmentID = null)
    {
        if (is_null($consignmentID) || (is_array($consignmentID) && empty($consignmentID))) {
            unset($this->ConsignmentID);
        } else {
            $this->ConsignmentID = $consignmentID;
        }
        return $this;
    }
    /**
     * Get ConsignmentPhysicalData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType|null
     */
    public function getConsignmentPhysicalData()
    {
        return isset($this->ConsignmentPhysicalData) ? $this->ConsignmentPhysicalData : null;
    }
    /**
     * Set ConsignmentPhysicalData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType $consignmentPhysicalData
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setConsignmentPhysicalData(\Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType $consignmentPhysicalData = null)
    {
        if (is_null($consignmentPhysicalData) || (is_array($consignmentPhysicalData) && empty($consignmentPhysicalData))) {
            unset($this->ConsignmentPhysicalData);
        } else {
            $this->ConsignmentPhysicalData = $consignmentPhysicalData;
        }
        return $this;
    }
    /**
     * Get ConsignmentProcessing value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType|null
     */
    public function getConsignmentProcessing()
    {
        return isset($this->ConsignmentProcessing) ? $this->ConsignmentProcessing : null;
    }
    /**
     * Set ConsignmentProcessing value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType $consignmentProcessing
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setConsignmentProcessing(\Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType $consignmentProcessing = null)
    {
        if (is_null($consignmentProcessing) || (is_array($consignmentProcessing) && empty($consignmentProcessing))) {
            unset($this->ConsignmentProcessing);
        } else {
            $this->ConsignmentProcessing = $consignmentProcessing;
        }
        return $this;
    }
    /**
     * Get CustomerConsignment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType|null
     */
    public function getCustomerConsignment()
    {
        return isset($this->CustomerConsignment) ? $this->CustomerConsignment : null;
    }
    /**
     * Set CustomerConsignment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType $customerConsignment
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setCustomerConsignment(\Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType $customerConsignment = null)
    {
        if (is_null($customerConsignment) || (is_array($customerConsignment) && empty($customerConsignment))) {
            unset($this->CustomerConsignment);
        } else {
            $this->CustomerConsignment = $customerConsignment;
        }
        return $this;
    }
    /**
     * Get ItemID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemIDType|null
     */
    public function getItemID()
    {
        return isset($this->ItemID) ? $this->ItemID : null;
    }
    /**
     * Set ItemID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemIDType $itemID
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setItemID(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemIDType $itemID = null)
    {
        if (is_null($itemID) || (is_array($itemID) && empty($itemID))) {
            unset($this->ItemID);
        } else {
            $this->ItemID = $itemID;
        }
        return $this;
    }
    /**
     * Get MergedFromConsignmentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1|null
     */
    public function getMergedFromConsignmentID()
    {
        return isset($this->MergedFromConsignmentID) ? $this->MergedFromConsignmentID : null;
    }
    /**
     * Set MergedFromConsignmentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $mergedFromConsignmentID
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setMergedFromConsignmentID(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $mergedFromConsignmentID = null)
    {
        if (is_null($mergedFromConsignmentID) || (is_array($mergedFromConsignmentID) && empty($mergedFromConsignmentID))) {
            unset($this->MergedFromConsignmentID);
        } else {
            $this->MergedFromConsignmentID = $mergedFromConsignmentID;
        }
        return $this;
    }
}
