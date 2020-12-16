<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfItemsChoiceType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfItemsChoiceType
 * @subpackage Arrays
 */
class ArrayOfItemsChoiceType extends AbstractStructArrayBase
{
    /**
     * The ItemsChoiceType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ItemsChoiceType;
    /**
     * Constructor method for ArrayOfItemsChoiceType
     * @uses ArrayOfItemsChoiceType::setItemsChoiceType()
     * @param string[] $itemsChoiceType
     */
    public function __construct(array $itemsChoiceType = array())
    {
        $this
            ->setItemsChoiceType($itemsChoiceType);
    }
    /**
     * Get ItemsChoiceType value
     * @return string[]|null
     */
    public function getItemsChoiceType()
    {
        return $this->ItemsChoiceType;
    }
    /**
     * This method is responsible for validating the values passed to the setItemsChoiceType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemsChoiceType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemsChoiceTypeForArrayConstraintsFromSetItemsChoiceType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfItemsChoiceTypeItemsChoiceTypeItem) {
            // validation for constraint: enumeration
            if (!\Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType::valueIsValid($arrayOfItemsChoiceTypeItemsChoiceTypeItem)) {
                $invalidValues[] = is_object($arrayOfItemsChoiceTypeItemsChoiceTypeItem) ? get_class($arrayOfItemsChoiceTypeItemsChoiceTypeItem) : sprintf('%s(%s)', gettype($arrayOfItemsChoiceTypeItemsChoiceTypeItem), var_export($arrayOfItemsChoiceTypeItemsChoiceTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ItemsChoiceType value
     * @uses \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType::valueIsValid()
     * @uses \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $itemsChoiceType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType
     */
    public function setItemsChoiceType(array $itemsChoiceType = array())
    {
        // validation for constraint: array
        if ('' !== ($itemsChoiceTypeArrayErrorMessage = self::validateItemsChoiceTypeForArrayConstraintsFromSetItemsChoiceType($itemsChoiceType))) {
            throw new \InvalidArgumentException($itemsChoiceTypeArrayErrorMessage, __LINE__);
        }
        $this->ItemsChoiceType = $itemsChoiceType;
        return $this;
    }
    /**
     * Add item to ItemsChoiceType value
     * @uses \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType::valueIsValid()
     * @uses \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType
     */
    public function addToItemsChoiceType($item)
    {
        // validation for constraint: enumeration
        if (!\Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType::getValidValues())), __LINE__);
        }
        $this->ItemsChoiceType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType::valueIsValid()
     * @param string $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType
     */
    public function add($item)
    {
        // validation for constraint: enumeration
        if (!\Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemsChoiceType
     */
    public function getAttributeName()
    {
        return 'ItemsChoiceType';
    }
}
