<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCountrySubDivisionCodeType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCountrySubDivisionCodeType
 * @subpackage Arrays
 */
class ArrayOfCountrySubDivisionCodeType extends AbstractStructArrayBase
{
    /**
     * The CountrySubDivisionCodeType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType[]
     */
    protected ?array $CountrySubDivisionCodeType = null;
    /**
     * Constructor method for ArrayOfCountrySubDivisionCodeType
     * @uses ArrayOfCountrySubDivisionCodeType::setCountrySubDivisionCodeType()
     * @param \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType[] $countrySubDivisionCodeType
     */
    public function __construct(?array $countrySubDivisionCodeType = null)
    {
        $this
            ->setCountrySubDivisionCodeType($countrySubDivisionCodeType);
    }
    /**
     * Get CountrySubDivisionCodeType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType[]
     */
    public function getCountrySubDivisionCodeType(): ?array
    {
        return isset($this->CountrySubDivisionCodeType) ? $this->CountrySubDivisionCodeType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCountrySubDivisionCodeType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountrySubDivisionCodeType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountrySubDivisionCodeTypeForArrayConstraintsFromSetCountrySubDivisionCodeType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCountrySubDivisionCodeTypeCountrySubDivisionCodeTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfCountrySubDivisionCodeTypeCountrySubDivisionCodeTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType) {
                $invalidValues[] = is_object($arrayOfCountrySubDivisionCodeTypeCountrySubDivisionCodeTypeItem) ? get_class($arrayOfCountrySubDivisionCodeTypeCountrySubDivisionCodeTypeItem) : sprintf('%s(%s)', gettype($arrayOfCountrySubDivisionCodeTypeCountrySubDivisionCodeTypeItem), var_export($arrayOfCountrySubDivisionCodeTypeCountrySubDivisionCodeTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CountrySubDivisionCodeType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CountrySubDivisionCodeType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType[] $countrySubDivisionCodeType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCountrySubDivisionCodeType
     */
    public function setCountrySubDivisionCodeType(?array $countrySubDivisionCodeType = null): self
    {
        // validation for constraint: array
        if ('' !== ($countrySubDivisionCodeTypeArrayErrorMessage = self::validateCountrySubDivisionCodeTypeForArrayConstraintsFromSetCountrySubDivisionCodeType($countrySubDivisionCodeType))) {
            throw new InvalidArgumentException($countrySubDivisionCodeTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($countrySubDivisionCodeType) || (is_array($countrySubDivisionCodeType) && empty($countrySubDivisionCodeType))) {
            unset($this->CountrySubDivisionCodeType);
        } else {
            $this->CountrySubDivisionCodeType = $countrySubDivisionCodeType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCountrySubDivisionCodeType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType) {
            throw new InvalidArgumentException(sprintf('The CountrySubDivisionCodeType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\CountrySubDivisionCodeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CountrySubDivisionCodeType
     */
    public function getAttributeName(): string
    {
        return 'CountrySubDivisionCodeType';
    }
}
