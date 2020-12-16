<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkLocationAddressType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WorkLocationAddressType
 * @subpackage Structs
 */
class WorkLocationAddressType extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\AddressType
     */
    public $Address;
    /**
     * The AddressType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\AddressTypeType
     */
    public $AddressType;
    /**
     * The Coordinate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CoordinateType
     */
    public $Coordinate;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\StatusType
     */
    public $Status;
    /**
     * Constructor method for WorkLocationAddressType
     * @uses WorkLocationAddressType::setAddress()
     * @uses WorkLocationAddressType::setAddressType()
     * @uses WorkLocationAddressType::setCoordinate()
     * @uses WorkLocationAddressType::setStatus()
     * @param \Randock\PostNL\BulkMailApi\StructType\AddressType $address
     * @param \Randock\PostNL\BulkMailApi\StructType\AddressTypeType $addressType
     * @param \Randock\PostNL\BulkMailApi\StructType\CoordinateType $coordinate
     * @param \Randock\PostNL\BulkMailApi\StructType\StatusType $status
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\AddressType $address = null, \Randock\PostNL\BulkMailApi\StructType\AddressTypeType $addressType = null, \Randock\PostNL\BulkMailApi\StructType\CoordinateType $coordinate = null, \Randock\PostNL\BulkMailApi\StructType\StatusType $status = null)
    {
        $this
            ->setAddress($address)
            ->setAddressType($addressType)
            ->setCoordinate($coordinate)
            ->setStatus($status);
    }
    /**
     * Get Address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressType|null
     */
    public function getAddress()
    {
        return isset($this->Address) ? $this->Address : null;
    }
    /**
     * Set Address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\AddressType $address
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType
     */
    public function setAddress(\Randock\PostNL\BulkMailApi\StructType\AddressType $address = null)
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->Address);
        } else {
            $this->Address = $address;
        }
        return $this;
    }
    /**
     * Get AddressType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressTypeType|null
     */
    public function getAddressType()
    {
        return isset($this->AddressType) ? $this->AddressType : null;
    }
    /**
     * Set AddressType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\AddressTypeType $addressType
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType
     */
    public function setAddressType(\Randock\PostNL\BulkMailApi\StructType\AddressTypeType $addressType = null)
    {
        if (is_null($addressType) || (is_array($addressType) && empty($addressType))) {
            unset($this->AddressType);
        } else {
            $this->AddressType = $addressType;
        }
        return $this;
    }
    /**
     * Get Coordinate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CoordinateType|null
     */
    public function getCoordinate()
    {
        return isset($this->Coordinate) ? $this->Coordinate : null;
    }
    /**
     * Set Coordinate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CoordinateType $coordinate
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType
     */
    public function setCoordinate(\Randock\PostNL\BulkMailApi\StructType\CoordinateType $coordinate = null)
    {
        if (is_null($coordinate) || (is_array($coordinate) && empty($coordinate))) {
            unset($this->Coordinate);
        } else {
            $this->Coordinate = $coordinate;
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
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationAddressType
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
