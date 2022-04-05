<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimePeriodABIEType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TimePeriodABIEType
 * @subpackage Structs
 */
class TimePeriodABIEType extends AbstractStructBase
{
    /**
     * The InclusiveIndicator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $InclusiveIndicator = null;
    /**
     * The InclusiveIndicatorSpecified
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $InclusiveIndicatorSpecified = null;
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Item = null;
    /**
     * The ItemElementName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ItemElementName = null;
    /**
     * The StartDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StartDateTime = null;
    /**
     * Constructor method for TimePeriodABIEType
     * @uses TimePeriodABIEType::setInclusiveIndicator()
     * @uses TimePeriodABIEType::setInclusiveIndicatorSpecified()
     * @uses TimePeriodABIEType::setItem()
     * @uses TimePeriodABIEType::setItemElementName()
     * @uses TimePeriodABIEType::setStartDateTime()
     * @param bool $inclusiveIndicator
     * @param bool $inclusiveIndicatorSpecified
     * @param string $item
     * @param string $itemElementName
     * @param string $startDateTime
     */
    public function __construct(?bool $inclusiveIndicator = null, ?bool $inclusiveIndicatorSpecified = null, ?string $item = null, ?string $itemElementName = null, ?string $startDateTime = null)
    {
        $this
            ->setInclusiveIndicator($inclusiveIndicator)
            ->setInclusiveIndicatorSpecified($inclusiveIndicatorSpecified)
            ->setItem($item)
            ->setItemElementName($itemElementName)
            ->setStartDateTime($startDateTime);
    }
    /**
     * Get InclusiveIndicator value
     * @return bool|null
     */
    public function getInclusiveIndicator(): ?bool
    {
        return $this->InclusiveIndicator;
    }
    /**
     * Set InclusiveIndicator value
     * @param bool $inclusiveIndicator
     * @return \Randock\PostNL\BulkMailApi\StructType\TimePeriodABIEType
     */
    public function setInclusiveIndicator(?bool $inclusiveIndicator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inclusiveIndicator) && !is_bool($inclusiveIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inclusiveIndicator, true), gettype($inclusiveIndicator)), __LINE__);
        }
        $this->InclusiveIndicator = $inclusiveIndicator;
        
        return $this;
    }
    /**
     * Get InclusiveIndicatorSpecified value
     * @return bool|null
     */
    public function getInclusiveIndicatorSpecified(): ?bool
    {
        return $this->InclusiveIndicatorSpecified;
    }
    /**
     * Set InclusiveIndicatorSpecified value
     * @param bool $inclusiveIndicatorSpecified
     * @return \Randock\PostNL\BulkMailApi\StructType\TimePeriodABIEType
     */
    public function setInclusiveIndicatorSpecified(?bool $inclusiveIndicatorSpecified = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inclusiveIndicatorSpecified) && !is_bool($inclusiveIndicatorSpecified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inclusiveIndicatorSpecified, true), gettype($inclusiveIndicatorSpecified)), __LINE__);
        }
        $this->InclusiveIndicatorSpecified = $inclusiveIndicatorSpecified;
        
        return $this;
    }
    /**
     * Get Item value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getItem(): ?string
    {
        return isset($this->Item) ? $this->Item : null;
    }
    /**
     * Set Item value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $item
     * @return \Randock\PostNL\BulkMailApi\StructType\TimePeriodABIEType
     */
    public function setItem(?string $item = null): self
    {
        // validation for constraint: string
        if (!is_null($item) && !is_string($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($item, true), gettype($item)), __LINE__);
        }
        if (is_null($item) || (is_array($item) && empty($item))) {
            unset($this->Item);
        } else {
            $this->Item = $item;
        }
        
        return $this;
    }
    /**
     * Get ItemElementName value
     * @return string|null
     */
    public function getItemElementName(): ?string
    {
        return $this->ItemElementName;
    }
    /**
     * Set ItemElementName value
     * @uses \Randock\PostNL\BulkMailApi\EnumType\ItemChoiceType::valueIsValid()
     * @uses \Randock\PostNL\BulkMailApi\EnumType\ItemChoiceType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $itemElementName
     * @return \Randock\PostNL\BulkMailApi\StructType\TimePeriodABIEType
     */
    public function setItemElementName(?string $itemElementName = null): self
    {
        // validation for constraint: enumeration
        if (!\Randock\PostNL\BulkMailApi\EnumType\ItemChoiceType::valueIsValid($itemElementName)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Randock\PostNL\BulkMailApi\EnumType\ItemChoiceType', is_array($itemElementName) ? implode(', ', $itemElementName) : var_export($itemElementName, true), implode(', ', \Randock\PostNL\BulkMailApi\EnumType\ItemChoiceType::getValidValues())), __LINE__);
        }
        $this->ItemElementName = $itemElementName;
        
        return $this;
    }
    /**
     * Get StartDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDateTime(): ?string
    {
        return isset($this->StartDateTime) ? $this->StartDateTime : null;
    }
    /**
     * Set StartDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDateTime
     * @return \Randock\PostNL\BulkMailApi\StructType\TimePeriodABIEType
     */
    public function setStartDateTime(?string $startDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startDateTime) && !is_string($startDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDateTime, true), gettype($startDateTime)), __LINE__);
        }
        if (is_null($startDateTime) || (is_array($startDateTime) && empty($startDateTime))) {
            unset($this->StartDateTime);
        } else {
            $this->StartDateTime = $startDateTime;
        }
        
        return $this;
    }
}
