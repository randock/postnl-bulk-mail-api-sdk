<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfanyType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfanyType
 * @subpackage Arrays
 */
class ArrayOfanyType extends AbstractStructArrayBase
{
    /**
     * The anyType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var mixed[]
     */
    public $anyType;
    /**
     * Constructor method for ArrayOfanyType
     * @uses ArrayOfanyType::setAnyType()
     * @param mixed[] $anyType
     */
    public function __construct(array $anyType = array())
    {
        $this
            ->setAnyType($anyType);
    }
    /**
     * Get anyType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return mixed[]|null
     */
    public function getAnyType()
    {
        return isset($this->anyType) ? $this->anyType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAnyType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAnyType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAnyTypeForArrayConstraintsFromSetAnyType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfanyTypeAnyTypeItem) {
            // validation for constraint: itemType
            if (false) {
                $invalidValues[] = is_object($arrayOfanyTypeAnyTypeItem) ? get_class($arrayOfanyTypeAnyTypeItem) : sprintf('%s(%s)', gettype($arrayOfanyTypeAnyTypeItem), var_export($arrayOfanyTypeAnyTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The anyType property can only contain items of type anyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set anyType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param mixed[] $anyType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType
     */
    public function setAnyType(array $anyType = array())
    {
        // validation for constraint: array
        if ('' !== ($anyTypeArrayErrorMessage = self::validateAnyTypeForArrayConstraintsFromSetAnyType($anyType))) {
            throw new \InvalidArgumentException($anyTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($anyType) || (is_array($anyType) && empty($anyType))) {
            unset($this->anyType);
        } else {
            $this->anyType = $anyType;
        }
        return $this;
    }
    /**
     * Add item to anyType value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType
     */
    public function addToAnyType($item)
    {
        // validation for constraint: itemType
        if (false) {
            throw new \InvalidArgumentException(sprintf('The anyType property can only contain items of type anyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->anyType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return mixed|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return mixed|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return mixed|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return mixed|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string anyType
     */
    public function getAttributeName()
    {
        return 'anyType';
    }
}
