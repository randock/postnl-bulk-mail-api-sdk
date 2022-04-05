<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfConsignmentAdministrativeReferencesType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfConsignmentAdministrativeReferencesType
 * @subpackage Arrays
 */
class ArrayOfConsignmentAdministrativeReferencesType extends AbstractStructArrayBase
{
    /**
     * The ConsignmentAdministrativeReferencesType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType[]
     */
    protected ?array $ConsignmentAdministrativeReferencesType = null;
    /**
     * Constructor method for ArrayOfConsignmentAdministrativeReferencesType
     * @uses ArrayOfConsignmentAdministrativeReferencesType::setConsignmentAdministrativeReferencesType()
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType[] $consignmentAdministrativeReferencesType
     */
    public function __construct(?array $consignmentAdministrativeReferencesType = null)
    {
        $this
            ->setConsignmentAdministrativeReferencesType($consignmentAdministrativeReferencesType);
    }
    /**
     * Get ConsignmentAdministrativeReferencesType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType[]
     */
    public function getConsignmentAdministrativeReferencesType(): ?array
    {
        return isset($this->ConsignmentAdministrativeReferencesType) ? $this->ConsignmentAdministrativeReferencesType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setConsignmentAdministrativeReferencesType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConsignmentAdministrativeReferencesType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConsignmentAdministrativeReferencesTypeForArrayConstraintsFromSetConsignmentAdministrativeReferencesType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfConsignmentAdministrativeReferencesTypeConsignmentAdministrativeReferencesTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfConsignmentAdministrativeReferencesTypeConsignmentAdministrativeReferencesTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType) {
                $invalidValues[] = is_object($arrayOfConsignmentAdministrativeReferencesTypeConsignmentAdministrativeReferencesTypeItem) ? get_class($arrayOfConsignmentAdministrativeReferencesTypeConsignmentAdministrativeReferencesTypeItem) : sprintf('%s(%s)', gettype($arrayOfConsignmentAdministrativeReferencesTypeConsignmentAdministrativeReferencesTypeItem), var_export($arrayOfConsignmentAdministrativeReferencesTypeConsignmentAdministrativeReferencesTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ConsignmentAdministrativeReferencesType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ConsignmentAdministrativeReferencesType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType[] $consignmentAdministrativeReferencesType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentAdministrativeReferencesType
     */
    public function setConsignmentAdministrativeReferencesType(?array $consignmentAdministrativeReferencesType = null): self
    {
        // validation for constraint: array
        if ('' !== ($consignmentAdministrativeReferencesTypeArrayErrorMessage = self::validateConsignmentAdministrativeReferencesTypeForArrayConstraintsFromSetConsignmentAdministrativeReferencesType($consignmentAdministrativeReferencesType))) {
            throw new InvalidArgumentException($consignmentAdministrativeReferencesTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($consignmentAdministrativeReferencesType) || (is_array($consignmentAdministrativeReferencesType) && empty($consignmentAdministrativeReferencesType))) {
            unset($this->ConsignmentAdministrativeReferencesType);
        } else {
            $this->ConsignmentAdministrativeReferencesType = $consignmentAdministrativeReferencesType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentAdministrativeReferencesType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType) {
            throw new InvalidArgumentException(sprintf('The ConsignmentAdministrativeReferencesType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ConsignmentAdministrativeReferencesType
     */
    public function getAttributeName(): string
    {
        return 'ConsignmentAdministrativeReferencesType';
    }
}
