<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
    public $ConsignmentAdministrativeReferencesType;
    /**
     * Constructor method for ArrayOfConsignmentAdministrativeReferencesType
     * @uses ArrayOfConsignmentAdministrativeReferencesType::setConsignmentAdministrativeReferencesType()
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType[] $consignmentAdministrativeReferencesType
     */
    public function __construct(array $consignmentAdministrativeReferencesType = array())
    {
        $this
            ->setConsignmentAdministrativeReferencesType($consignmentAdministrativeReferencesType);
    }
    /**
     * Get ConsignmentAdministrativeReferencesType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType[]|null
     */
    public function getConsignmentAdministrativeReferencesType()
    {
        return isset($this->ConsignmentAdministrativeReferencesType) ? $this->ConsignmentAdministrativeReferencesType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setConsignmentAdministrativeReferencesType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConsignmentAdministrativeReferencesType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConsignmentAdministrativeReferencesTypeForArrayConstraintsFromSetConsignmentAdministrativeReferencesType(array $values = array())
    {
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
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType[] $consignmentAdministrativeReferencesType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentAdministrativeReferencesType
     */
    public function setConsignmentAdministrativeReferencesType(array $consignmentAdministrativeReferencesType = array())
    {
        // validation for constraint: array
        if ('' !== ($consignmentAdministrativeReferencesTypeArrayErrorMessage = self::validateConsignmentAdministrativeReferencesTypeForArrayConstraintsFromSetConsignmentAdministrativeReferencesType($consignmentAdministrativeReferencesType))) {
            throw new \InvalidArgumentException($consignmentAdministrativeReferencesTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($consignmentAdministrativeReferencesType) || (is_array($consignmentAdministrativeReferencesType) && empty($consignmentAdministrativeReferencesType))) {
            unset($this->ConsignmentAdministrativeReferencesType);
        } else {
            $this->ConsignmentAdministrativeReferencesType = $consignmentAdministrativeReferencesType;
        }
        return $this;
    }
    /**
     * Add item to ConsignmentAdministrativeReferencesType value
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfConsignmentAdministrativeReferencesType
     */
    public function addToConsignmentAdministrativeReferencesType(\Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType) {
            throw new \InvalidArgumentException(sprintf('The ConsignmentAdministrativeReferencesType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ConsignmentAdministrativeReferencesType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ConsignmentAdministrativeReferencesType
     */
    public function getAttributeName()
    {
        return 'ConsignmentAdministrativeReferencesType';
    }
}
