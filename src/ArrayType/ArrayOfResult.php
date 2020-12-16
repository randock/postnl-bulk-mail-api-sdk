<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfResult ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfResult
 * @subpackage Arrays
 */
class ArrayOfResult extends AbstractStructArrayBase
{
    /**
     * The Result
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\Result[]
     */
    public $Result;
    /**
     * Constructor method for ArrayOfResult
     * @uses ArrayOfResult::setResult()
     * @param \Randock\PostNL\BulkMailApi\StructType\Result[] $result
     */
    public function __construct(array $result = array())
    {
        $this
            ->setResult($result);
    }
    /**
     * Get Result value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\Result[]|null
     */
    public function getResult()
    {
        return isset($this->Result) ? $this->Result : null;
    }
    /**
     * This method is responsible for validating the values passed to the setResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResult method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResultForArrayConstraintsFromSetResult(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfResultResultItem) {
            // validation for constraint: itemType
            if (!$arrayOfResultResultItem instanceof \Randock\PostNL\BulkMailApi\StructType\Result) {
                $invalidValues[] = is_object($arrayOfResultResultItem) ? get_class($arrayOfResultResultItem) : sprintf('%s(%s)', gettype($arrayOfResultResultItem), var_export($arrayOfResultResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Result property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\Result, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Result value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\Result[] $result
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfResult
     */
    public function setResult(array $result = array())
    {
        // validation for constraint: array
        if ('' !== ($resultArrayErrorMessage = self::validateResultForArrayConstraintsFromSetResult($result))) {
            throw new \InvalidArgumentException($resultArrayErrorMessage, __LINE__);
        }
        if (is_null($result) || (is_array($result) && empty($result))) {
            unset($this->Result);
        } else {
            $this->Result = $result;
        }
        return $this;
    }
    /**
     * Add item to Result value
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\Result $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfResult
     */
    public function addToResult(\Randock\PostNL\BulkMailApi\StructType\Result $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\Result) {
            throw new \InvalidArgumentException(sprintf('The Result property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\Result, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Result[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\Result|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\Result|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\Result|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\Result|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\Result|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Result
     */
    public function getAttributeName()
    {
        return 'Result';
    }
}
