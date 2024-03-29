<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfContactType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfContactType
 * @subpackage Arrays
 */
class ArrayOfContactType extends AbstractStructArrayBase
{
    /**
     * The ContactType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ContactType[]
     */
    public $ContactType;
    /**
     * Constructor method for ArrayOfContactType
     * @uses ArrayOfContactType::setContactType()
     * @param \Randock\PostNL\BulkMailApi\StructType\ContactType[] $contactType
     */
    public function __construct(array $contactType = array())
    {
        $this
            ->setContactType($contactType);
    }
    /**
     * Get ContactType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactType[]|null
     */
    public function getContactType()
    {
        return isset($this->ContactType) ? $this->ContactType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setContactType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContactType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContactTypeForArrayConstraintsFromSetContactType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfContactTypeContactTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfContactTypeContactTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\ContactType) {
                $invalidValues[] = is_object($arrayOfContactTypeContactTypeItem) ? get_class($arrayOfContactTypeContactTypeItem) : sprintf('%s(%s)', gettype($arrayOfContactTypeContactTypeItem), var_export($arrayOfContactTypeContactTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ContactType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\ContactType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ContactType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\ContactType[] $contactType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactType
     */
    public function setContactType(array $contactType = array())
    {
        // validation for constraint: array
        if ('' !== ($contactTypeArrayErrorMessage = self::validateContactTypeForArrayConstraintsFromSetContactType($contactType))) {
            throw new \InvalidArgumentException($contactTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($contactType) || (is_array($contactType) && empty($contactType))) {
            unset($this->ContactType);
        } else {
            $this->ContactType = $contactType;
        }
        return $this;
    }
    /**
     * Add item to ContactType value
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\ContactType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactType
     */
    public function addToContactType(\Randock\PostNL\BulkMailApi\StructType\ContactType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\ContactType) {
            throw new \InvalidArgumentException(sprintf('The ContactType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\ContactType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ContactType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ContactType
     */
    public function getAttributeName()
    {
        return 'ContactType';
    }
}
