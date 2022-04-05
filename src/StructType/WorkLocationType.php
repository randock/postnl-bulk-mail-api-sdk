<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkLocationType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WorkLocationType
 * @subpackage Structs
 */
class WorkLocationType extends AbstractStructBase
{
    /**
     * The ContactPerson
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactPersonType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactPersonType $ContactPerson = null;
    /**
     * The ExternalReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\TextType1 $ExternalReference = null;
    /**
     * The InternalManagementIndicator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $InternalManagementIndicator = null;
    /**
     * The InternalManagementIndicatorSpecified
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $InternalManagementIndicatorSpecified = null;
    /**
     * The LocationId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $LocationId = null;
    /**
     * The LocationMDMoldCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $LocationMDMoldCode = null;
    /**
     * The LocationName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $LocationName = null;
    /**
     * The LocationShortName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $LocationShortName = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType $Status = null;
    /**
     * The WorkLocationAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfWorkLocationAddressType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfWorkLocationAddressType $WorkLocationAddress = null;
    /**
     * The WorkLocationType1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\WorkLocationTypeType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\WorkLocationTypeType $WorkLocationType1 = null;
    /**
     * Constructor method for WorkLocationType
     * @uses WorkLocationType::setContactPerson()
     * @uses WorkLocationType::setExternalReference()
     * @uses WorkLocationType::setInternalManagementIndicator()
     * @uses WorkLocationType::setInternalManagementIndicatorSpecified()
     * @uses WorkLocationType::setLocationId()
     * @uses WorkLocationType::setLocationMDMoldCode()
     * @uses WorkLocationType::setLocationName()
     * @uses WorkLocationType::setLocationShortName()
     * @uses WorkLocationType::setStatus()
     * @uses WorkLocationType::setWorkLocationAddress()
     * @uses WorkLocationType::setWorkLocationType1()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactPersonType $contactPerson
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $externalReference
     * @param bool $internalManagementIndicator
     * @param bool $internalManagementIndicatorSpecified
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $locationId
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $locationMDMoldCode
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $locationName
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $locationShortName
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType $status
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfWorkLocationAddressType $workLocationAddress
     * @param \Randock\PostNL\BulkMailApi\StructType\WorkLocationTypeType $workLocationType1
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactPersonType $contactPerson = null, ?\Randock\PostNL\BulkMailApi\StructType\TextType1 $externalReference = null, ?bool $internalManagementIndicator = null, ?bool $internalManagementIndicatorSpecified = null, ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $locationId = null, ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $locationMDMoldCode = null, ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $locationName = null, ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $locationShortName = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType $status = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfWorkLocationAddressType $workLocationAddress = null, ?\Randock\PostNL\BulkMailApi\StructType\WorkLocationTypeType $workLocationType1 = null)
    {
        $this
            ->setContactPerson($contactPerson)
            ->setExternalReference($externalReference)
            ->setInternalManagementIndicator($internalManagementIndicator)
            ->setInternalManagementIndicatorSpecified($internalManagementIndicatorSpecified)
            ->setLocationId($locationId)
            ->setLocationMDMoldCode($locationMDMoldCode)
            ->setLocationName($locationName)
            ->setLocationShortName($locationShortName)
            ->setStatus($status)
            ->setWorkLocationAddress($workLocationAddress)
            ->setWorkLocationType1($workLocationType1);
    }
    /**
     * Get ContactPerson value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactPersonType|null
     */
    public function getContactPerson(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactPersonType
    {
        return isset($this->ContactPerson) ? $this->ContactPerson : null;
    }
    /**
     * Set ContactPerson value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactPersonType $contactPerson
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationType
     */
    public function setContactPerson(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactPersonType $contactPerson = null): self
    {
        if (is_null($contactPerson) || (is_array($contactPerson) && empty($contactPerson))) {
            unset($this->ContactPerson);
        } else {
            $this->ContactPerson = $contactPerson;
        }
        
        return $this;
    }
    /**
     * Get ExternalReference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getExternalReference(): ?\Randock\PostNL\BulkMailApi\StructType\TextType1
    {
        return isset($this->ExternalReference) ? $this->ExternalReference : null;
    }
    /**
     * Set ExternalReference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $externalReference
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationType
     */
    public function setExternalReference(?\Randock\PostNL\BulkMailApi\StructType\TextType1 $externalReference = null): self
    {
        if (is_null($externalReference) || (is_array($externalReference) && empty($externalReference))) {
            unset($this->ExternalReference);
        } else {
            $this->ExternalReference = $externalReference;
        }
        
        return $this;
    }
    /**
     * Get InternalManagementIndicator value
     * @return bool|null
     */
    public function getInternalManagementIndicator(): ?bool
    {
        return $this->InternalManagementIndicator;
    }
    /**
     * Set InternalManagementIndicator value
     * @param bool $internalManagementIndicator
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationType
     */
    public function setInternalManagementIndicator(?bool $internalManagementIndicator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($internalManagementIndicator) && !is_bool($internalManagementIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($internalManagementIndicator, true), gettype($internalManagementIndicator)), __LINE__);
        }
        $this->InternalManagementIndicator = $internalManagementIndicator;
        
