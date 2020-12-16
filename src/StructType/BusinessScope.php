<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessScope StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BusinessScope
 * @subpackage Structs
 */
class BusinessScope extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\BusinessScopeID
     */
    public $ID;
    /**
     * The InstanceID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\BusinessScopeInstanceID
     */
    public $InstanceID;
    /**
     * The TypeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\BusinessScopeTypeCode
     */
    public $TypeCode;
    /**
     * Constructor method for BusinessScope
     * @uses BusinessScope::setID()
     * @uses BusinessScope::setInstanceID()
     * @uses BusinessScope::setTypeCode()
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessScopeID $iD
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessScopeInstanceID $instanceID
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessScopeTypeCode $typeCode
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\BusinessScopeID $iD = null, \Randock\PostNL\BulkMailApi\StructType\BusinessScopeInstanceID $instanceID = null, \Randock\PostNL\BulkMailApi\StructType\BusinessScopeTypeCode $typeCode = null)
    {
        $this
            ->setID($iD)
            ->setInstanceID($instanceID)
            ->setTypeCode($typeCode);
    }
    /**
     * Get ID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScopeID|null
     */
    public function getID()
    {
        return isset($this->ID) ? $this->ID : null;
    }
    /**
     * Set ID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessScopeID $iD
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScope
     */
    public function setID(\Randock\PostNL\BulkMailApi\StructType\BusinessScopeID $iD = null)
    {
        if (is_null($iD) || (is_array($iD) && empty($iD))) {
            unset($this->ID);
        } else {
            $this->ID = $iD;
        }
        return $this;
    }
    /**
     * Get InstanceID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScopeInstanceID|null
     */
    public function getInstanceID()
    {
        return isset($this->InstanceID) ? $this->InstanceID : null;
    }
    /**
     * Set InstanceID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessScopeInstanceID $instanceID
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScope
     */
    public function setInstanceID(\Randock\PostNL\BulkMailApi\StructType\BusinessScopeInstanceID $instanceID = null)
    {
        if (is_null($instanceID) || (is_array($instanceID) && empty($instanceID))) {
            unset($this->InstanceID);
        } else {
            $this->InstanceID = $instanceID;
        }
        return $this;
    }
    /**
     * Get TypeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScopeTypeCode|null
     */
    public function getTypeCode()
    {
        return isset($this->TypeCode) ? $this->TypeCode : null;
    }
    /**
     * Set TypeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessScopeTypeCode $typeCode
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScope
     */
    public function setTypeCode(\Randock\PostNL\BulkMailApi\StructType\BusinessScopeTypeCode $typeCode = null)
    {
        if (is_null($typeCode) || (is_array($typeCode) && empty($typeCode))) {
            unset($this->TypeCode);
        } else {
            $this->TypeCode = $typeCode;
        }
        return $this;
    }
}
