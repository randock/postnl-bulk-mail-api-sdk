<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCodeType1 ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCodeType1
 * @subpackage Arrays
 */
class ArrayOfCodeType1 extends AbstractStructArrayBase
{
    /**
     * The CodeType1
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1[]
     */
    public $CodeType1;
    /**
     * Constructor method for ArrayOfCodeType1
     * @uses ArrayOfCodeType1::setCodeType1()
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1[] $codeType1
     */
    public function __construct(array $codeType1 = array())
    {
        $this
            ->setCodeType1($codeType1);
    }
    /**
     * Get CodeType1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1[]|null
     */
    public function getCodeType1()
    {
        return isset($this->CodeType1) ? $this->CodeType1 : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCodeType1 method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCodeType1 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCodeType1ForArrayConstraintsFromSetCodeType1(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCodeType1CodeType1Item) {
            // validation for constraint: itemType
            if (!$arrayOfCodeType1CodeType1Item instanceof \Randock\PostNL\BulkMailApi\StructType\CodeType1) {
                $invalidValues[] = is_object($arrayOfCodeType1CodeType1Item) ? get_class($arrayOfCodeType1CodeType1Item) : sprintf('%s(%s)', gettype($arrayOfCodeType1CodeType1Item), var_export($arrayOfCodeType1CodeType1Item, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CodeType1 property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\CodeType1, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CodeType1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1[] $codeType1
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1
     */
    public function setCodeType1(array $codeType1 = array())
    {
        // validation for constraint: array
        if ('' !== ($codeType1ArrayErrorMessage = self::validateCodeType1ForArrayConstraintsFromSetCodeType1($codeType1))) {
            throw new \InvalidArgumentException($codeType1ArrayErrorMessage, __LINE__);
        }
        if (is_null($codeType1) || (is_array($codeType1) && empty($codeType1))) {
            unset($this->CodeType1);
        } else {
            $this->CodeType1 = $codeType1;
        }
        return $this;
    }
    /**
     * Add item to CodeType1 value
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1
     */
    public function addToCodeType1(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\CodeType1) {
            throw new \InvalidArgumentException(sprintf('The CodeType1 property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\CodeType1, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CodeType1[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CodeType1
     */
    public function getAttributeName()
    {
        return 'CodeType1';
    }
}
