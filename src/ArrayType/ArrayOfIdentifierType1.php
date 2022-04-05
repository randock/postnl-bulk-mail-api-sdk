<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfIdentifierType1 ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfIdentifierType1
 * @subpackage Arrays
 */
class ArrayOfIdentifierType1 extends AbstractStructArrayBase
{
    /**
     * The IdentifierType1
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1[]
     */
    protected ?array $IdentifierType1 = null;
    /**
     * Constructor method for ArrayOfIdentifierType1
     * @uses ArrayOfIdentifierType1::setIdentifierType1()
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1[] $identifierType1
     */
    public function __construct(?array $identifierType1 = null)
    {
        $this
            ->setIdentifierType1($identifierType1);
    }
    /**
     * Get IdentifierType1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1[]
     */
    public function getIdentifierType1(): ?array
    {
        return isset($this->IdentifierType1) ? $this->IdentifierType1 : null;
    }
    /**
     * This method is responsible for validating the values passed to the setIdentifierType1 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIdentifierType1 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdentifierType1ForArrayConstraintsFromSetIdentifierType1(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfIdentifierType1IdentifierType1Item) {
            // validation for constraint: itemType
            if (!$arrayOfIdentifierType1IdentifierType1Item instanceof \Randock\PostNL\BulkMailApi\StructType\IdentifierType1) {
                $invalidValues[] = is_object($arrayOfIdentifierType1IdentifierType1Item) ? get_class($arrayOfIdentifierType1IdentifierType1Item) : sprintf('%s(%s)', gettype($arrayOfIdentifierType1IdentifierType1Item), var_export($arrayOfIdentifierType1IdentifierType1Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IdentifierType1 property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\IdentifierType1, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set IdentifierType1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1[] $identifierType1
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1
     */
    public function setIdentifierType1(?array $identifierType1 = null): self
    {
        // validation for constraint: array
        if ('' !== ($identifierType1ArrayErrorMessage = self::validateIdentifierType1ForArrayConstraintsFromSetIdentifierType1($identifierType1))) {
            throw new InvalidArgumentException($identifierType1ArrayErrorMessage, __LINE__);
        }
        if (is_null($identifierType1) || (is_array($identifierType1) && empty($identifierType1))) {
            unset($this->IdentifierType1);
        } else {
            $this->IdentifierType1 = $identifierType1;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\IdentifierType1) {
            throw new InvalidArgumentException(sprintf('The IdentifierType1 property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\IdentifierType1, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string IdentifierType1
     */
    public function getAttributeName(): string
    {
        return 'IdentifierType1';
    }
}
