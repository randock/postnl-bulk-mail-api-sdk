<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
    protected ?array $BusinessScope = null;
    /**
     * Constructor method for ArrayOfBusinessScope
     * @uses ArrayOfBusinessScope::setBusinessScope()
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessScope[] $businessScope
     */
    public function __construct(?array $businessScope = null)
    {
        $this
            ->setBusinessScope($businessScope);
    }
    /**
     * Get BusinessScope value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScope[]
     */
    public function getBusinessScope(): ?array
    {
        return isset($this->BusinessScope) ? $this->BusinessScope : null;
    }
    /**
     * This method is responsible for validating the values passed to the setBusinessScope method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBusinessScope method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBusinessScopeForArrayConstraintsFromSetBusinessScope(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
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
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessScope[] $businessScope
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessScope
     */
    public function setBusinessScope(?array $businessScope = null): self
    {
        // validation for constraint: array
        if ('' !== ($businessScopeArrayErrorMessage = self::validateBusinessScopeForArrayConstraintsFromSetBusinessScope($businessScope))) {
            throw new InvalidArgumentException($businessScopeArrayErrorMessage, __LINE__);
        }
        if (is_null($businessScope) || (is_array($businessScope) && empty($businessScope))) {
            unset($this->BusinessScope);
        } else {
            $this->BusinessScope = $businessScope;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScope|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\BusinessScope
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScope|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\BusinessScope
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScope|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\BusinessScope
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScope|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\BusinessScope
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScope|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\BusinessScope
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessScope $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessScope
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\BusinessScope) {
            throw new InvalidArgumentException(sprintf('The BusinessScope property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\BusinessScope, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BusinessScope
     */
    public function getAttributeName(): string
    {
        return 'BusinessScope';
    }
}
