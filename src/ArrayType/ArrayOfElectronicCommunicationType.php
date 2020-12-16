<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfElectronicCommunicationType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfElectronicCommunicationType
 * @subpackage Arrays
 */
class ArrayOfElectronicCommunicationType extends AbstractStructArrayBase
{
    /**
     * The ElectronicCommunicationType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType[]
     */
    public $ElectronicCommunicationType;
    /**
     * Constructor method for ArrayOfElectronicCommunicationType
     * @uses ArrayOfElectronicCommunicationType::setElectronicCommunicationType()
     * @param \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType[] $electronicCommunicationType
     */
    public function __construct(array $electronicCommunicationType = array())
    {
        $this
            ->setElectronicCommunicationType($electronicCommunicationType);
    }
    /**
     * Get ElectronicCommunicationType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType[]|null
     */
    public function getElectronicCommunicationType()
    {
        return isset($this->ElectronicCommunicationType) ? $this->ElectronicCommunicationType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setElectronicCommunicationType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setElectronicCommunicationType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateElectronicCommunicationTypeForArrayConstraintsFromSetElectronicCommunicationType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfElectronicCommunicationTypeElectronicCommunicationTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfElectronicCommunicationTypeElectronicCommunicationTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType) {
                $invalidValues[] = is_object($arrayOfElectronicCommunicationTypeElectronicCommunicationTypeItem) ? get_class($arrayOfElectronicCommunicationTypeElectronicCommunicationTypeItem) : sprintf('%s(%s)', gettype($arrayOfElectronicCommunicationTypeElectronicCommunicationTypeItem), var_export($arrayOfElectronicCommunicationTypeElectronicCommunicationTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ElectronicCommunicationType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ElectronicCommunicationType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType[] $electronicCommunicationType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType
     */
    public function setElectronicCommunicationType(array $electronicCommunicationType = array())
    {
        // validation for constraint: array
        if ('' !== ($electronicCommunicationTypeArrayErrorMessage = self::validateElectronicCommunicationTypeForArrayConstraintsFromSetElectronicCommunicationType($electronicCommunicationType))) {
            throw new \InvalidArgumentException($electronicCommunicationTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($electronicCommunicationType) || (is_array($electronicCommunicationType) && empty($electronicCommunicationType))) {
            unset($this->ElectronicCommunicationType);
        } else {
            $this->ElectronicCommunicationType = $electronicCommunicationType;
        }
        return $this;
    }
    /**
     * Add item to ElectronicCommunicationType value
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType
     */
    public function addToElectronicCommunicationType(\Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType) {
            throw new \InvalidArgumentException(sprintf('The ElectronicCommunicationType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ElectronicCommunicationType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\ElectronicCommunicationType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ElectronicCommunicationType
     */
    public function getAttributeName()
    {
        return 'ElectronicCommunicationType';
    }
}
