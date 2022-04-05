<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductItemType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductItemType
 * @subpackage Structs
 */
class ProductItemType extends AbstractStructBase
{
    /**
     * The CommercialService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCommercialServiceType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCommercialServiceType $CommercialService = null;
    /**
     * The ProductItemID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $ProductItemID = null;
    /**
     * The ProductKind
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $ProductKind = null;
    /**
     * The ServiceLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ServiceLevelType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\ServiceLevelType $ServiceLevel = null;
    /**
     * Constructor method for ProductItemType
     * @uses ProductItemType::setCommercialService()
     * @uses ProductItemType::setProductItemID()
     * @uses ProductItemType::setProductKind()
     * @uses ProductItemType::setServiceLevel()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCommercialServiceType $commercialService
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $productItemID
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $productKind
     * @param \Randock\PostNL\BulkMailApi\StructType\ServiceLevelType $serviceLevel
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCommercialServiceType $commercialService = null, ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $productItemID = null, ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $productKind = null, ?\Randock\PostNL\BulkMailApi\StructType\ServiceLevelType $serviceLevel = null)
    {
        $this
            ->setCommercialService($commercialService)
            ->setProductItemID($productItemID)
            ->setProductKind($productKind)
            ->setServiceLevel($serviceLevel);
    }
    /**
     * Get CommercialService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCommercialServiceType|null
     */
    public function getCommercialService(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCommercialServiceType
    {
        return isset($this->CommercialService) ? $this->CommercialService : null;
    }
    /**
     * Set CommercialService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCommercialServiceType $commercialService
     * @return \Randock\PostNL\BulkMailApi\StructType\ProductItemType
     */
    public function setCommercialService(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCommercialServiceType $commercialService = null): self
    {
        if (is_null($commercialService) || (is_array($commercialService) && empty($commercialService))) {
            unset($this->CommercialService);
        } else {
            $this->CommercialService = $commercialService;
        }
        
        return $this;
    }
    /**
     * Get ProductItemID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getProductItemID(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return isset($this->ProductItemID) ? $this->ProductItemID : null;
    }
    /**
     * Set ProductItemID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $productItemID
     * @return \Randock\PostNL\BulkMailApi\StructType\ProductItemType
     */
    public function setProductItemID(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $productItemID = null): self
    {
        if (is_null($productItemID) || (is_array($productItemID) && empty($productItemID))) {
            unset($this->ProductItemID);
        } else {
            $this->ProductItemID = $productItemID;
        }
        
        return $this;
    }
    /**
     * Get ProductKind value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getProductKind(): ?\Randock\PostNL\BulkMailApi\StructType\CodeType1
    {
        return isset($this->ProductKind) ? $this->ProductKind : null;
    }
    /**
     * Set ProductKind value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $productKind
     * @return \Randock\PostNL\BulkMailApi\StructType\ProductItemType
     */
    public function setProductKind(?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $productKind = null): self
    {
        if (is_null($productKind) || (is_array($productKind) && empty($productKind))) {
            unset($this->ProductKind);
        } else {
            $this->ProductKind = $productKind;
        }
        
        return $this;
    }
    /**
     * Get ServiceLevel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ServiceLevelType|null
     */
    public function getServiceLevel(): ?\Randock\PostNL\BulkMailApi\StructType\ServiceLevelType
    {
        return isset($this->ServiceLevel) ? $this->ServiceLevel : null;
    }
    /**
     * Set ServiceLevel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\ServiceLevelType $serviceLevel
     * @return \Randock\PostNL\BulkMailApi\StructType\ProductItemType
     */
    public function setServiceLevel(?\Randock\PostNL\BulkMailApi\StructType\ServiceLevelType $serviceLevel = null): self
    {
        if (is_null($serviceLevel) || (is_array($serviceLevel) && empty($serviceLevel))) {
            unset($this->ServiceLevel);
        } else {
            $this->ServiceLevel = $serviceLevel;
        }
        
        return $this;
    }
}
