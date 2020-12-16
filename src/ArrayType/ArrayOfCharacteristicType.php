<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCharacteristicType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCharacteristicType
 * @subpackage Arrays
 */
class ArrayOfCharacteristicType extends AbstractStructArrayBase
{
    /**
     * The CharacteristicType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CharacteristicType[]
     */
    public $CharacteristicType;
    /**
     * Constructor method for ArrayOfCharacteristicType
     * @uses ArrayOfCharacteristicType::setCharacteristicType()
     * @param \Randock\PostNL\BulkMailApi\StructType\CharacteristicType[] $characteristicType
     */
    public function __construct(array $characteristicType = array())
    {
        $this
            ->setCharacteristicType($characteristicType);
    }
    /**
     * Get CharacteristicType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CharacteristicType[]|null
     */
    public function getCharacteristicType()
    {
        return isset($this->CharacteristicType) ? $this->CharacteristicType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCharacteristicType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharacteristicType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCharacteristicTypeForArrayConstraintsFromSetCharacteristicType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCharacteristicTypeCharacteristicTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfCharacteristicTypeCharacteristicTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\CharacteristicType) {
                $invalidValues[] = is_object($arrayOfCharacteristicTypeCharacteristicTypeItem) ? get_class($arrayOfCharacteristicTypeCharacteristicTypeItem) : sprintf('%s(%s)', gettype($arrayOfCharacteristicTypeCharacteristicTypeItem), var_export($arrayOfCharacteristicTypeCharacteristicTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CharacteristicType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\CharacteristicType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CharacteristicType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\CharacteristicType[] $characteristicType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType
     */
    public function setCharacteristicType(array $characteristicType = array())
    {
        // validation for constraint: array
        if ('' !== ($characteristicTypeArrayErrorMessage = self::validateCharacteristicTypeForArrayConstraintsFromSetCharacteristicType($characteristicType))) {
            throw new \InvalidArgumentException($characteristicTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($characteristicType) || (is_array($characteristicType) && empty($characteristicType))) {
            unset($this->CharacteristicType);
        } else {
            $this->CharacteristicType = $characteristicType;
        }
        return $this;
    }
    /**
     * Add item to CharacteristicType value
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\CharacteristicType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType
     */
    public function addToCharacteristicType(\Randock\PostNL\BulkMailApi\StructType\CharacteristicType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\CharacteristicType) {
            throw new \InvalidArgumentException(sprintf('The CharacteristicType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\CharacteristicType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CharacteristicType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\CharacteristicType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\CharacteristicType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\CharacteristicType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\CharacteristicType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\CharacteristicType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CharacteristicType
     */
    public function getAttributeName()
    {
        return 'CharacteristicType';
    }
}
