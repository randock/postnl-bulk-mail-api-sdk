<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPartyStandardID ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPartyStandardID
 * @subpackage Arrays
 */
class ArrayOfPartyStandardID extends AbstractStructArrayBase
{
    /**
     * The PartyStandardID
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\PartyStandardID[]
     */
    protected ?array $PartyStandardID = null;
    /**
     * Constructor method for ArrayOfPartyStandardID
     * @uses ArrayOfPartyStandardID::setPartyStandardID()
     * @param \Randock\PostNL\BulkMailApi\StructType\PartyStandardID[] $partyStandardID
     */
    public function __construct(?array $partyStandardID = null)
    {
        $this
            ->setPartyStandardID($partyStandardID);
    }
    /**
     * Get PartyStandardID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyStandardID[]
     */
    public function getPartyStandardID(): ?array
    {
        return isset($this->PartyStandardID) ? $this->PartyStandardID : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPartyStandardID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPartyStandardID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePartyStandardIDForArrayConstraintsFromSetPartyStandardID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPartyStandardIDPartyStandardIDItem) {
            // validation for constraint: itemType
            if (!$arrayOfPartyStandardIDPartyStandardIDItem instanceof \Randock\PostNL\BulkMailApi\StructType\PartyStandardID) {
                $invalidValues[] = is_object($arrayOfPartyStandardIDPartyStandardIDItem) ? get_class($arrayOfPartyStandardIDPartyStandardIDItem) : sprintf('%s(%s)', gettype($arrayOfPartyStandardIDPartyStandardIDItem), var_export($arrayOfPartyStandardIDPartyStandardIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PartyStandardID property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\PartyStandardID, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PartyStandardID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\PartyStandardID[] $partyStandardID
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPartyStandardID
     */
    public function setPartyStandardID(?array $partyStandardID = null): self
    {
        // validation for constraint: array
        if ('' !== ($partyStandardIDArrayErrorMessage = self::validatePartyStandardIDForArrayConstraintsFromSetPartyStandardID($partyStandardID))) {
            throw new InvalidArgumentException($partyStandardIDArrayErrorMessage, __LINE__);
        }
        if (is_null($partyStandardID) || (is_array($partyStandardID) && empty($partyStandardID))) {
            unset($this->PartyStandardID);
        } else {
            $this->PartyStandardID = $partyStandardID;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyStandardID|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\PartyStandardID
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyStandardID|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\PartyStandardID
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyStandardID|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\PartyStandardID
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyStandardID|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\PartyStandardID
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyStandardID|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\PartyStandardID
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\PartyStandardID $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPartyStandardID
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\PartyStandardID) {
            throw new InvalidArgumentException(sprintf('The PartyStandardID property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\PartyStandardID, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PartyStandardID
     */
    public function getAttributeName(): string
    {
        return 'PartyStandardID';
    }
}
