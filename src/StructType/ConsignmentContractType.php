<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsignmentContractType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ConsignmentContractType
 * @subpackage Structs
 */
class ConsignmentContractType extends AbstractStructBase
{
    /**
     * The ContractDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\TextType1 $ContractDescription = null;
    /**
     * The ContractID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $ContractID = null;
    /**
     * The ContractPositionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $ContractPositionID = null;
    /**
     * Constructor method for ConsignmentContractType
     * @uses ConsignmentContractType::setContractDescription()
     * @uses ConsignmentContractType::setContractID()
     * @uses ConsignmentContractType::setContractPositionID()
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $contractDescription
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $contractID
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $contractPositionID
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\TextType1 $contractDescription = null, ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $contractID = null, ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $contractPositionID = null)
    {
        $this
            ->setContractDescription($contractDescription)
            ->setContractID($contractID)
            ->setContractPositionID($contractPositionID);
    }
    /**
     * Get ContractDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getContractDescription(): ?\Randock\PostNL\BulkMailApi\StructType\TextType1
    {
        return isset($this->ContractDescription) ? $this->ContractDescription : null;
    }
    /**
     * Set ContractDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $contractDescription
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentContractType
     */
    public function setContractDescription(?\Randock\PostNL\BulkMailApi\StructType\TextType1 $contractDescription = null): self
    {
        if (is_null($contractDescription) || (is_array($contractDescription) && empty($contractDescription))) {
            unset($this->ContractDescription);
        } else {
            $this->ContractDescription = $contractDescription;
        }
        
        return $this;
    }
    /**
     * Get ContractID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getContractID(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return isset($this->ContractID) ? $this->ContractID : null;
    }
    /**
     * Set ContractID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $contractID
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentContractType
     */
    public function setContractID(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $contractID = null): self
    {
        if (is_null($contractID) || (is_array($contractID) && empty($contractID))) {
            unset($this->ContractID);
        } else {
            $this->ContractID = $contractID;
        }
        
        return $this;
    }
    /**
     * Get ContractPositionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getContractPositionID(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return isset($this->ContractPositionID) ? $this->ContractPositionID : null;
    }
    /**
     * Set ContractPositionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $contractPositionID
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentContractType
     */
    public function setContractPositionID(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $contractPositionID = null): self
    {
        if (is_null($contractPositionID) || (is_array($contractPositionID) && empty($contractPositionID))) {
            unset($this->ContractPositionID);
        } else {
            $this->ContractPositionID = $contractPositionID;
        }
        
        return $this;
    }
}
