<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLocationType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLocationType
 * @subpackage Arrays
 */
class ArrayOfLocationType extends AbstractStructArrayBase
{
    /**
     * The LocationType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\LocationType[]
     */
    protected ?array $LocationType = null;
    /**
     * Constructor method for ArrayOfLocationType
     * @uses ArrayOfLocationType::setLocationType()
     * @param \Randock\PostNL\BulkMailApi\StructType\LocationType[] $locationType
     */
    public function __construct(?array $locationType = null)
    {
        $this
            ->setLocationType($locationType);
    }
    /**
     * Get LocationType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\LocationType[]
     */
    public function getLocationType(): ?array
    {
        return isset($this->LocationType) ? $this->LocationType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLocationType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocationType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocationTypeForArrayConstraintsFromSetLocationType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLocationTypeLocationTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfLocationTypeLocationTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\LocationType) {
                $invalidValues[] = is_object($arrayOfLocationTypeLocationTypeItem) ? get_class($arrayOfLocationTypeLocationTypeItem) : sprintf('%s(%s)', gettype($arrayOfLocationTypeLocationTypeItem), var_export($arrayOfLocationTypeLocationTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LocationType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\LocationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LocationType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\LocationType[] $locationType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfLocationType
     */
    public function setLocationType(?array $locationType = null): self
    {
        // validation for constraint: array
        if ('' !== ($locationTypeArrayErrorMessage = self::validateLocationTypeForArrayConstraintsFromSetLocationType($locationType))) {
            throw new InvalidArgumentException($locationTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($locationType) || (is_array($locationType) && empty($locationType))) {
            unset($this->LocationType);
        } else {
            $this->LocationType = $locationType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\LocationType|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\LocationType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\LocationType|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\LocationType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\LocationType|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\LocationType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\LocationType|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\LocationType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\LocationType|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\LocationType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\LocationType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfLocationType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\LocationType) {
            throw new InvalidArgumentException(sprintf('The LocationType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\LocationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LocationType
     */
    public function getAttributeName(): string
    {
        return 'LocationType';
    }
}
