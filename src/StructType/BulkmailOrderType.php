<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BulkmailOrderType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BulkmailOrderType
 * @subpackage Structs
 */
class BulkmailOrderType extends HeaderType
{
    /**
     * The Consignment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentType
     */
    public $Consignment;
    /**
     * The CustomerParty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CustomerPartyType
     */
    public $CustomerParty;
    /**
     * The MergeConsignmentIndicator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $MergeConsignmentIndicator;
    /**
     * The MergeConsignmentIndicatorSpecified
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $MergeConsignmentIndicatorSpecified;
    /**
     * The ShippingParty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ShippingPartyType
     */
    public $ShippingParty;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType
     */
    public $Status;
    /**
     * The WorkLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\WorkLocationType
     */
    public $WorkLocation;
    /**
     * Constructor method for BulkmailOrderType
     * @uses BulkmailOrderType::setConsignment()
     * @uses BulkmailOrderType::setCustomerParty()
     * @uses BulkmailOrderType::setMergeConsignmentIndicator()
     * @uses BulkmailOrderType::setMergeConsignmentIndicatorSpecified()
     * @uses BulkmailOrderType::setShippingParty()
     * @uses BulkmailOrderType::setStatus()
     * @uses BulkmailOrderType::setWorkLocation()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentType $consignment
     * @param \Randock\PostNL\BulkMailApi\StructType\CustomerPartyType $customerParty
     * @param bool $mergeConsignmentIndicator
     * @param bool $mergeConsignmentIndicatorSpecified
     * @param \Randock\PostNL\BulkMailApi\StructType\ShippingPartyType $shippingParty
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType $status
     * @param \Randock\PostNL\BulkMailApi\StructType\WorkLocationType $workLocation
     */
    public function __construct(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentType $consignment = null, \Randock\PostNL\BulkMailApi\StructType\CustomerPartyType $customerParty = null, $mergeConsignmentIndicator = null, $mergeConsignmentIndicatorSpecified = null, \Randock\PostNL\BulkMailApi\StructType\ShippingPartyType $shippingParty = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType $status = null, \Randock\PostNL\BulkMailApi\StructType\WorkLocationType $workLocation = null)
    {
        $this
            ->setConsignment($consignment)
            ->setCustomerParty($customerParty)
            ->setMergeConsignmentIndicator($mergeConsignmentIndicator)
            ->setMergeConsignmentIndicatorSpecified($mergeConsignmentIndicatorSpecified)
            ->setShippingParty($shippingParty)
            ->setStatus($status)
            ->setWorkLocation($workLocation);
    }
    /**
     * Get Consignment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentType|null
     */
    public function getConsignment()
    {
        return isset($this->Consignment) ? $this->Consignment : null;
    }
    /**
     * Set Consignment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentType $consignment
     * @return \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType
     */
    public function setConsignment(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentType $consignment = null)
    {
        if (is_null($consignment) || (is_array($consignment) && empty($consignment))) {
            unset($this->Consignment);
        } else {
            $this->Consignment = $consignment;
        }
        return $this;
    }
    /**
     * Get CustomerParty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CustomerPartyType|null
     */
    public function getCustomerParty()
    {
        return isset($this->CustomerParty) ? $this->CustomerParty : null;
    }
    /**
     * Set CustomerParty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CustomerPartyType $customerParty
     * @return \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType
     */
    public function setCustomerParty(\Randock\PostNL\BulkMailApi\StructType\CustomerPartyType $customerParty = null)
    {
        if (is_null($customerParty) || (is_array($customerParty) && empty($customerParty))) {
            unset($this->CustomerParty);
        } else {
            $this->CustomerParty = $customerParty;
        }
        return $this;
    }
    /**
     * Get MergeConsignmentIndicator value
     * @return bool|null
     */
    public function getMergeConsignmentIndicator()
    {
        return $this->MergeConsignmentIndicator;
    }
    /**
     * Set MergeConsignmentIndicator value
     * @param bool $mergeConsignmentIndicator
     * @return \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType
     */
    public function setMergeConsignmentIndicator($mergeConsignmentIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($mergeConsignmentIndicator) && !is_bool($mergeConsignmentIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mergeConsignmentIndicator, true), gettype($mergeConsignmentIndicator)), __LINE__);
        }
        $this->MergeConsignmentIndicator = $mergeConsignmentIndicator;
        return $this;
    }
    /**
     * Get MergeConsignmentIndicatorSpecified value
     * @return bool|null
     */
    public function getMergeConsignmentIndicatorSpecified()
    {
        return $this->MergeConsignmentIndicatorSpecified;
    }
    /**
     * Set MergeConsignmentIndicatorSpecified value
     * @param bool $mergeConsignmentIndicatorSpecified
     * @return \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType
     */
    public function setMergeConsignmentIndicatorSpecified($mergeConsignmentIndicatorSpecified = null)
    {
        // validation for constraint: boolean
        if (!is_null($mergeConsignmentIndicatorSpecified) && !is_bool($mergeConsignmentIndicatorSpecified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mergeConsignmentIndicatorSpecified, true), gettype($mergeConsignmentIndicatorSpecified)), __LINE__);
        }
        $this->MergeConsignmentIndicatorSpecified = $mergeConsignmentIndicatorSpecified;
        return $this;
    }
    /**
     * Get ShippingParty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ShippingPartyType|null
     */
    public function getShippingParty()
    {
        return isset($this->ShippingParty) ? $this->ShippingParty : null;
    }
    /**
     * Set ShippingParty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\ShippingPartyType $shippingParty
     * @return \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType
     */
    public function setShippingParty(\Randock\PostNL\BulkMailApi\StructType\ShippingPartyType $shippingParty = null)
    {
        if (is_null($shippingParty) || (is_array($shippingParty) && empty($shippingParty))) {
            unset($this->ShippingParty);
        } else {
            $this->ShippingParty = $shippingParty;
        }
        return $this;
    }
    /**
     * Get Status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType|null
     */
    public function getStatus()
    {
        return isset($this->Status) ? $this->Status : null;
    }
    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType $status
     * @return \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType
     */
    public function setStatus(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType $status = null)
    {
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
        }
        return $this;
    }
    /**
     * Get WorkLocation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationType|null
     */
    public function getWorkLocation()
    {
        return isset($this->WorkLocation) ? $this->WorkLocation : null;
    }
    /**
     * Set WorkLocation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\WorkLocationType $workLocation
     * @return \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType
     */
    public function setWorkLocation(\Randock\PostNL\BulkMailApi\StructType\WorkLocationType $workLocation = null)
    {
        if (is_null($workLocation) || (is_array($workLocation) && empty($workLocation))) {
            unset($this->WorkLocation);
        } else {
            $this->WorkLocation = $workLocation;
        }
        return $this;
    }
}
