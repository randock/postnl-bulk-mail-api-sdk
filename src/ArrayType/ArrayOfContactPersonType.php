<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfContactPersonType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfContactPersonType
 * @subpackage Arrays
 */
class ArrayOfContactPersonType extends AbstractStructArrayBase
{
    /**
     * The ContactPersonType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ContactPersonType[]
     */
    public $ContactPersonType;
    /**
     * Constructor method for ArrayOfContactPersonType
     * @uses ArrayOfContactPersonType::setContactPersonType()
     * @param \Randock\PostNL\BulkMailApi\StructType\ContactPersonType[] $contactPersonType
     */
    public function __construct(array $contactPersonType = array())
    {
        $this
            ->setContactPersonType($contactPersonType);
    }
    /**
     * Get ContactPersonType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactPersonType[]|null
     */
    public function getContactPersonType()
    {
        return isset($this->ContactPersonType) ? $this->ContactPersonType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setContactPersonType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContactPersonType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContactPersonTypeForArrayConstraintsFromSetContactPersonType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfContactPersonTypeContactPersonTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfContactPersonTypeContactPersonTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\ContactPersonType) {
                $invalidValues[] = is_object($arrayOfContactPersonTypeContactPersonTypeItem) ? get_class($arrayOfContactPersonTypeContactPersonTypeItem) : sprintf('%s(%s)', gettype($arrayOfContactPersonTypeContactPersonTypeItem), var_export($arrayOfContactPersonTypeContactPersonTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ContactPersonType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\ContactPersonType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ContactPersonType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\ContactPersonType[] $contactPersonType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactPersonType
     */
    public function setContactPersonType(array $contactPersonType = array())
    {
        // validation for constraint: array
        if ('' !== ($contactPersonTypeArrayErrorMessage = self::validateContactPersonTypeForArrayConstraintsFromSetContactPersonType($contactPersonType))) {
            throw new \InvalidArgumentException($contactPersonTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($contactPersonType) || (is_array($contactPersonType) && empty($contactPersonType))) {
            unset($this->ContactPersonType);
        } else {
            $this->ContactPersonType = $contactPersonType;
        }
        return $this;
    }
    /**
     * Add item to ContactPersonType value
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\ContactPersonType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactPersonType
     */
    public function addToContactPersonType(\Randock\PostNL\BulkMailApi\StructType\ContactPersonType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\ContactPersonType) {
            throw new \InvalidArgumentException(sprintf('The ContactPersonType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\ContactPersonType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ContactPersonType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactPersonType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactPersonType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactPersonType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactPersonType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactPersonType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ContactPersonType
     */
    public function getAttributeName()
    {
        return 'ContactPersonType';
    }
}
