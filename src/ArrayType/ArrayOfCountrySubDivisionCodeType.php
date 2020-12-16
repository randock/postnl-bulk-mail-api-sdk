<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCountrySubDivisionCodeType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCountrySubDivisionCodeType
 * @subpackage Arrays
 */
class ArrayOfCountrySubDivisionCodeType extends AbstractStructArrayBase
{
    /**
     * The CountrySubDivisionCodeType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType[]
     */
    public $CountrySubDivisionCodeType;
    /**
     * Constructor method for ArrayOfCountrySubDivisionCodeType
     * @uses ArrayOfCountrySubDivisionCodeType::setCountrySubDivisionCodeType()
     * @param \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType[] $countrySubDivisionCodeType
     */
    public function __construct(array $countrySubDivisionCodeType = array())
    {
        $this
            ->setCountrySubDivisionCodeType($countrySubDivisionCodeType);
    }
    /**
     * Get CountrySubDivisionCodeType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType[]|null
     */
    public function getCountrySubDivisionCodeType()
    {
        return isset($this->CountrySubDivisionCodeType) ? $this->CountrySubDivisionCodeType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCountrySubDivisionCodeType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountrySubDivisionCodeType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountrySubDivisionCodeTypeForArrayConstraintsFromSetCountrySubDivisionCodeType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCountrySubDivisionCodeTypeCountrySubDivisionCodeTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfCountrySubDivisionCodeTypeCountrySubDivisionCodeTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType) {
                $invalidValues[] = is_object($arrayOfCountrySubDivisionCodeTypeCountrySubDivisionCodeTypeItem) ? get_class($arrayOfCountrySubDivisionCodeTypeCountrySubDivisionCodeTypeItem) : sprintf('%s(%s)', gettype($arrayOfCountrySubDivisionCodeTypeCountrySubDivisionCodeTypeItem), var_export($arrayOfCountrySubDivisionCodeTypeCountrySubDivisionCodeTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CountrySubDivisionCodeType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CountrySubDivisionCodeType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType[] $countrySubDivisionCodeType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCountrySubDivisionCodeType
     */
    public function setCountrySubDivisionCodeType(array $countrySubDivisionCodeType = array())
    {
        // validation for constraint: array
        if ('' !== ($countrySubDivisionCodeTypeArrayErrorMessage = self::validateCountrySubDivisionCodeTypeForArrayConstraintsFromSetCountrySubDivisionCodeType($countrySubDivisionCodeType))) {
            throw new \InvalidArgumentException($countrySubDivisionCodeTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($countrySubDivisionCodeType) || (is_array($countrySubDivisionCodeType) && empty($countrySubDivisionCodeType))) {
            unset($this->CountrySubDivisionCodeType);
        } else {
            $this->CountrySubDivisionCodeType = $countrySubDivisionCodeType;
        }
        return $this;
    }
    /**
     * Add item to CountrySubDivisionCodeType value
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCountrySubDivisionCodeType
     */
    public function addToCountrySubDivisionCodeType(\Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType) {
            throw new \InvalidArgumentException(sprintf('The CountrySubDivisionCodeType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CountrySubDivisionCodeType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CountrySubDivisionCodeType
     */
    public function getAttributeName()
    {
        return 'CountrySubDivisionCodeType';
    }
}
