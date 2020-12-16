<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBusinessScope ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBusinessScope
 * @subpackage Arrays
 */
class ArrayOfBusinessScope extends AbstractStructArrayBase
{
    /**
     * The BusinessScope
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\BusinessScope[]
     */
    public $BusinessScope;
    /**
     * Constructor method for ArrayOfBusinessScope
     * @uses ArrayOfBusinessScope::setBusinessScope()
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessScope[] $businessScope
     */
    public function __construct(array $businessScope = array())
    {
        $this
            ->setBusinessScope($businessScope);
    }
    /**
     * Get BusinessScope value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScope[]|null
     */
    public function getBusinessScope()
    {
        return isset($this->BusinessScope) ? $this->BusinessScope : null;
    }
    /**
     * This method is responsible for validating the values passed to the setBusinessScope method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBusinessScope method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBusinessScopeForArrayConstraintsFromSetBusinessScope(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBusinessScopeBusinessScopeItem) {
            // validation for constraint: itemType
            if (!$arrayOfBusinessScopeBusinessScopeItem instanceof \Randock\PostNL\BulkMailApi\StructType\BusinessScope) {
                $invalidValues[] = is_object($arrayOfBusinessScopeBusinessScopeItem) ? get_class($arrayOfBusinessScopeBusinessScopeItem) : sprintf('%s(%s)', gettype($arrayOfBusinessScopeBusinessScopeItem), var_export($arrayOfBusinessScopeBusinessScopeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BusinessScope property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\BusinessScope, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BusinessScope value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessScope[] $businessScope
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessScope
     */
    public function setBusinessScope(array $businessScope = array())
    {
        // validation for constraint: array
        if ('' !== ($businessScopeArrayErrorMessage = self::validateBusinessScopeForArrayConstraintsFromSetBusinessScope($businessScope))) {
            throw new \InvalidArgumentException($businessScopeArrayErrorMessage, __LINE__);
        }
        if (is_null($businessScope) || (is_array($businessScope) && empty($businessScope))) {
            unset($this->BusinessScope);
        } else {
            $this->BusinessScope = $businessScope;
        }
        return $this;
    }
    /**
     * Add item to BusinessScope value
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessScope $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessScope
     */
    public function addToBusinessScope(\Randock\PostNL\BulkMailApi\StructType\BusinessScope $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\BusinessScope) {
            throw new \InvalidArgumentException(sprintf('The BusinessScope property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\BusinessScope, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BusinessScope[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScope|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScope|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScope|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScope|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScope|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BusinessScope
     */
    public function getAttributeName()
    {
        return 'BusinessScope';
    }
}
