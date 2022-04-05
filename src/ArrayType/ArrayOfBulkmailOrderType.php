<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBulkmailOrderType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBulkmailOrderType
 * @subpackage Arrays
 */
class ArrayOfBulkmailOrderType extends AbstractStructArrayBase
{
    /**
     * The BulkmailOrderType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType[]
     */
    protected ?array $BulkmailOrderType = null;
    /**
     * Constructor method for ArrayOfBulkmailOrderType
     * @uses ArrayOfBulkmailOrderType::setBulkmailOrderType()
     * @param \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType[] $bulkmailOrderType
     */
    public function __construct(?array $bulkmailOrderType = null)
    {
        $this
            ->setBulkmailOrderType($bulkmailOrderType);
    }
    /**
     * Get BulkmailOrderType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType[]
     */
    public function getBulkmailOrderType(): ?array
    {
        return isset($this->BulkmailOrderType) ? $this->BulkmailOrderType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setBulkmailOrderType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBulkmailOrderType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBulkmailOrderTypeForArrayConstraintsFromSetBulkmailOrderType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBulkmailOrderTypeBulkmailOrderTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfBulkmailOrderTypeBulkmailOrderTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType) {
                $invalidValues[] = is_object($arrayOfBulkmailOrderTypeBulkmailOrderTypeItem) ? get_class($arrayOfBulkmailOrderTypeBulkmailOrderTypeItem) : sprintf('%s(%s)', gettype($arrayOfBulkmailOrderTypeBulkmailOrderTypeItem), var_export($arrayOfBulkmailOrderTypeBulkmailOrderTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BulkmailOrderType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BulkmailOrderType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType[] $bulkmailOrderType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBulkmailOrderType
     */
    public function setBulkmailOrderType(?array $bulkmailOrderType = null): self
    {
        // validation for constraint: array
        if ('' !== ($bulkmailOrderTypeArrayErrorMessage = self::validateBulkmailOrderTypeForArrayConstraintsFromSetBulkmailOrderType($bulkmailOrderType))) {
            throw new InvalidArgumentException($bulkmailOrderTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($bulkmailOrderType) || (is_array($bulkmailOrderType) && empty($bulkmailOrderType))) {
            unset($this->BulkmailOrderType);
        } else {
            $this->BulkmailOrderType = $bulkmailOrderType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBulkmailOrderType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType) {
            throw new InvalidArgumentException(sprintf('The BulkmailOrderType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\BulkmailOrderType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BulkmailOrderType
     */
    public function getAttributeName(): string
    {
        return 'BulkmailOrderType';
    }
}
