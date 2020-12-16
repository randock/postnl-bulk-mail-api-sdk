<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPreferenceType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPreferenceType
 * @subpackage Arrays
 */
class ArrayOfPreferenceType extends AbstractStructArrayBase
{
    /**
     * The PreferenceType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\PreferenceType[]
     */
    public $PreferenceType;
    /**
     * Constructor method for ArrayOfPreferenceType
     * @uses ArrayOfPreferenceType::setPreferenceType()
     * @param \Randock\PostNL\BulkMailApi\StructType\PreferenceType[] $preferenceType
     */
    public function __construct(array $preferenceType = array())
    {
        $this
            ->setPreferenceType($preferenceType);
    }
    /**
     * Get PreferenceType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferenceType[]|null
     */
    public function getPreferenceType()
    {
        return isset($this->PreferenceType) ? $this->PreferenceType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPreferenceType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPreferenceType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePreferenceTypeForArrayConstraintsFromSetPreferenceType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPreferenceTypePreferenceTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfPreferenceTypePreferenceTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\PreferenceType) {
                $invalidValues[] = is_object($arrayOfPreferenceTypePreferenceTypeItem) ? get_class($arrayOfPreferenceTypePreferenceTypeItem) : sprintf('%s(%s)', gettype($arrayOfPreferenceTypePreferenceTypeItem), var_export($arrayOfPreferenceTypePreferenceTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PreferenceType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\PreferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PreferenceType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\PreferenceType[] $preferenceType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferenceType
     */
    public function setPreferenceType(array $preferenceType = array())
    {
        // validation for constraint: array
        if ('' !== ($preferenceTypeArrayErrorMessage = self::validatePreferenceTypeForArrayConstraintsFromSetPreferenceType($preferenceType))) {
            throw new \InvalidArgumentException($preferenceTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($preferenceType) || (is_array($preferenceType) && empty($preferenceType))) {
            unset($this->PreferenceType);
        } else {
            $this->PreferenceType = $preferenceType;
        }
        return $this;
    }
    /**
     * Add item to PreferenceType value
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\PreferenceType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferenceType
     */
    public function addToPreferenceType(\Randock\PostNL\BulkMailApi\StructType\PreferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\PreferenceType) {
            throw new \InvalidArgumentException(sprintf('The PreferenceType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\PreferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PreferenceType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferenceType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferenceType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferenceType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferenceType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferenceType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PreferenceType
     */
    public function getAttributeName()
    {
        return 'PreferenceType';
    }
}
