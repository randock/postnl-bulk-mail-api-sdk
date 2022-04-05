<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProductItemType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfProductItemType
 * @subpackage Arrays
 */
class ArrayOfProductItemType extends AbstractStructArrayBase
{
    /**
     * The ProductItemType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ProductItemType[]
     */
    protected ?array $ProductItemType = null;
    /**
     * Constructor method for ArrayOfProductItemType
     * @uses ArrayOfProductItemType::setProductItemType()
     * @param \Randock\PostNL\BulkMailApi\StructType\ProductItemType[] $productItemType
     */
    public function __construct(?array $productItemType = null)
    {
        $this
            ->setProductItemType($productItemType);
    }
    /**
     * Get ProductItemType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ProductItemType[]
     */
    public function getProductItemType(): ?array
    {
        return isset($this->ProductItemType) ? $this->ProductItemType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setProductItemType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductItemType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductItemTypeForArrayConstraintsFromSetProductItemType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProductItemTypeProductItemTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfProductItemTypeProductItemTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\ProductItemType) {
                $invalidValues[] = is_object($arrayOfProductItemTypeProductItemTypeItem) ? get_class($arrayOfProductItemTypeProductItemTypeItem) : sprintf('%s(%s)', gettype($arrayOfProductItemTypeProductItemTypeItem), var_export($arrayOfProductItemTypeProductItemTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductItemType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\ProductItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProductItemType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\ProductItemType[] $productItemType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfProductItemType
     */
    public function setProductItemType(?array $productItemType = null): self
    {
        // validation for constraint: array
        if ('' !== ($productItemTypeArrayErrorMessage = self::validateProductItemTypeForArrayConstraintsFromSetProductItemType($productItemType))) {
            throw new InvalidArgumentException($productItemTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($productItemType) || (is_array($productItemType) && empty($productItemType))) {
            unset($this->ProductItemType);
        } else {
            $this->ProductItemType = $productItemType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\ProductItemType|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\ProductItemType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\ProductItemType|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\ProductItemType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\ProductItemType|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\ProductItemType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\ProductItemType|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\ProductItemType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\ProductItemType|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\ProductItemType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\ProductItemType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfProductItemType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\ProductItemType) {
            throw new InvalidArgumentException(sprintf('The ProductItemType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\ProductItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ProductItemType
     */
    public function getAttributeName(): string
    {
        return 'ProductItemType';
    }
}
