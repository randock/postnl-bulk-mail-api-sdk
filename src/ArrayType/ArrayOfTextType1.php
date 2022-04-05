<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTextType1 ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTextType1
 * @subpackage Arrays
 */
class ArrayOfTextType1 extends AbstractStructArrayBase
{
    /**
     * The TextType1
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1[]
     */
    protected ?array $TextType1 = null;
    /**
     * Constructor method for ArrayOfTextType1
     * @uses ArrayOfTextType1::setTextType1()
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1[] $textType1
     */
    public function __construct(?array $textType1 = null)
    {
        $this
            ->setTextType1($textType1);
    }
    /**
     * Get TextType1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1[]
     */
    public function getTextType1(): ?array
    {
        return isset($this->TextType1) ? $this->TextType1 : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTextType1 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTextType1 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTextType1ForArrayConstraintsFromSetTextType1(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTextType1TextType1Item) {
            // validation for constraint: itemType
            if (!$arrayOfTextType1TextType1Item instanceof \Randock\PostNL\BulkMailApi\StructType\TextType1) {
                $invalidValues[] = is_object($arrayOfTextType1TextType1Item) ? get_class($arrayOfTextType1TextType1Item) : sprintf('%s(%s)', gettype($arrayOfTextType1TextType1Item), var_export($arrayOfTextType1TextType1Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TextType1 property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\TextType1, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TextType1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1[] $textType1
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1
     */
    public function setTextType1(?array $textType1 = null): self
    {
        // validation for constraint: array
        if ('' !== ($textType1ArrayErrorMessage = self::validateTextType1ForArrayConstraintsFromSetTextType1($textType1))) {
            throw new InvalidArgumentException($textType1ArrayErrorMessage, __LINE__);
        }
        if (is_null($textType1) || (is_array($textType1) && empty($textType1))) {
            unset($this->TextType1);
        } else {
            $this->TextType1 = $textType1;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\TextType1
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\TextType1
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\TextType1
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\TextType1
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\TextType1
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\TextType1) {
            throw new InvalidArgumentException(sprintf('The TextType1 property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\TextType1, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TextType1
     */
    public function getAttributeName(): string
    {
        return 'TextType1';
    }
}
