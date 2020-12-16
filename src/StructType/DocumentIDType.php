<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $ID;
    /**
     * The RevisionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $RevisionID;
    /**
     * The VariationID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $VariationID;
    /**
     * The agencyRole
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $agencyRole;
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
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD = null, \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $revisionID = null, \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $variationID = null, $agencyRole = null)
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
    public function getID()
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
    public function setID(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD = null)
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
    public function getRevisionID()
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
    public function setRevisionID(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $revisionID = null)
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
    public function getVariationID()
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
    public function setVariationID(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $variationID = null)
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
    public function getAgencyRole()
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
    public function setAgencyRole($agencyRole = null)
    {
        // validation for constraint: string
        if (!is_null($agencyRole) && !is_string($agencyRole)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyRole, true), gettype($agencyRole)), __LINE__);
        }
        if (is_null($agencyRole) || (is_array($agencyRole) && empty($agencyRole))) {
            unset($this->agencyRole);
        } else {
            $this->agencyRole = $agencyRole;
        }
        return $this;
    }
}
