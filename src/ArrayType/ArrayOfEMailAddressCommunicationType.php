<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEMailAddressCommunicationType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEMailAddressCommunicationType
 * @subpackage Arrays
 */
class ArrayOfEMailAddressCommunicationType extends AbstractStructArrayBase
{
    /**
     * The EMailAddressCommunicationType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType[]
     */
    protected ?array $EMailAddressCommunicationType = null;
    /**
     * Constructor method for ArrayOfEMailAddressCommunicationType
     * @uses ArrayOfEMailAddressCommunicationType::setEMailAddressCommunicationType()
     * @param \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType[] $eMailAddressCommunicationType
     */
    public function __construct(?array $eMailAddressCommunicationType = null)
    {
        $this
            ->setEMailAddressCommunicationType($eMailAddressCommunicationType);
    }
    /**
     * Get EMailAddressCommunicationType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType[]
     */
    public function getEMailAddressCommunicationType(): ?array
    {
        return isset($this->EMailAddressCommunicationType) ? $this->EMailAddressCommunicationType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEMailAddressCommunicationType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEMailAddressCommunicationType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEMailAddressCommunicationTypeForArrayConstraintsFromSetEMailAddressCommunicationType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEMailAddressCommunicationTypeEMailAddressCommunicationTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfEMailAddressCommunicationTypeEMailAddressCommunicationTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType) {
                $invalidValues[] = is_object($arrayOfEMailAddressCommunicationTypeEMailAddressCommunicationTypeItem) ? get_class($arrayOfEMailAddressCommunicationTypeEMailAddressCommunicationTypeItem) : sprintf('%s(%s)', gettype($arrayOfEMailAddressCommunicationTypeEMailAddressCommunicationTypeItem), var_export($arrayOfEMailAddressCommunicationTypeEMailAddressCommunicationTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EMailAddressCommunicationType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EMailAddressCommunicationType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType[] $eMailAddressCommunicationType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfEMailAddressCommunicationType
     */
    public function setEMailAddressCommunicationType(?array $eMailAddressCommunicationType = null): self
    {
        // validation for constraint: array
        if ('' !== ($eMailAddressCommunicationTypeArrayErrorMessage = self::validateEMailAddressCommunicationTypeForArrayConstraintsFromSetEMailAddressCommunicationType($eMailAddressCommunicationType))) {
            throw new InvalidArgumentException($eMailAddressCommunicationTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($eMailAddressCommunicationType) || (is_array($eMailAddressCommunicationType) && empty($eMailAddressCommunicationType))) {
            unset($this->EMailAddressCommunicationType);
        } else {
            $this->EMailAddressCommunicationType = $eMailAddressCommunicationType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfEMailAddressCommunicationType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType) {
            throw new InvalidArgumentException(sprintf('The EMailAddressCommunicationType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EMailAddressCommunicationType
     */
    public function getAttributeName(): string
    {
        return 'EMailAddressCommunicationType';
    }
}
