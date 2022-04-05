<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWorkLocationAddressType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfWorkLocationAddressType
 * @subpackage Arrays
 */
class ArrayOfWorkLocationAddressType extends AbstractStructArrayBase
{
    /**
     * The WorkLocationAddressType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType[]
     */
    protected ?array $WorkLocationAddressType = null;
    /**
     * Constructor method for ArrayOfWorkLocationAddressType
     * @uses ArrayOfWorkLocationAddressType::setWorkLocationAddressType()
     * @param \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType[] $workLocationAddressType
     */
    public function __construct(?array $workLocationAddressType = null)
    {
        $this
            ->setWorkLocationAddressType($workLocationAddressType);
    }
    /**
     * Get WorkLocationAddressType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType[]
     */
    public function getWorkLocationAddressType(): ?array
    {
        return isset($this->WorkLocationAddressType) ? $this->WorkLocationAddressType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkLocationAddressType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkLocationAddressType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkLocationAddressTypeForArrayConstraintsFromSetWorkLocationAddressType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfWorkLocationAddressTypeWorkLocationAddressTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfWorkLocationAddressTypeWorkLocationAddressTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType) {
                $invalidValues[] = is_object($arrayOfWorkLocationAddressTypeWorkLocationAddressTypeItem) ? get_class($arrayOfWorkLocationAddressTypeWorkLocationAddressTypeItem) : sprintf('%s(%s)', gettype($arrayOfWorkLocationAddressTypeWorkLocationAddressTypeItem), var_export($arrayOfWorkLocationAddressTypeWorkLocationAddressTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WorkLocationAddressType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set WorkLocationAddressType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType[] $workLocationAddressType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfWorkLocationAddressType
     */
    public function setWorkLocationAddressType(?array $workLocationAddressType = null): self
    {
        // validation for constraint: array
        if ('' !== ($workLocationAddressTypeArrayErrorMessage = self::validateWorkLocationAddressTypeForArrayConstraintsFromSetWorkLocationAddressType($workLocationAddressType))) {
            throw new InvalidArgumentException($workLocationAddressTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($workLocationAddressType) || (is_array($workLocationAddressType) && empty($workLocationAddressType))) {
            unset($this->WorkLocationAddressType);
        } else {
            $this->WorkLocationAddressType = $workLocationAddressType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfWorkLocationAddressType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType) {
            throw new InvalidArgumentException(sprintf('The WorkLocationAddressType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WorkLocationAddressType
     */
    public function getAttributeName(): string
    {
        return 'WorkLocationAddressType';
    }
}
