<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSequencedTextType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSequencedTextType
 * @subpackage Arrays
 */
class ArrayOfSequencedTextType extends AbstractStructArrayBase
{
    /**
     * The SequencedTextType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\SequencedTextType[]
     */
    protected ?array $SequencedTextType = null;
    /**
     * Constructor method for ArrayOfSequencedTextType
     * @uses ArrayOfSequencedTextType::setSequencedTextType()
     * @param \Randock\PostNL\BulkMailApi\StructType\SequencedTextType[] $sequencedTextType
     */
    public function __construct(?array $sequencedTextType = null)
    {
        $this
            ->setSequencedTextType($sequencedTextType);
    }
    /**
     * Get SequencedTextType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\SequencedTextType[]
     */
    public function getSequencedTextType(): ?array
    {
        return isset($this->SequencedTextType) ? $this->SequencedTextType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSequencedTextType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSequencedTextType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSequencedTextTypeForArrayConstraintsFromSetSequencedTextType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSequencedTextTypeSequencedTextTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfSequencedTextTypeSequencedTextTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\SequencedTextType) {
                $invalidValues[] = is_object($arrayOfSequencedTextTypeSequencedTextTypeItem) ? get_class($arrayOfSequencedTextTypeSequencedTextTypeItem) : sprintf('%s(%s)', gettype($arrayOfSequencedTextTypeSequencedTextTypeItem), var_export($arrayOfSequencedTextTypeSequencedTextTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SequencedTextType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\SequencedTextType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SequencedTextType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\SequencedTextType[] $sequencedTextType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfSequencedTextType
     */
    public function setSequencedTextType(?array $sequencedTextType = null): self
    {
        // validation for constraint: array
        if ('' !== ($sequencedTextTypeArrayErrorMessage = self::validateSequencedTextTypeForArrayConstraintsFromSetSequencedTextType($sequencedTextType))) {
            throw new InvalidArgumentException($sequencedTextTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($sequencedTextType) || (is_array($sequencedTextType) && empty($sequencedTextType))) {
            unset($this->SequencedTextType);
        } else {
            $this->SequencedTextType = $sequencedTextType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\SequencedTextType|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\SequencedTextType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\SequencedTextType|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\SequencedTextType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\SequencedTextType|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\SequencedTextType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\SequencedTextType|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\SequencedTextType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\SequencedTextType|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\SequencedTextType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\SequencedTextType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfSequencedTextType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\SequencedTextType) {
            throw new InvalidArgumentException(sprintf('The SequencedTextType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\SequencedTextType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SequencedTextType
     */
    public function getAttributeName(): string
    {
        return 'SequencedTextType';
    }
}
