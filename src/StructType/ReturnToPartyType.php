<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnToPartyType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReturnToPartyType
 * @subpackage Structs
 */
class ReturnToPartyType extends AbstractStructBase
{
    /**
     * The Contact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ContactType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\ContactType1 $Contact = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\LocationType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\LocationType1 $Location = null;
    /**
     * Constructor method for ReturnToPartyType
     * @uses ReturnToPartyType::setContact()
     * @uses ReturnToPartyType::setLocation()
     * @param \Randock\PostNL\BulkMailApi\StructType\ContactType1 $contact
     * @param \Randock\PostNL\BulkMailApi\StructType\LocationType1 $location
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\ContactType1 $contact = null, ?\Randock\PostNL\BulkMailApi\StructType\LocationType1 $location = null)
    {
        $this
            ->setContact($contact)
            ->setLocation($location);
    }
    /**
     * Get Contact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactType1|null
     */
    public function getContact(): ?\Randock\PostNL\BulkMailApi\StructType\ContactType1
    {
        return isset($this->Contact) ? $this->Contact : null;
    }
    /**
     * Set Contact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\ContactType1 $contact
     * @return \Randock\PostNL\BulkMailApi\StructType\ReturnToPartyType
     */
    public function setContact(?\Randock\PostNL\BulkMailApi\StructType\ContactType1 $contact = null): self
    {
        if (is_null($contact) || (is_array($contact) && empty($contact))) {
            unset($this->Contact);
        } else {
            $this->Contact = $contact;
        }
        
        return $this;
    }
    /**
     * Get Location value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\LocationType1|null
     */
    public function getLocation(): ?\Randock\PostNL\BulkMailApi\StructType\LocationType1
    {
        return isset($this->Location) ? $this->Location : null;
    }
    /**
     * Set Location value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\LocationType1 $location
     * @return \Randock\PostNL\BulkMailApi\StructType\ReturnToPartyType
     */
    public function setLocation(?\Randock\PostNL\BulkMailApi\StructType\LocationType1 $location = null): self
    {
        if (is_null($location) || (is_array($location) && empty($location))) {
            unset($this->Location);
        } else {
            $this->Location = $location;
        }
        
        return $this;
    }
}
