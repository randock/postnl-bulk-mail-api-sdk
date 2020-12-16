<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfItemIDType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfItemIDType
 * @subpackage Arrays
 */
class ArrayOfItemIDType extends AbstractStructArrayBase
{
    /**
     * The ItemIDType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ItemIDType[]
     */
    public $ItemIDType;
    /**
     * Constructor method for ArrayOfItemIDType
     * @uses ArrayOfItemIDType::setItemIDType()
     * @param \Randock\PostNL\BulkMailApi\StructType\ItemIDType[] $itemIDType
     */
    public function __construct(array $itemIDType = array())
    {
        $this
            ->setItemIDType($itemIDType);
    }
    /**
     * Get ItemIDType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ItemIDType[]|null
     */
    public function getItemIDType()
    {
        return isset($this->ItemIDType) ? $this->ItemIDType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setItemIDType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemIDType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemIDTypeForArrayConstraintsFromSetItemIDType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfItemIDTypeItemIDTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfItemIDTypeItemIDTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\ItemIDType) {
                $invalidValues[] = is_object($arrayOfItemIDTypeItemIDTypeItem) ? get_class($arrayOfItemIDTypeItemIDTypeItem) : sprintf('%s(%s)', gettype($arrayOfItemIDTypeItemIDTypeItem), var_export($arrayOfItemIDTypeItemIDTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemIDType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\ItemIDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ItemIDType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\ItemIDType[] $itemIDType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemIDType
     */
    public function setItemIDType(array $itemIDType = array())
    {
        // validation for constraint: array
        if ('' !== ($itemIDTypeArrayErrorMessage = self::validateItemIDTypeForArrayConstraintsFromSetItemIDType($itemIDType))) {
            throw new \InvalidArgumentException($itemIDTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($itemIDType) || (is_array($itemIDType) && empty($itemIDType))) {
            unset($this->ItemIDType);
        } else {
            $this->ItemIDType = $itemIDType;
        }
        return $this;
    }
    /**
     * Add item to ItemIDType value
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\ItemIDType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemIDType
     */
    public function addToItemIDType(\Randock\PostNL\BulkMailApi\StructType\ItemIDType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\ItemIDType) {
            throw new \InvalidArgumentException(sprintf('The ItemIDType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\ItemIDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ItemIDType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\ItemIDType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\ItemIDType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\ItemIDType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\ItemIDType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\ItemIDType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemIDType
     */
    public function getAttributeName()
    {
        return 'ItemIDType';
    }
}
