<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNoteType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfNoteType
 * @subpackage Arrays
 */
class ArrayOfNoteType extends AbstractStructArrayBase
{
    /**
     * The NoteType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NoteType[]
     */
    public $NoteType;
    /**
     * Constructor method for ArrayOfNoteType
     * @uses ArrayOfNoteType::setNoteType()
     * @param \Randock\PostNL\BulkMailApi\StructType\NoteType[] $noteType
     */
    public function __construct(array $noteType = array())
    {
        $this
            ->setNoteType($noteType);
    }
    /**
     * Get NoteType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NoteType[]|null
     */
    public function getNoteType()
    {
        return isset($this->NoteType) ? $this->NoteType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setNoteType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNoteType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNoteTypeForArrayConstraintsFromSetNoteType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfNoteTypeNoteTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfNoteTypeNoteTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\NoteType) {
                $invalidValues[] = is_object($arrayOfNoteTypeNoteTypeItem) ? get_class($arrayOfNoteTypeNoteTypeItem) : sprintf('%s(%s)', gettype($arrayOfNoteTypeNoteTypeItem), var_export($arrayOfNoteTypeNoteTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NoteType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\NoteType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set NoteType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\NoteType[] $noteType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType
     */
    public function setNoteType(array $noteType = array())
    {
        // validation for constraint: array
        if ('' !== ($noteTypeArrayErrorMessage = self::validateNoteTypeForArrayConstraintsFromSetNoteType($noteType))) {
            throw new \InvalidArgumentException($noteTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($noteType) || (is_array($noteType) && empty($noteType))) {
            unset($this->NoteType);
        } else {
            $this->NoteType = $noteType;
        }
        return $this;
    }
    /**
     * Add item to NoteType value
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\NoteType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType
     */
    public function addToNoteType(\Randock\PostNL\BulkMailApi\StructType\NoteType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\NoteType) {
            throw new \InvalidArgumentException(sprintf('The NoteType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\NoteType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NoteType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\NoteType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\NoteType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\NoteType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\NoteType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\NoteType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NoteType
     */
    public function getAttributeName()
    {
        return 'NoteType';
    }
}