        return $this;
    }
    /**
     * Get InternalManagementIndicatorSpecified value
     * @return bool|null
     */
    public function getInternalManagementIndicatorSpecified(): ?bool
    {
        return $this->InternalManagementIndicatorSpecified;
    }
    /**
     * Set InternalManagementIndicatorSpecified value
     * @param bool $internalManagementIndicatorSpecified
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationType
     */
    public function setInternalManagementIndicatorSpecified(?bool $internalManagementIndicatorSpecified = null): self
    {
        // validation for constraint: boolean
        if (!is_null($internalManagementIndicatorSpecified) && !is_bool($internalManagementIndicatorSpecified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($internalManagementIndicatorSpecified, true), gettype($internalManagementIndicatorSpecified)), __LINE__);
        }
        $this->InternalManagementIndicatorSpecified = $internalManagementIndicatorSpecified;
        
        return $this;
    }
    /**
     * Get LocationId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getLocationId(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return isset($this->LocationId) ? $this->LocationId : null;
    }
    /**
     * Set LocationId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $locationId
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationType
     */
    public function setLocationId(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $locationId = null): self
    {
        if (is_null($locationId) || (is_array($locationId) && empty($locationId))) {
            unset($this->LocationId);
        } else {
            $this->LocationId = $locationId;
        }
        
        return $this;
    }
    /**
     * Get LocationMDMoldCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getLocationMDMoldCode(): ?\Randock\PostNL\BulkMailApi\StructType\CodeType1
    {
        return isset($this->LocationMDMoldCode) ? $this->LocationMDMoldCode : null;
    }
    /**
     * Set LocationMDMoldCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $locationMDMoldCode
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationType
     */
    public function setLocationMDMoldCode(?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $locationMDMoldCode = null): self
    {
        if (is_null($locationMDMoldCode) || (is_array($locationMDMoldCode) && empty($locationMDMoldCode))) {
            unset($this->LocationMDMoldCode);
        } else {
            $this->LocationMDMoldCode = $locationMDMoldCode;
        }
        
        return $this;
    }
    /**
     * Get LocationName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function getLocationName(): ?\Randock\PostNL\BulkMailApi\StructType\NameType1
    {
        return isset($this->LocationName) ? $this->LocationName : null;
    }
    /**
     * Set LocationName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $locationName
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationType
     */
    public function setLocationName(?\Randock\PostNL\BulkMailApi\StructType\NameType1 $locationName = null): self
    {
        if (is_null($locationName) || (is_array($locationName) && empty($locationName))) {
            unset($this->LocationName);
        } else {
            $this->LocationName = $locationName;
        }
        
        return $this;
    }
    /**
     * Get LocationShortName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function getLocationShortName(): ?\Randock\PostNL\BulkMailApi\StructType\NameType1
    {
        return isset($this->LocationShortName) ? $this->LocationShortName : null;
    }
    /**
     * Set LocationShortName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $locationShortName
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationType
     */
    public function setLocationShortName(?\Randock\PostNL\BulkMailApi\StructType\NameType1 $locationShortName = null): self
    {
        if (is_null($locationShortName) || (is_array($locationShortName) && empty($locationShortName))) {
            unset($this->LocationShortName);
        } else {
            $this->LocationShortName = $locationShortName;
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
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationType
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
    /**
     * Get WorkLocationAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfWorkLocationAddressType|null
     */
    public function getWorkLocationAddress(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfWorkLocationAddressType
    {
        return isset($this->WorkLocationAddress) ? $this->WorkLocationAddress : null;
    }
    /**
     * Set WorkLocationAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfWorkLocationAddressType $workLocationAddress
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationType
     */
    public function setWorkLocationAddress(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfWorkLocationAddressType $workLocationAddress = null): self
    {
        if (is_null($workLocationAddress) || (is_array($workLocationAddress) && empty($workLocationAddress))) {
            unset($this->WorkLocationAddress);
        } else {
            $this->WorkLocationAddress = $workLocationAddress;
        }
        
        return $this;
    }
    /**
     * Get WorkLocationType1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationTypeType|null
     */
    public function getWorkLocationType1(): ?\Randock\PostNL\BulkMailApi\StructType\WorkLocationTypeType
    {
        return isset($this->WorkLocationType1) ? $this->WorkLocationType1 : null;
    }
    /**
     * Set WorkLocationType1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\WorkLocationTypeType $workLocationType1
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationType
     */
    public function setWorkLocationType1(?\Randock\PostNL\BulkMailApi\StructType\WorkLocationTypeType $workLocationType1 = null): self
    {
        if (is_null($workLocationType1) || (is_array($workLocationType1) && empty($workLocationType1))) {
            unset($this->WorkLocationType1);
        } else {
            $this->WorkLocationType1 = $workLocationType1;
        }
        
        return $this;
    }
}
