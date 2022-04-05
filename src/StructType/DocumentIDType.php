<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentIDType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DocumentIDType
 * @subpackage Structs
 */
class DocumentIDType extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $ID = null;
    /**
     * The RevisionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $RevisionID = null;
    /**
     * The VariationID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $VariationID = null;
    /**
     * The agencyRole
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $agencyRole = null;
    /**
     * Constructor method for DocumentIDType
     * @uses DocumentIDType::setID()
     * @uses DocumentIDType::setRevisionID()
     * @uses DocumentIDType::setVariationID()
     * @uses DocumentIDType::setAgencyRole()
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $revisionID
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $variationID
     * @param string $agencyRole
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD = null, ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $revisionID = null, ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $variationID = null, ?string $agencyRole = null)
    {
        $this
            ->setID($iD)
            ->setRevisionID($revisionID)
            ->setVariationID($variationID)
            ->setAgencyRole($agencyRole);
    }
    /**
     * Get ID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getID(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return isset($this->ID) ? $this->ID : null;
    }
    /**
     * Set ID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD
     * @return \Randock\PostNL\BulkMailApi\StructType\DocumentIDType
     */
    public function setID(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD = null): self
    {
        if (is_null($iD) || (is_array($iD) && empty($iD))) {
            unset($this->ID);
        } else {
            $this->ID = $iD;
        }
        
        return $this;
    }
    /**
     * Get RevisionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getRevisionID(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return isset($this->RevisionID) ? $this->RevisionID : null;
    }
    /**
     * Set RevisionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $revisionID
     * @return \Randock\PostNL\BulkMailApi\StructType\DocumentIDType
     */
    public function setRevisionID(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $revisionID = null): self
    {
        if (is_null($revisionID) || (is_array($revisionID) && empty($revisionID))) {
            unset($this->RevisionID);
        } else {
            $this->RevisionID = $revisionID;
        }
        
        return $this;
    }
    /**
     * Get VariationID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getVariationID(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return isset($this->VariationID) ? $this->VariationID : null;
    }
    /**
     * Set VariationID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $variationID
     * @return \Randock\PostNL\BulkMailApi\StructType\DocumentIDType
     */
    public function setVariationID(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $variationID = null): self
    {
        if (is_null($variationID) || (is_array($variationID) && empty($variationID))) {
            unset($this->VariationID);
        } else {
            $this->VariationID = $variationID;
        }
        
        return $this;
    }
    /**
     * Get agencyRole value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAgencyRole(): ?string
    {
        return isset($this->agencyRole) ? $this->agencyRole : null;
    }
    /**
     * Set agencyRole value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $agencyRole
     * @return \Randock\PostNL\BulkMailApi\StructType\DocumentIDType
     */
    public function setAgencyRole(?string $agencyRole = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyRole) && !is_string($agencyRole)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyRole, true), gettype($agencyRole)), __LINE__);
        }
        if (is_null($agencyRole) || (is_array($agencyRole) && empty($agencyRole))) {
            unset($this->agencyRole);
        } else {
            $this->agencyRole = $agencyRole;
        }
        
        return $this;
    }
}
