<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBusinessDocumentMessageHeaderParty ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBusinessDocumentMessageHeaderParty
 * @subpackage Arrays
 */
class ArrayOfBusinessDocumentMessageHeaderParty extends AbstractStructArrayBase
{
    /**
     * The BusinessDocumentMessageHeaderParty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty[]
     */
    protected ?array $BusinessDocumentMessageHeaderParty = null;
    /**
     * Constructor method for ArrayOfBusinessDocumentMessageHeaderParty
     * @uses ArrayOfBusinessDocumentMessageHeaderParty::setBusinessDocumentMessageHeaderParty()
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty[] $businessDocumentMessageHeaderParty
     */
    public function __construct(?array $businessDocumentMessageHeaderParty = null)
    {
        $this
            ->setBusinessDocumentMessageHeaderParty($businessDocumentMessageHeaderParty);
    }
    /**
     * Get BusinessDocumentMessageHeaderParty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty[]
     */
    public function getBusinessDocumentMessageHeaderParty(): ?array
    {
        return isset($this->BusinessDocumentMessageHeaderParty) ? $this->BusinessDocumentMessageHeaderParty : null;
    }
    /**
     * This method is responsible for validating the values passed to the setBusinessDocumentMessageHeaderParty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBusinessDocumentMessageHeaderParty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBusinessDocumentMessageHeaderPartyForArrayConstraintsFromSetBusinessDocumentMessageHeaderParty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBusinessDocumentMessageHeaderPartyBusinessDocumentMessageHeaderPartyItem) {
            // validation for constraint: itemType
            if (!$arrayOfBusinessDocumentMessageHeaderPartyBusinessDocumentMessageHeaderPartyItem instanceof \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty) {
                $invalidValues[] = is_object($arrayOfBusinessDocumentMessageHeaderPartyBusinessDocumentMessageHeaderPartyItem) ? get_class($arrayOfBusinessDocumentMessageHeaderPartyBusinessDocumentMessageHeaderPartyItem) : sprintf('%s(%s)', gettype($arrayOfBusinessDocumentMessageHeaderPartyBusinessDocumentMessageHeaderPartyItem), var_export($arrayOfBusinessDocumentMessageHeaderPartyBusinessDocumentMessageHeaderPartyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BusinessDocumentMessageHeaderParty property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BusinessDocumentMessageHeaderParty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty[] $businessDocumentMessageHeaderParty
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessDocumentMessageHeaderParty
     */
    public function setBusinessDocumentMessageHeaderParty(?array $businessDocumentMessageHeaderParty = null): self
    {
        // validation for constraint: array
        if ('' !== ($businessDocumentMessageHeaderPartyArrayErrorMessage = self::validateBusinessDocumentMessageHeaderPartyForArrayConstraintsFromSetBusinessDocumentMessageHeaderParty($businessDocumentMessageHeaderParty))) {
            throw new InvalidArgumentException($businessDocumentMessageHeaderPartyArrayErrorMessage, __LINE__);
        }
        if (is_null($businessDocumentMessageHeaderParty) || (is_array($businessDocumentMessageHeaderParty) && empty($businessDocumentMessageHeaderParty))) {
            unset($this->BusinessDocumentMessageHeaderParty);
        } else {
            $this->BusinessDocumentMessageHeaderParty = $businessDocumentMessageHeaderParty;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessDocumentMessageHeaderParty
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty) {
            throw new InvalidArgumentException(sprintf('The BusinessDocumentMessageHeaderParty property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BusinessDocumentMessageHeaderParty
     */
    public function getAttributeName(): string
    {
        return 'BusinessDocumentMessageHeaderParty';
    }
}
