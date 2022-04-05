<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var string[]
     */
    protected ?array $anyType = null;
    /**
     * Constructor method for ArrayOfanyType
     * @uses ArrayOfanyType::setAnyType()
     * @param string[] $anyType
     */
    public function __construct(?array $anyType = null)
    {
        $this
            ->setAnyType($anyType);
    }
    /**
     * Get anyType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]
     */
    public function getAnyType(): ?array
    {
        return isset($this->anyType) ? $this->anyType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAnyType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAnyType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAnyTypeForArrayConstraintsFromSetAnyType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfanyTypeAnyTypeItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfanyTypeAnyTypeItem)) {
                $invalidValues[] = is_object($arrayOfanyTypeAnyTypeItem) ? get_class($arrayOfanyTypeAnyTypeItem) : sprintf('%s(%s)', gettype($arrayOfanyTypeAnyTypeItem), var_export($arrayOfanyTypeAnyTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The anyType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set anyType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param string[] $anyType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType
     */
    public function setAnyType(?array $anyType = null): self
    {
        // validation for constraint: array
        if ('' !== ($anyTypeArrayErrorMessage = self::validateAnyTypeForArrayConstraintsFromSetAnyType($anyType))) {
            throw new InvalidArgumentException($anyTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($anyType) || (is_array($anyType) && empty($anyType))) {
            unset($this->anyType);
        } else {
            $this->anyType = $anyType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string anyType
     */
    public function getAttributeName(): string
    {
        return 'anyType';
    }
}
