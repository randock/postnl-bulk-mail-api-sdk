<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDescriptionType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDescriptionType
 * @subpackage Arrays
 */
class ArrayOfDescriptionType extends AbstractStructArrayBase
{
    /**
     * The DescriptionType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\DescriptionType[]
     */
    public $DescriptionType;
    /**
     * Constructor method for ArrayOfDescriptionType
     * @uses ArrayOfDescriptionType::setDescriptionType()
     * @param \Randock\PostNL\BulkMailApi\StructType\DescriptionType[] $descriptionType
     */
    public function __construct(array $descriptionType = array())
    {
        $this
            ->setDescriptionType($descriptionType);
    }
    /**
     * Get DescriptionType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\DescriptionType[]|null
     */
    public function getDescriptionType()
    {
        return isset($this->DescriptionType) ? $this->DescriptionType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDescriptionType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDescriptionType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDescriptionTypeForArrayConstraintsFromSetDescriptionType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDescriptionTypeDescriptionTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfDescriptionTypeDescriptionTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\DescriptionType) {
                $invalidValues[] = is_object($arrayOfDescriptionTypeDescriptionTypeItem) ? get_class($arrayOfDescriptionTypeDescriptionTypeItem) : sprintf('%s(%s)', gettype($arrayOfDescriptionTypeDescriptionTypeItem), var_export($arrayOfDescriptionTypeDescriptionTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DescriptionType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\DescriptionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DescriptionType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\DescriptionType[] $descriptionType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDescriptionType
     */
    public function setDescriptionType(array $descriptionType = array())
    {
        // validation for constraint: array
        if ('' !== ($descriptionTypeArrayErrorMessage = self::validateDescriptionTypeForArrayConstraintsFromSetDescriptionType($descriptionType))) {
            throw new \InvalidArgumentException($descriptionTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($descriptionType) || (is_array($descriptionType) && empty($descriptionType))) {
            unset($this->DescriptionType);
        } else {
            $this->DescriptionType = $descriptionType;
        }
        return $this;
    }
    /**
     * Add item to DescriptionType value
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\DescriptionType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDescriptionType
     */
    public function addToDescriptionType(\Randock\PostNL\BulkMailApi\StructType\DescriptionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\DescriptionType) {
            throw new \InvalidArgumentException(sprintf('The DescriptionType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\DescriptionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DescriptionType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\DescriptionType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\DescriptionType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\DescriptionType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\DescriptionType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\DescriptionType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DescriptionType
     */
    public function getAttributeName()
    {
        return 'DescriptionType';
    }
}
