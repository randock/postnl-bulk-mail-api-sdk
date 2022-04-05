<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationType1 StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LocationType1
 * @subpackage Structs
 */
class LocationType1 extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\AddressType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\AddressType1 $Address = null;
    /**
     * Constructor method for LocationType1
     * @uses LocationType1::setAddress()
     * @param \Randock\PostNL\BulkMailApi\StructType\AddressType1 $address
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\AddressType1 $address = null)
    {
        $this
            ->setAddress($address);
    }
    /**
     * Get Address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressType1|null
     */
    public function getAddress(): ?\Randock\PostNL\BulkMailApi\StructType\AddressType1
    {
        return isset($this->Address) ? $this->Address : null;
    }
    /**
     * Set Address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\AddressType1 $address
     * @return \Randock\PostNL\BulkMailApi\StructType\LocationType1
     */
    public function setAddress(?\Randock\PostNL\BulkMailApi\StructType\AddressType1 $address = null): self
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->Address);
        } else {
            $this->Address = $address;
        }
        
        return $this;
    }
}
