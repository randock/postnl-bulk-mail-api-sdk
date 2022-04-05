<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfXmlElement ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfXmlElement
 * @subpackage Arrays
 */
class ArrayOfXmlElement extends AbstractStructArrayBase
{
    /**
     * The XmlElement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\XmlElement[]
     */
    protected ?array $XmlElement = null;
    /**
     * Constructor method for ArrayOfXmlElement
     * @uses ArrayOfXmlElement::setXmlElement()
     * @param \Randock\PostNL\BulkMailApi\StructType\XmlElement[] $xmlElement
     */
    public function __construct(?array $xmlElement = null)
    {
        $this
            ->setXmlElement($xmlElement);
    }
    /**
     * Get XmlElement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\XmlElement[]
     */
    public function getXmlElement(): ?array
    {
        return isset($this->XmlElement) ? $this->XmlElement : null;
    }
    /**
     * This method is responsible for validating the values passed to the setXmlElement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setXmlElement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateXmlElementForArrayConstraintsFromSetXmlElement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfXmlElementXmlElementItem) {
            // validation for constraint: itemType
            if (!$arrayOfXmlElementXmlElementItem instanceof \Randock\PostNL\BulkMailApi\StructType\XmlElement) {
                $invalidValues[] = is_object($arrayOfXmlElementXmlElementItem) ? get_class($arrayOfXmlElementXmlElementItem) : sprintf('%s(%s)', gettype($arrayOfXmlElementXmlElementItem), var_export($arrayOfXmlElementXmlElementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The XmlElement property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\XmlElement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set XmlElement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\XmlElement[] $xmlElement
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfXmlElement
     */
    public function setXmlElement(?array $xmlElement = null): self
    {
        // validation for constraint: array
        if ('' !== ($xmlElementArrayErrorMessage = self::validateXmlElementForArrayConstraintsFromSetXmlElement($xmlElement))) {
            throw new InvalidArgumentException($xmlElementArrayErrorMessage, __LINE__);
        }
        if (is_null($xmlElement) || (is_array($xmlElement) && empty($xmlElement))) {
            unset($this->XmlElement);
        } else {
            $this->XmlElement = $xmlElement;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\XmlElement|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\XmlElement
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\XmlElement|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\XmlElement
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\XmlElement|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\XmlElement
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\XmlElement|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\XmlElement
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\XmlElement|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\XmlElement
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\XmlElement $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfXmlElement
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\XmlElement) {
            throw new InvalidArgumentException(sprintf('The XmlElement property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\XmlElement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string XmlElement
     */
    public function getAttributeName(): string
    {
        return 'XmlElement';
    }
}
