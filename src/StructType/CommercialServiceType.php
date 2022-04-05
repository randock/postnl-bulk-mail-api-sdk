<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommercialServiceType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CommercialServiceType
 * @subpackage Structs
 */
class CommercialServiceType extends AbstractStructBase
{
    /**
     * The ChargeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $ChargeCode = null;
    /**
     * The CommercialServiceID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $CommercialServiceID = null;
    /**
     * Constructor method for CommercialServiceType
     * @uses CommercialServiceType::setChargeCode()
     * @uses CommercialServiceType::setCommercialServiceID()
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $chargeCode
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $commercialServiceID
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $chargeCode = null, ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $commercialServiceID = null)
    {
        $this
            ->setChargeCode($chargeCode)
            ->setCommercialServiceID($commercialServiceID);
    }
    /**
     * Get ChargeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getChargeCode(): ?\Randock\PostNL\BulkMailApi\StructType\CodeType1
    {
        return isset($this->ChargeCode) ? $this->ChargeCode : null;
    }
    /**
     * Set ChargeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $chargeCode
     * @return \Randock\PostNL\BulkMailApi\StructType\CommercialServiceType
     */
    public function setChargeCode(?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $chargeCode = null): self
    {
        if (is_null($chargeCode) || (is_array($chargeCode) && empty($chargeCode))) {
            unset($this->ChargeCode);
        } else {
            $this->ChargeCode = $chargeCode;
        }
        
        return $this;
    }
    /**
     * Get CommercialServiceID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getCommercialServiceID(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return isset($this->CommercialServiceID) ? $this->CommercialServiceID : null;
    }
    /**
     * Set CommercialServiceID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $commercialServiceID
     * @return \Randock\PostNL\BulkMailApi\StructType\CommercialServiceType
     */
    public function setCommercialServiceID(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $commercialServiceID = null): self
    {
        if (is_null($commercialServiceID) || (is_array($commercialServiceID) && empty($commercialServiceID))) {
            unset($this->CommercialServiceID);
        } else {
            $this->CommercialServiceID = $commercialServiceID;
        }
        
        return $this;
    }
}
