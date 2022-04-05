<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressAttachmentType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AddressAttachmentType
 * @subpackage Structs
 */
class AddressAttachmentType extends HeaderType
{
    /**
     * The BillToParty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CustomerPartyType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CustomerPartyType $BillToParty = null;
    /**
     * The Consignment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentType $Consignment = null;
    /**
     * The CustomerParty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CustomerPartyType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CustomerPartyType $CustomerParty = null;
    /**
     * The ExtraAttachment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfExtraAttachmentType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfExtraAttachmentType $ExtraAttachment = null;
    /**
     * The ProcessCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $ProcessCode = null;
    /**
     * The ProcessedInputCharacteristics
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $ProcessedInputCharacteristics = null;
    /**
     * The ProcessedResultCharacteristics
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $ProcessedResultCharacteristics = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType $Status = null;
    /**
     * Constructor method for AddressAttachmentType
     * @uses AddressAttachmentType::setBillToParty()
     * @uses AddressAttachmentType::setConsignment()
     * @uses AddressAttachmentType::setCustomerParty()
     * @uses AddressAttachmentType::setExtraAttachment()
     * @uses AddressAttachmentType::setProcessCode()
     * @uses AddressAttachmentType::setProcessedInputCharacteristics()
     * @uses AddressAttachmentType::setProcessedResultCharacteristics()
     * @uses AddressAttachmentType::setStatus()
     * @param \Randock\PostNL\BulkMailApi\StructType\CustomerPartyType $billToParty
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentType $consignment
     * @param \Randock\PostNL\BulkMailApi\StructType\CustomerPartyType $customerParty
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfExtraAttachmentType $extraAttachment
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $processCode
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $processedInputCharacteristics
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $processedResultCharacteristics
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType $status
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\CustomerPartyType $billToParty = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentType $consignment = null, ?\Randock\PostNL\BulkMailApi\StructType\CustomerPartyType $customerParty = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfExtraAttachmentType $extraAttachment = null, ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $processCode = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $processedInputCharacteristics = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $processedResultCharacteristics = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType $status = null)
    {
        $this
            ->setBillToParty($billToParty)
            ->setConsignment($consignment)
            ->setCustomerParty($customerParty)
            ->setExtraAttachment($extraAttachment)
            ->setProcessCode($processCode)
            ->setProcessedInputCharacteristics($processedInputCharacteristics)
            ->setProcessedResultCharacteristics($processedResultCharacteristics)
            ->setStatus($status);
    }
    /**
     * Get BillToParty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CustomerPartyType|null
     */
    public function getBillToParty(): ?\Randock\PostNL\BulkMailApi\StructType\CustomerPartyType
    {
        return isset($this->BillToParty) ? $this->BillToParty : null;
    }
    /**
     * Set BillToParty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CustomerPartyType $billToParty
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressAttachmentType
     */
    public function setBillToParty(?\Randock\PostNL\BulkMailApi\StructType\CustomerPartyType $billToParty = null): self
    {
        if (is_null($billToParty) || (is_array($billToParty) && empty($billToParty))) {
            unset($this->BillToParty);
        } else {
            $this->BillToParty = $billToParty;
        }
        
        return $this;
    }
    /**
     * Get Consignment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentType|null
     */
    public function getConsignment(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentType
    {
        return isset($this->Consignment) ? $this->Consignment : null;
    }
    /**
     * Set Consignment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentType $consignment
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressAttachmentType
     */
    public function setConsignment(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentType $consignment = null): self
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
    public function getCustomerParty(): ?\Randock\PostNL\BulkMailApi\StructType\CustomerPartyType
    {
        return isset($this->CustomerParty) ? $this->CustomerParty : null;
    }
    /**
     * Set CustomerParty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CustomerPartyType $customerParty
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressAttachmentType
     */
    public function setCustomerParty(?\Randock\PostNL\BulkMailApi\StructType\CustomerPartyType $customerParty = null): self
    {
        if (is_null($customerParty) || (is_array($customerParty) && empty($customerParty))) {
            unset($this->CustomerParty);
        } else {
            $this->CustomerParty = $customerParty;
        }
        
        return $this;
    }
    /**
     * Get ExtraAttachment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfExtraAttachmentType|null
     */
    public function getExtraAttachment(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfExtraAttachmentType
    {
        return isset($this->ExtraAttachment) ? $this->ExtraAttachment : null;
    }
    /**
     * Set ExtraAttachment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfExtraAttachmentType $extraAttachment
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressAttachmentType
     */
    public function setExtraAttachment(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfExtraAttachmentType $extraAttachment = null): self
    {
        if (is_null($extraAttachment) || (is_array($extraAttachment) && empty($extraAttachment))) {
            unset($this->ExtraAttachment);
        } else {
            $this->ExtraAttachment = $extraAttachment;
        }
        
        return $this;
    }
    /**
     * Get ProcessCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getProcessCode(): ?\Randock\PostNL\BulkMailApi\StructType\CodeType1
    {
        return isset($this->ProcessCode) ? $this->ProcessCode : null;
    }
    /**
     * Set ProcessCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $processCode
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressAttachmentType
     */
    public function setProcessCode(?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $processCode = null): self
    {
        if (is_null($processCode) || (is_array($processCode) && empty($processCode))) {
            unset($this->ProcessCode);
        } else {
            $this->ProcessCode = $processCode;
        }
        
        return $this;
    }
    /**
     * Get ProcessedInputCharacteristics value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType|null
     */
    public function getProcessedInputCharacteristics(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType
    {
        return isset($this->ProcessedInputCharacteristics) ? $this->ProcessedInputCharacteristics : null;
    }
    /**
     * Set ProcessedInputCharacteristics value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $processedInputCharacteristics
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressAttachmentType
     */
    public function setProcessedInputCharacteristics(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $processedInputCharacteristics = null): self
    {
        if (is_null($processedInputCharacteristics) || (is_array($processedInputCharacteristics) && empty($processedInputCharacteristics))) {
            unset($this->ProcessedInputCharacteristics);
        } else {
            $this->ProcessedInputCharacteristics = $processedInputCharacteristics;
        }
        
        return $this;
    }
    /**
     * Get ProcessedResultCharacteristics value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType|null
     */
    public function getProcessedResultCharacteristics(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType
    {
        return isset($this->ProcessedResultCharacteristics) ? $this->ProcessedResultCharacteristics : null;
    }
    /**
     * Set ProcessedResultCharacteristics value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $processedResultCharacteristics
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressAttachmentType
     */
    public function setProcessedResultCharacteristics(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $processedResultCharacteristics = null): self
    {
        if (is_null($processedResultCharacteristics) || (is_array($processedResultCharacteristics) && empty($processedResultCharacteristics))) {
            unset($this->ProcessedResultCharacteristics);
        } else {
            $this->ProcessedResultCharacteristics = $processedResultCharacteristics;
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
    public function getStatus(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType
    {
        return isset($this->Status) ? $this->Status : null;
    }
    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType $status
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressAttachmentType
     */
    public function setStatus(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType $status = null): self
    {
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
        }
        
        return $this;
    }
}
