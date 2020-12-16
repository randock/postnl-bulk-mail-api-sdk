<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressTypeType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AddressTypeType
 * @subpackage Structs
 */
class AddressTypeType extends AbstractStructBase
{
    /**
     * The AddressType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $AddressType;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1
     */
    public $Name;
    /**
     * The ShortName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1
     */
    public $ShortName;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\StatusType
     */
    public $Status;
    /**
     * Constructor method for AddressTypeType
     * @uses AddressTypeType::setAddressType()
     * @uses AddressTypeType::setName()
     * @uses AddressTypeType::setShortName()
     * @uses AddressTypeType::setStatus()
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $addressType
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $name
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $shortName
     * @param \Randock\PostNL\BulkMailApi\StructType\StatusType $status
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $addressType = null, \Randock\PostNL\BulkMailApi\StructType\NameType1 $name = null, \Randock\PostNL\BulkMailApi\StructType\NameType1 $shortName = null, \Randock\PostNL\BulkMailApi\StructType\StatusType $status = null)
    {
        $this
            ->setAddressType($addressType)
            ->setName($name)
            ->setShortName($shortName)
            ->setStatus($status);
    }
    /**
     * Get AddressType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getAddressType()
    {
        return isset($this->AddressType) ? $this->AddressType : null;
    }
    /**
     * Set AddressType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $addressType
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressTypeType
     */
    public function setAddressType(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $addressType = null)
    {
        if (is_null($addressType) || (is_array($addressType) && empty($addressType))) {
            unset($this->AddressType);
        } else {
            $this->AddressType = $addressType;
        }
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $name
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressTypeType
     */
    public function setName(\Randock\PostNL\BulkMailApi\StructType\NameType1 $name = null)
    {
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Get ShortName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function getShortName()
    {
        return isset($this->ShortName) ? $this->ShortName : null;
    }
    /**
     * Set ShortName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $shortName
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressTypeType
     */
    public function setShortName(\Randock\PostNL\BulkMailApi\StructType\NameType1 $shortName = null)
    {
        if (is_null($shortName) || (is_array($shortName) && empty($shortName))) {
            unset($this->ShortName);
        } else {
            $this->ShortName = $shortName;
        }
        return $this;
    }
    /**
     * Get Status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\StatusType|null
     */
    public function getStatus()
    {
        return isset($this->Status) ? $this->Status : null;
    }
    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\StatusType $status
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressTypeType
     */
    public function setStatus(\Randock\PostNL\BulkMailApi\StructType\StatusType $status = null)
    {
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
        }
        return $this;
    }
}
