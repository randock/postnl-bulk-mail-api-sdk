<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPreferredNameType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPreferredNameType
 * @subpackage Arrays
 */
class ArrayOfPreferredNameType extends AbstractStructArrayBase
{
    /**
     * The PreferredNameType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\PreferredNameType[]
     */
    protected ?array $PreferredNameType = null;
    /**
     * Constructor method for ArrayOfPreferredNameType
     * @uses ArrayOfPreferredNameType::setPreferredNameType()
     * @param \Randock\PostNL\BulkMailApi\StructType\PreferredNameType[] $preferredNameType
     */
    public function __construct(?array $preferredNameType = null)
    {
        $this
            ->setPreferredNameType($preferredNameType);
    }
    /**
     * Get PreferredNameType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferredNameType[]
     */
    public function getPreferredNameType(): ?array
    {
        return isset($this->PreferredNameType) ? $this->PreferredNameType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPreferredNameType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPreferredNameType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePreferredNameTypeForArrayConstraintsFromSetPreferredNameType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPreferredNameTypePreferredNameTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfPreferredNameTypePreferredNameTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\PreferredNameType) {
                $invalidValues[] = is_object($arrayOfPreferredNameTypePreferredNameTypeItem) ? get_class($arrayOfPreferredNameTypePreferredNameTypeItem) : sprintf('%s(%s)', gettype($arrayOfPreferredNameTypePreferredNameTypeItem), var_export($arrayOfPreferredNameTypePreferredNameTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PreferredNameType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\PreferredNameType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PreferredNameType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\PreferredNameType[] $preferredNameType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferredNameType
     */
    public function setPreferredNameType(?array $preferredNameType = null): self
    {
        // validation for constraint: array
        if ('' !== ($preferredNameTypeArrayErrorMessage = self::validatePreferredNameTypeForArrayConstraintsFromSetPreferredNameType($preferredNameType))) {
            throw new InvalidArgumentException($preferredNameTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($preferredNameType) || (is_array($preferredNameType) && empty($preferredNameType))) {
            unset($this->PreferredNameType);
        } else {
            $this->PreferredNameType = $preferredNameType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferredNameType|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\PreferredNameType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferredNameType|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\PreferredNameType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferredNameType|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\PreferredNameType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferredNameType|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\PreferredNameType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferredNameType|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\PreferredNameType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\PreferredNameType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferredNameType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\PreferredNameType) {
            throw new InvalidArgumentException(sprintf('The PreferredNameType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\PreferredNameType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PreferredNameType
     */
    public function getAttributeName(): string
    {
        return 'PreferredNameType';
    }
}
