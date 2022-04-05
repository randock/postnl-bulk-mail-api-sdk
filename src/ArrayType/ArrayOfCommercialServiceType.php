<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCommercialServiceType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCommercialServiceType
 * @subpackage Arrays
 */
class ArrayOfCommercialServiceType extends AbstractStructArrayBase
{
    /**
     * The CommercialServiceType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CommercialServiceType[]
     */
    protected ?array $CommercialServiceType = null;
    /**
     * Constructor method for ArrayOfCommercialServiceType
     * @uses ArrayOfCommercialServiceType::setCommercialServiceType()
     * @param \Randock\PostNL\BulkMailApi\StructType\CommercialServiceType[] $commercialServiceType
     */
    public function __construct(?array $commercialServiceType = null)
    {
        $this
            ->setCommercialServiceType($commercialServiceType);
    }
    /**
     * Get CommercialServiceType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CommercialServiceType[]
     */
    public function getCommercialServiceType(): ?array
    {
        return isset($this->CommercialServiceType) ? $this->CommercialServiceType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCommercialServiceType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommercialServiceType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommercialServiceTypeForArrayConstraintsFromSetCommercialServiceType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCommercialServiceTypeCommercialServiceTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfCommercialServiceTypeCommercialServiceTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\CommercialServiceType) {
                $invalidValues[] = is_object($arrayOfCommercialServiceTypeCommercialServiceTypeItem) ? get_class($arrayOfCommercialServiceTypeCommercialServiceTypeItem) : sprintf('%s(%s)', gettype($arrayOfCommercialServiceTypeCommercialServiceTypeItem), var_export($arrayOfCommercialServiceTypeCommercialServiceTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CommercialServiceType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\CommercialServiceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CommercialServiceType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\CommercialServiceType[] $commercialServiceType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCommercialServiceType
     */
    public function setCommercialServiceType(?array $commercialServiceType = null): self
    {
        // validation for constraint: array
        if ('' !== ($commercialServiceTypeArrayErrorMessage = self::validateCommercialServiceTypeForArrayConstraintsFromSetCommercialServiceType($commercialServiceType))) {
            throw new InvalidArgumentException($commercialServiceTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($commercialServiceType) || (is_array($commercialServiceType) && empty($commercialServiceType))) {
            unset($this->CommercialServiceType);
        } else {
            $this->CommercialServiceType = $commercialServiceType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\CommercialServiceType|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\CommercialServiceType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\CommercialServiceType|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\CommercialServiceType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\CommercialServiceType|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\CommercialServiceType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\CommercialServiceType|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\CommercialServiceType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\CommercialServiceType|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\CommercialServiceType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\CommercialServiceType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCommercialServiceType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\CommercialServiceType) {
            throw new InvalidArgumentException(sprintf('The CommercialServiceType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\CommercialServiceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CommercialServiceType
     */
    public function getAttributeName(): string
    {
        return 'CommercialServiceType';
    }
}
