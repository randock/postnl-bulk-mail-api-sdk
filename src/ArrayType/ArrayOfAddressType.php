<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAddressType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAddressType
 * @subpackage Arrays
 */
class ArrayOfAddressType extends AbstractStructArrayBase
{
    /**
     * The AddressType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\AddressType[]
     */
    protected ?array $AddressType = null;
    /**
     * Constructor method for ArrayOfAddressType
     * @uses ArrayOfAddressType::setAddressType()
     * @param \Randock\PostNL\BulkMailApi\StructType\AddressType[] $addressType
     */
    public function __construct(?array $addressType = null)
    {
        $this
            ->setAddressType($addressType);
    }
    /**
     * Get AddressType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressType[]
     */
    public function getAddressType(): ?array
    {
        return isset($this->AddressType) ? $this->AddressType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAddressType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddressType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddressTypeForArrayConstraintsFromSetAddressType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAddressTypeAddressTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfAddressTypeAddressTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\AddressType) {
                $invalidValues[] = is_object($arrayOfAddressTypeAddressTypeItem) ? get_class($arrayOfAddressTypeAddressTypeItem) : sprintf('%s(%s)', gettype($arrayOfAddressTypeAddressTypeItem), var_export($arrayOfAddressTypeAddressTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AddressType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\AddressType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AddressType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\AddressType[] $addressType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfAddressType
     */
    public function setAddressType(?array $addressType = null): self
    {
        // validation for constraint: array
        if ('' !== ($addressTypeArrayErrorMessage = self::validateAddressTypeForArrayConstraintsFromSetAddressType($addressType))) {
            throw new InvalidArgumentException($addressTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($addressType) || (is_array($addressType) && empty($addressType))) {
            unset($this->AddressType);
        } else {
            $this->AddressType = $addressType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressType|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\AddressType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressType|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\AddressType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressType|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\AddressType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressType|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\AddressType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressType|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\AddressType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\AddressType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfAddressType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\AddressType) {
            throw new InvalidArgumentException(sprintf('The AddressType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\AddressType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AddressType
     */
    public function getAttributeName(): string
    {
        return 'AddressType';
    }
}
