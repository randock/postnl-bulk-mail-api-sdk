<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNameType1 ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfNameType1
 * @subpackage Arrays
 */
class ArrayOfNameType1 extends AbstractStructArrayBase
{
    /**
     * The NameType1
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1[]
     */
    protected ?array $NameType1 = null;
    /**
     * Constructor method for ArrayOfNameType1
     * @uses ArrayOfNameType1::setNameType1()
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1[] $nameType1
     */
    public function __construct(?array $nameType1 = null)
    {
        $this
            ->setNameType1($nameType1);
    }
    /**
     * Get NameType1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1[]
     */
    public function getNameType1(): ?array
    {
        return isset($this->NameType1) ? $this->NameType1 : null;
    }
    /**
     * This method is responsible for validating the values passed to the setNameType1 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNameType1 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNameType1ForArrayConstraintsFromSetNameType1(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfNameType1NameType1Item) {
            // validation for constraint: itemType
            if (!$arrayOfNameType1NameType1Item instanceof \Randock\PostNL\BulkMailApi\StructType\NameType1) {
                $invalidValues[] = is_object($arrayOfNameType1NameType1Item) ? get_class($arrayOfNameType1NameType1Item) : sprintf('%s(%s)', gettype($arrayOfNameType1NameType1Item), var_export($arrayOfNameType1NameType1Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NameType1 property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\NameType1, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NameType1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1[] $nameType1
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1
     */
    public function setNameType1(?array $nameType1 = null): self
    {
        // validation for constraint: array
        if ('' !== ($nameType1ArrayErrorMessage = self::validateNameType1ForArrayConstraintsFromSetNameType1($nameType1))) {
            throw new InvalidArgumentException($nameType1ArrayErrorMessage, __LINE__);
        }
        if (is_null($nameType1) || (is_array($nameType1) && empty($nameType1))) {
            unset($this->NameType1);
        } else {
            $this->NameType1 = $nameType1;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\NameType1
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\NameType1
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\NameType1
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\NameType1
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\NameType1
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\NameType1) {
            throw new InvalidArgumentException(sprintf('The NameType1 property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\NameType1, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NameType1
     */
    public function getAttributeName(): string
    {
        return 'NameType1';
    }
}
