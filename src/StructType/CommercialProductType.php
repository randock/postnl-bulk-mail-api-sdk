<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommercialProductType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CommercialProductType
 * @subpackage Structs
 */
class CommercialProductType extends AbstractStructBase
{
    /**
     * The CommercialProductID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $CommercialProductID = null;
    /**
     * The ProductItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfProductItemType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfProductItemType $ProductItem = null;
    /**
     * Constructor method for CommercialProductType
     * @uses CommercialProductType::setCommercialProductID()
     * @uses CommercialProductType::setProductItem()
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $commercialProductID
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfProductItemType $productItem
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $commercialProductID = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfProductItemType $productItem = null)
    {
        $this
            ->setCommercialProductID($commercialProductID)
            ->setProductItem($productItem);
    }
    /**
     * Get CommercialProductID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getCommercialProductID(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return isset($this->CommercialProductID) ? $this->CommercialProductID : null;
    }
    /**
     * Set CommercialProductID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $commercialProductID
     * @return \Randock\PostNL\BulkMailApi\StructType\CommercialProductType
     */
    public function setCommercialProductID(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $commercialProductID = null): self
    {
        if (is_null($commercialProductID) || (is_array($commercialProductID) && empty($commercialProductID))) {
            unset($this->CommercialProductID);
        } else {
            $this->CommercialProductID = $commercialProductID;
        }
        
        return $this;
    }
    /**
     * Get ProductItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfProductItemType|null
     */
    public function getProductItem(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfProductItemType
    {
        return isset($this->ProductItem) ? $this->ProductItem : null;
    }
    /**
     * Set ProductItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfProductItemType $productItem
     * @return \Randock\PostNL\BulkMailApi\StructType\CommercialProductType
     */
    public function setProductItem(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfProductItemType $productItem = null): self
    {
        if (is_null($productItem) || (is_array($productItem) && empty($productItem))) {
            unset($this->ProductItem);
        } else {
            $this->ProductItem = $productItem;
        }
        
        return $this;
    }
}
