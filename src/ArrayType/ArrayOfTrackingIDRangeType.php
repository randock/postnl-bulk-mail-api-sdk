<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTrackingIDRangeType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTrackingIDRangeType
 * @subpackage Arrays
 */
class ArrayOfTrackingIDRangeType extends AbstractStructArrayBase
{
    /**
     * The TrackingIDRangeType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType[]
     */
    protected ?array $TrackingIDRangeType = null;
    /**
     * Constructor method for ArrayOfTrackingIDRangeType
     * @uses ArrayOfTrackingIDRangeType::setTrackingIDRangeType()
     * @param \Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType[] $trackingIDRangeType
     */
    public function __construct(?array $trackingIDRangeType = null)
    {
        $this
            ->setTrackingIDRangeType($trackingIDRangeType);
    }
    /**
     * Get TrackingIDRangeType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType[]
     */
    public function getTrackingIDRangeType(): ?array
    {
        return isset($this->TrackingIDRangeType) ? $this->TrackingIDRangeType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTrackingIDRangeType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTrackingIDRangeType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTrackingIDRangeTypeForArrayConstraintsFromSetTrackingIDRangeType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTrackingIDRangeTypeTrackingIDRangeTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfTrackingIDRangeTypeTrackingIDRangeTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType) {
                $invalidValues[] = is_object($arrayOfTrackingIDRangeTypeTrackingIDRangeTypeItem) ? get_class($arrayOfTrackingIDRangeTypeTrackingIDRangeTypeItem) : sprintf('%s(%s)', gettype($arrayOfTrackingIDRangeTypeTrackingIDRangeTypeItem), var_export($arrayOfTrackingIDRangeTypeTrackingIDRangeTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TrackingIDRangeType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TrackingIDRangeType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType[] $trackingIDRangeType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTrackingIDRangeType
     */
    public function setTrackingIDRangeType(?array $trackingIDRangeType = null): self
    {
        // validation for constraint: array
        if ('' !== ($trackingIDRangeTypeArrayErrorMessage = self::validateTrackingIDRangeTypeForArrayConstraintsFromSetTrackingIDRangeType($trackingIDRangeType))) {
            throw new InvalidArgumentException($trackingIDRangeTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($trackingIDRangeType) || (is_array($trackingIDRangeType) && empty($trackingIDRangeType))) {
            unset($this->TrackingIDRangeType);
        } else {
            $this->TrackingIDRangeType = $trackingIDRangeType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTrackingIDRangeType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType) {
            throw new InvalidArgumentException(sprintf('The TrackingIDRangeType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TrackingIDRangeType
     */
    public function getAttributeName(): string
    {
        return 'TrackingIDRangeType';
    }
}
