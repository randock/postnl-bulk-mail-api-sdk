<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTelephoneCommunicationType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTelephoneCommunicationType
 * @subpackage Arrays
 */
class ArrayOfTelephoneCommunicationType extends AbstractStructArrayBase
{
    /**
     * The TelephoneCommunicationType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType[]
     */
    public $TelephoneCommunicationType;
    /**
     * Constructor method for ArrayOfTelephoneCommunicationType
     * @uses ArrayOfTelephoneCommunicationType::setTelephoneCommunicationType()
     * @param \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType[] $telephoneCommunicationType
     */
    public function __construct(array $telephoneCommunicationType = array())
    {
        $this
            ->setTelephoneCommunicationType($telephoneCommunicationType);
    }
    /**
     * Get TelephoneCommunicationType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType[]|null
     */
    public function getTelephoneCommunicationType()
    {
        return isset($this->TelephoneCommunicationType) ? $this->TelephoneCommunicationType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTelephoneCommunicationType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTelephoneCommunicationType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTelephoneCommunicationTypeForArrayConstraintsFromSetTelephoneCommunicationType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTelephoneCommunicationTypeTelephoneCommunicationTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfTelephoneCommunicationTypeTelephoneCommunicationTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType) {
                $invalidValues[] = is_object($arrayOfTelephoneCommunicationTypeTelephoneCommunicationTypeItem) ? get_class($arrayOfTelephoneCommunicationTypeTelephoneCommunicationTypeItem) : sprintf('%s(%s)', gettype($arrayOfTelephoneCommunicationTypeTelephoneCommunicationTypeItem), var_export($arrayOfTelephoneCommunicationTypeTelephoneCommunicationTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TelephoneCommunicationType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TelephoneCommunicationType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType[] $telephoneCommunicationType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType
     */
    public function setTelephoneCommunicationType(array $telephoneCommunicationType = array())
    {
        // validation for constraint: array
        if ('' !== ($telephoneCommunicationTypeArrayErrorMessage = self::validateTelephoneCommunicationTypeForArrayConstraintsFromSetTelephoneCommunicationType($telephoneCommunicationType))) {
            throw new \InvalidArgumentException($telephoneCommunicationTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($telephoneCommunicationType) || (is_array($telephoneCommunicationType) && empty($telephoneCommunicationType))) {
            unset($this->TelephoneCommunicationType);
        } else {
            $this->TelephoneCommunicationType = $telephoneCommunicationType;
        }
        return $this;
    }
    /**
     * Add item to TelephoneCommunicationType value
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType
     */
    public function addToTelephoneCommunicationType(\Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType) {
            throw new \InvalidArgumentException(sprintf('The TelephoneCommunicationType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TelephoneCommunicationType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\TelephoneCommunicationType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TelephoneCommunicationType
     */
    public function getAttributeName()
    {
        return 'TelephoneCommunicationType';
    }
}
