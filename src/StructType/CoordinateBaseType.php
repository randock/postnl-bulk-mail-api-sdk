<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoordinateBaseType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CoordinateBaseType
 * @subpackage Structs
 */
class CoordinateBaseType extends AbstractStructBase
{
    /**
     * The Items
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType $Items = null;
    /**
     * The ItemsElementName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType $ItemsElementName = null;
    /**
     * Constructor method for CoordinateBaseType
     * @uses CoordinateBaseType::setItems()
     * @uses CoordinateBaseType::setItemsElementName()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType $items
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType $itemsElementName
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType $items = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType $itemsElementName = null)
    {
        $this
            ->setItems($items)
            ->setItemsElementName($itemsElementName);
    }
    /**
     * Get Items value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType|null
     */
    public function getItems(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType
    {
        return isset($this->Items) ? $this->Items : null;
    }
    /**
     * Set Items value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType $items
     * @return \Randock\PostNL\BulkMailApi\StructType\CoordinateBaseType
     */
    public function setItems(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType $items = null): self
    {
        if (is_null($items) || (is_array($items) && empty($items))) {
            unset($this->Items);
        } else {
            $this->Items = $items;
        }
        
        return $this;
    }
    /**
     * Get ItemsElementName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType|null
     */
    public function getItemsElementName(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType
    {
        return isset($this->ItemsElementName) ? $this->ItemsElementName : null;
    }
    /**
     * Set ItemsElementName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType $itemsElementName
     * @return \Randock\PostNL\BulkMailApi\StructType\CoordinateBaseType
     */
    public function setItemsElementName(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemsChoiceType $itemsElementName = null): self
    {
        if (is_null($itemsElementName) || (is_array($itemsElementName) && empty($itemsElementName))) {
            unset($this->ItemsElementName);
        } else {
            $this->ItemsElementName = $itemsElementName;
        }
        
        return $this;
    }
}
