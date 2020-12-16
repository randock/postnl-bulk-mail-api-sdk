<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfItemsChoiceType1 ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfItemsChoiceType1
 * @subpackage Arrays
 */
class ArrayOfItemsChoiceType1 extends AbstractStructArrayBase
{
    /**
     * The ItemsChoiceType1
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ItemsChoiceType1;
    /**
     * Constructor method for ArrayOfItemsChoiceType1
     * @uses ArrayOfItemsChoiceType1::setItemsChoiceType1()
     * @param string[] $itemsChoiceType1
     */
    public function __construct(array $itemsChoiceType1 = array())
    {
        $this
            ->setItemsChoiceType1($itemsChoiceType1);
    }
    /**
     * Get ItemsChoiceType1 value
     * @return string[]|null
     */
    public function getItemsChoiceType1()
    {
        return $this->ItemsChoiceType1;
    }
    /**
     * This method is responsible for validating the values passed to the setItemsChoiceType1 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemsChoiceType1 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemsChoiceType1ForArrayConstraintsFromSetItemsChoiceType1(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfItemsChoiceType1ItemsChoiceType1Item) {
            // validation for constraint: enumeration
            if (!\Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType1::valueIsValid($arrayOfItemsChoiceType1ItemsChoiceType1Item)) {
                $invalidValues[] = is_object($arrayOfItemsChoiceType1ItemsChoiceType1Item) ? get_class($arrayOfItemsChoiceType1ItemsChoiceType1Item) : sprintf('%s(%s)', gettype($arrayOfItemsChoiceType1ItemsChoiceType1Item), var_export($arrayOfItemsChoiceType1ItemsChoiceType1Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType1', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType1::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ItemsChoiceType1 value
     * @uses \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType1::valueIsValid()
     * @uses \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType1::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $itemsChoiceType1
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType1
     */
    public function setItemsChoiceType1(array $itemsChoiceType1 = array())
    {
        // validation for constraint: array
        if ('' !== ($itemsChoiceType1ArrayErrorMessage = self::validateItemsChoiceType1ForArrayConstraintsFromSetItemsChoiceType1($itemsChoiceType1))) {
            throw new \InvalidArgumentException($itemsChoiceType1ArrayErrorMessage, __LINE__);
        }
        $this->ItemsChoiceType1 = $itemsChoiceType1;
        return $this;
    }
    /**
     * Add item to ItemsChoiceType1 value
     * @uses \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType1::valueIsValid()
     * @uses \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType1::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType1
     */
    public function addToItemsChoiceType1($item)
    {
        // validation for constraint: enumeration
        if (!\Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType1::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType1', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType1::getValidValues())), __LINE__);
        }
        $this->ItemsChoiceType1[] = $item;
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
     * @uses \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType1::valueIsValid()
     * @param string $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType1
     */
    public function add($item)
    {
        // validation for constraint: enumeration
        if (!\Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType1::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType1', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Randock\PostNL\BulkMailApi\EnumType\ItemsChoiceType1::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemsChoiceType1
     */
    public function getAttributeName()
    {
        return 'ItemsChoiceType1';
    }
}
