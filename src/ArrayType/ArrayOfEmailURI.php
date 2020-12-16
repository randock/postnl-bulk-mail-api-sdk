<?php

namespace Randock\PostNL\BulkMailApi\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmailURI ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEmailURI
 * @subpackage Arrays
 */
class ArrayOfEmailURI extends AbstractStructArrayBase
{
    /**
     * The EmailURI
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\EmailURI[]
     */
    public $EmailURI;
    /**
     * Constructor method for ArrayOfEmailURI
     * @uses ArrayOfEmailURI::setEmailURI()
     * @param \Randock\PostNL\BulkMailApi\StructType\EmailURI[] $emailURI
     */
    public function __construct(array $emailURI = array())
    {
        $this
            ->setEmailURI($emailURI);
    }
    /**
     * Get EmailURI value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\EmailURI[]|null
     */
    public function getEmailURI()
    {
        return isset($this->EmailURI) ? $this->EmailURI : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEmailURI method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailURI method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailURIForArrayConstraintsFromSetEmailURI(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmailURIEmailURIItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmailURIEmailURIItem instanceof \Randock\PostNL\BulkMailApi\StructType\EmailURI) {
                $invalidValues[] = is_object($arrayOfEmailURIEmailURIItem) ? get_class($arrayOfEmailURIEmailURIItem) : sprintf('%s(%s)', gettype($arrayOfEmailURIEmailURIItem), var_export($arrayOfEmailURIEmailURIItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmailURI property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\EmailURI, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EmailURI value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\EmailURI[] $emailURI
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfEmailURI
     */
    public function setEmailURI(array $emailURI = array())
    {
        // validation for constraint: array
        if ('' !== ($emailURIArrayErrorMessage = self::validateEmailURIForArrayConstraintsFromSetEmailURI($emailURI))) {
            throw new \InvalidArgumentException($emailURIArrayErrorMessage, __LINE__);
        }
        if (is_null($emailURI) || (is_array($emailURI) && empty($emailURI))) {
            unset($this->EmailURI);
        } else {
            $this->EmailURI = $emailURI;
        }
        return $this;
    }
    /**
     * Add item to EmailURI value
     * @throws \InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\EmailURI $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfEmailURI
     */
    public function addToEmailURI(\Randock\PostNL\BulkMailApi\StructType\EmailURI $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\EmailURI) {
            throw new \InvalidArgumentException(sprintf('The EmailURI property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\EmailURI, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EmailURI[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\EmailURI|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\EmailURI|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\EmailURI|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\EmailURI|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\EmailURI|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmailURI
     */
    public function getAttributeName()
    {
        return 'EmailURI';
    }
}
