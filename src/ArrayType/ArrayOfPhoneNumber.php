<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPhoneNumber ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPhoneNumber
 * @subpackage Arrays
 */
class ArrayOfPhoneNumber extends AbstractStructArrayBase
{
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\PhoneNumber[]
     */
    public $PhoneNumber;
    /**
     * Constructor method for ArrayOfPhoneNumber
     * @uses ArrayOfPhoneNumber::setPhoneNumber()
     * @param \Randock\PostNL\BulkMailApi\StructType\PhoneNumber[] $phoneNumber
     */
    public function __construct(array $phoneNumber = array())
    {
        $this
            ->setPhoneNumber($phoneNumber);
    }
    /**
     * Get PhoneNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\PhoneNumber[]|null
     */
    public function getPhoneNumber()
    {
        return isset($this->PhoneNumber) ? $this->PhoneNumber : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPhoneNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhoneNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhoneNumberForArrayConstraintsFromSetPhoneNumber(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPhoneNumberPhoneNumberItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhoneNumberPhoneNumberItem instanceof \Randock\PostNL\BulkMailApi\StructType\PhoneNumber) {
                $invalidValues[] = is_object($arrayOfPhoneNumberPhoneNumberItem) ? get_class($arrayOfPhoneNumberPhoneNumberItem) : sprintf('%s(%s)', gettype($arrayOfPhoneNumberPhoneNumberItem), var_export($arrayOfPhoneNumberPhoneNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PhoneNumber property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\PhoneNumber, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PhoneNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\PhoneNumber[] $phoneNumber
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPhoneNumber
     */
    public function setPhoneNumber(array $phoneNumber = array())
    {
        // validation for constraint: array
        if ('' !== ($phoneNumberArrayErrorMessage = self::validatePhoneNumberForArrayConstraintsFromSetPhoneNumber($phoneNumber))) {
            throw new \InvalidArgumentException($phoneNumberArrayErrorMessage, __LINE__);
        }
        if (is_null($phoneNumber) || (is_array($phoneNumber) && empty($phoneNumber))) {
            unset($this->PhoneNumber);
        } else {
            $this->PhoneNumber = $phoneNumber;
        }
        return $this;
    }
    /**
     * Add item to PhoneNumber value
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\PhoneNumber $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPhoneNumber
     */
    public function addToPhoneNumber(\Randock\PostNL\BulkMailApi\StructType\PhoneNumber $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\PhoneNumber) {
            throw new \InvalidArgumentException(sprintf('The PhoneNumber property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\PhoneNumber, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PhoneNumber[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\PhoneNumber|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\PhoneNumber|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\PhoneNumber|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\PhoneNumber|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\PhoneNumber|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PhoneNumber
     */
    public function getAttributeName()
    {
        return 'PhoneNumber';
    }
}
