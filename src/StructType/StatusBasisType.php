<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatusBasisType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:StatusBasisType
 * @subpackage Structs
 */
class StatusBasisType extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $Code;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\DescriptionType
     */
    public $Description;
    /**
     * The EffectiveDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EffectiveDateTime;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfSequencedTextType
     */
    public $Reason;
    /**
     * The ReasonCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $ReasonCode;
    /**
     * Constructor method for StatusBasisType
     * @uses StatusBasisType::setCode()
     * @uses StatusBasisType::setDescription()
     * @uses StatusBasisType::setEffectiveDateTime()
     * @uses StatusBasisType::setReason()
     * @uses StatusBasisType::setReasonCode()
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $code
     * @param \Randock\PostNL\BulkMailApi\StructType\DescriptionType $description
     * @param string $effectiveDateTime
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfSequencedTextType $reason
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $reasonCode
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $code = null, \Randock\PostNL\BulkMailApi\StructType\DescriptionType $description = null, $effectiveDateTime = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfSequencedTextType $reason = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $reasonCode = null)
    {
        $this
            ->setCode($code)
            ->setDescription($description)
            ->setEffectiveDateTime($effectiveDateTime)
            ->setReason($reason)
            ->setReasonCode($reasonCode);
    }
    /**
     * Get Code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getCode()
    {
        return isset($this->Code) ? $this->Code : null;
    }
    /**
     * Set Code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $code
     * @return \Randock\PostNL\BulkMailApi\StructType\StatusBasisType
     */
    public function setCode(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $code = null)
    {
        if (is_null($code) || (is_array($code) && empty($code))) {
            unset($this->Code);
        } else {
            $this->Code = $code;
        }
        return $this;
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\DescriptionType|null
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\DescriptionType $description
     * @return \Randock\PostNL\BulkMailApi\StructType\StatusBasisType
     */
    public function setDescription(\Randock\PostNL\BulkMailApi\StructType\DescriptionType $description = null)
    {
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        return $this;
    }
    /**
     * Get EffectiveDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEffectiveDateTime()
    {
        return isset($this->EffectiveDateTime) ? $this->EffectiveDateTime : null;
    }
    /**
     * Set EffectiveDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $effectiveDateTime
     * @return \Randock\PostNL\BulkMailApi\StructType\StatusBasisType
     */
    public function setEffectiveDateTime($effectiveDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($effectiveDateTime) && !is_string($effectiveDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveDateTime, true), gettype($effectiveDateTime)), __LINE__);
        }
        if (is_null($effectiveDateTime) || (is_array($effectiveDateTime) && empty($effectiveDateTime))) {
            unset($this->EffectiveDateTime);
        } else {
            $this->EffectiveDateTime = $effectiveDateTime;
        }
        return $this;
    }
    /**
     * Get Reason value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfSequencedTextType|null
     */
    public function getReason()
    {
        return isset($this->Reason) ? $this->Reason : null;
    }
    /**
     * Set Reason value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfSequencedTextType $reason
     * @return \Randock\PostNL\BulkMailApi\StructType\StatusBasisType
     */
    public function setReason(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfSequencedTextType $reason = null)
    {
        if (is_null($reason) || (is_array($reason) && empty($reason))) {
            unset($this->Reason);
        } else {
            $this->Reason = $reason;
        }
        return $this;
    }
    /**
     * Get ReasonCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getReasonCode()
    {
        return isset($this->ReasonCode) ? $this->ReasonCode : null;
    }
    /**
     * Set ReasonCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $reasonCode
     * @return \Randock\PostNL\BulkMailApi\StructType\StatusBasisType
     */
    public function setReasonCode(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $reasonCode = null)
    {
        if (is_null($reasonCode) || (is_array($reasonCode) && empty($reasonCode))) {
            unset($this->ReasonCode);
        } else {
            $this->ReasonCode = $reasonCode;
        }
        return $this;
    }
}
