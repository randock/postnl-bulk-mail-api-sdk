<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfExtraAttachmentType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfExtraAttachmentType
 * @subpackage Arrays
 */
class ArrayOfExtraAttachmentType extends AbstractStructArrayBase
{
    /**
     * The ExtraAttachmentType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType[]
     */
    protected ?array $ExtraAttachmentType = null;
    /**
     * Constructor method for ArrayOfExtraAttachmentType
     * @uses ArrayOfExtraAttachmentType::setExtraAttachmentType()
     * @param \Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType[] $extraAttachmentType
     */
    public function __construct(?array $extraAttachmentType = null)
    {
        $this
            ->setExtraAttachmentType($extraAttachmentType);
    }
    /**
     * Get ExtraAttachmentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType[]
     */
    public function getExtraAttachmentType(): ?array
    {
        return isset($this->ExtraAttachmentType) ? $this->ExtraAttachmentType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setExtraAttachmentType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExtraAttachmentType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExtraAttachmentTypeForArrayConstraintsFromSetExtraAttachmentType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfExtraAttachmentTypeExtraAttachmentTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfExtraAttachmentTypeExtraAttachmentTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType) {
                $invalidValues[] = is_object($arrayOfExtraAttachmentTypeExtraAttachmentTypeItem) ? get_class($arrayOfExtraAttachmentTypeExtraAttachmentTypeItem) : sprintf('%s(%s)', gettype($arrayOfExtraAttachmentTypeExtraAttachmentTypeItem), var_export($arrayOfExtraAttachmentTypeExtraAttachmentTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExtraAttachmentType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExtraAttachmentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType[] $extraAttachmentType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfExtraAttachmentType
     */
    public function setExtraAttachmentType(?array $extraAttachmentType = null): self
    {
        // validation for constraint: array
        if ('' !== ($extraAttachmentTypeArrayErrorMessage = self::validateExtraAttachmentTypeForArrayConstraintsFromSetExtraAttachmentType($extraAttachmentType))) {
            throw new InvalidArgumentException($extraAttachmentTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($extraAttachmentType) || (is_array($extraAttachmentType) && empty($extraAttachmentType))) {
            unset($this->ExtraAttachmentType);
        } else {
            $this->ExtraAttachmentType = $extraAttachmentType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfExtraAttachmentType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType) {
            throw new InvalidArgumentException(sprintf('The ExtraAttachmentType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ExtraAttachmentType
     */
    public function getAttributeName(): string
    {
        return 'ExtraAttachmentType';
    }
}
