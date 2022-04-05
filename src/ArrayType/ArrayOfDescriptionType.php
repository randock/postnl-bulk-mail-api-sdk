<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDescriptionType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDescriptionType
 * @subpackage Arrays
 */
class ArrayOfDescriptionType extends AbstractStructArrayBase
{
    /**
     * The DescriptionType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\DescriptionType[]
     */
    protected ?array $DescriptionType = null;
    /**
     * Constructor method for ArrayOfDescriptionType
     * @uses ArrayOfDescriptionType::setDescriptionType()
     * @param \Randock\PostNL\BulkMailApi\StructType\DescriptionType[] $descriptionType
     */
    public function __construct(?array $descriptionType = null)
    {
        $this
            ->setDescriptionType($descriptionType);
    }
    /**
     * Get DescriptionType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\DescriptionType[]
     */
    public function getDescriptionType(): ?array
    {
        return isset($this->DescriptionType) ? $this->DescriptionType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDescriptionType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDescriptionType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDescriptionTypeForArrayConstraintsFromSetDescriptionType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDescriptionTypeDescriptionTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfDescriptionTypeDescriptionTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\DescriptionType) {
                $invalidValues[] = is_object($arrayOfDescriptionTypeDescriptionTypeItem) ? get_class($arrayOfDescriptionTypeDescriptionTypeItem) : sprintf('%s(%s)', gettype($arrayOfDescriptionTypeDescriptionTypeItem), var_export($arrayOfDescriptionTypeDescriptionTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DescriptionType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\DescriptionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DescriptionType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\DescriptionType[] $descriptionType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDescriptionType
     */
    public function setDescriptionType(?array $descriptionType = null): self
    {
        // validation for constraint: array
        if ('' !== ($descriptionTypeArrayErrorMessage = self::validateDescriptionTypeForArrayConstraintsFromSetDescriptionType($descriptionType))) {
            throw new InvalidArgumentException($descriptionTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($descriptionType) || (is_array($descriptionType) && empty($descriptionType))) {
            unset($this->DescriptionType);
        } else {
            $this->DescriptionType = $descriptionType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\DescriptionType|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\DescriptionType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\DescriptionType|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\DescriptionType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\DescriptionType|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\DescriptionType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\DescriptionType|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\DescriptionType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\DescriptionType|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\DescriptionType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\DescriptionType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDescriptionType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\DescriptionType) {
            throw new InvalidArgumentException(sprintf('The DescriptionType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\DescriptionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DescriptionType
     */
    public function getAttributeName(): string
    {
        return 'DescriptionType';
    }
}
