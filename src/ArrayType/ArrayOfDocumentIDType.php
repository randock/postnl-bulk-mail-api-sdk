<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentIDType ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDocumentIDType
 * @subpackage Arrays
 */
class ArrayOfDocumentIDType extends AbstractStructArrayBase
{
    /**
     * The DocumentIDType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\DocumentIDType[]
     */
    protected ?array $DocumentIDType = null;
    /**
     * Constructor method for ArrayOfDocumentIDType
     * @uses ArrayOfDocumentIDType::setDocumentIDType()
     * @param \Randock\PostNL\BulkMailApi\StructType\DocumentIDType[] $documentIDType
     */
    public function __construct(?array $documentIDType = null)
    {
        $this
            ->setDocumentIDType($documentIDType);
    }
    /**
     * Get DocumentIDType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\DocumentIDType[]
     */
    public function getDocumentIDType(): ?array
    {
        return isset($this->DocumentIDType) ? $this->DocumentIDType : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentIDType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentIDType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentIDTypeForArrayConstraintsFromSetDocumentIDType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentIDTypeDocumentIDTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentIDTypeDocumentIDTypeItem instanceof \Randock\PostNL\BulkMailApi\StructType\DocumentIDType) {
                $invalidValues[] = is_object($arrayOfDocumentIDTypeDocumentIDTypeItem) ? get_class($arrayOfDocumentIDTypeDocumentIDTypeItem) : sprintf('%s(%s)', gettype($arrayOfDocumentIDTypeDocumentIDTypeItem), var_export($arrayOfDocumentIDTypeDocumentIDTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentIDType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\DocumentIDType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DocumentIDType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\DocumentIDType[] $documentIDType
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDocumentIDType
     */
    public function setDocumentIDType(?array $documentIDType = null): self
    {
        // validation for constraint: array
        if ('' !== ($documentIDTypeArrayErrorMessage = self::validateDocumentIDTypeForArrayConstraintsFromSetDocumentIDType($documentIDType))) {
            throw new InvalidArgumentException($documentIDTypeArrayErrorMessage, __LINE__);
        }
        if (is_null($documentIDType) || (is_array($documentIDType) && empty($documentIDType))) {
            unset($this->DocumentIDType);
        } else {
            $this->DocumentIDType = $documentIDType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Randock\PostNL\BulkMailApi\StructType\DocumentIDType|null
     */
    public function current(): ?\Randock\PostNL\BulkMailApi\StructType\DocumentIDType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Randock\PostNL\BulkMailApi\StructType\DocumentIDType|null
     */
    public function item($index): ?\Randock\PostNL\BulkMailApi\StructType\DocumentIDType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Randock\PostNL\BulkMailApi\StructType\DocumentIDType|null
     */
    public function first(): ?\Randock\PostNL\BulkMailApi\StructType\DocumentIDType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Randock\PostNL\BulkMailApi\StructType\DocumentIDType|null
     */
    public function last(): ?\Randock\PostNL\BulkMailApi\StructType\DocumentIDType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Randock\PostNL\BulkMailApi\StructType\DocumentIDType|null
     */
    public function offsetGet($offset): ?\Randock\PostNL\BulkMailApi\StructType\DocumentIDType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \Randock\PostNL\BulkMailApi\StructType\DocumentIDType $item
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDocumentIDType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Randock\PostNL\BulkMailApi\StructType\DocumentIDType) {
            throw new InvalidArgumentException(sprintf('The DocumentIDType property can only contain items of type \Randock\PostNL\BulkMailApi\StructType\DocumentIDType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentIDType
     */
    public function getAttributeName(): string
    {
        return 'DocumentIDType';
    }
}
