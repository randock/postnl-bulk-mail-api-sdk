<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfStatusType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfStatusType
 * @subpackage Arrays
 */
class ArrayOfStatusType extends AbstractStructArrayBase
{
    /**
     * The StatusType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\StatusType[]
     */
    public $StatusType;
    /**
     * Constructor method for ArrayOfStatusType
     * @uses ArrayOfStatusType::setStatusType()
     * @param \Randock\PostNL\BulkMailApi\StructType\StatusType[] $statusType
     */
    public function __construct(array $statusType = array())
    {
        $this
            ->setStatusType($statusType);
    }
    /**
     * Get StatusType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\StatusType[]|null
     */
    public function getStatusType()
    {
        return isset($this->StatusType) ? $this->StatusType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setStatusType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStatusType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStatusTypeForArrayConstraintsFromSetStatusType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfStatusTypeStatusTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfStatusTypeStatusTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\StatusType) {
                $invalidValues[] = is_object($arrayOfStatusTypeStatusTypeItem) ? get_class($arrayOfStatusTypeStatusTypeItem) : sprintf('%s(%s)', gettype($arrayOfStatusTypeStatusTypeItem), var_export($arrayOfStatusTypeStatusTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The StatusType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\StatusType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set StatusType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\StatusType[] $statusType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType
     */
    public function setStatusType(array $statusType = array())
    {
        // validation for constraint: array
        if ('' !== ($statusTypeArrayErrorMessage = self::validateStatusTypeForArrayConstraintsFromSetStatusType($statusType))) {
            throw new \InvalidArgumentException($statusTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($statusType) || (is_array($statusType) && empty($statusType))) {
            unset($this->StatusType);
        } else {
            $this->StatusType = $statusType;
        }
        return $this;
    }
    /**
     * Add item to StatusType value
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\StatusType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfStatusType
     */
    public function addToStatusType(\Randock\PostNL\BulkMailApi\StructType\StatusType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\StatusType) {
            throw new \InvalidArgumentException(sprintf('The StatusType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\StatusType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->StatusType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\StatusType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\StatusType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\StatusType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\StatusType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\StatusType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string StatusType
     */
    public function getAttributeName()
    {
        return 'StatusType';
    }
}
