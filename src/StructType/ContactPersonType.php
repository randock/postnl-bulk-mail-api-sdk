<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactPersonType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ContactPersonType
 * @subpackage Structs
 */
class ContactPersonType extends AbstractStructBase
{
    /**
     * The Contact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ContactType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\ContactType $Contact = null;
    /**
     * The ContactPersonID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $ContactPersonID = null;
    /**
     * The NamePerson
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NamePersonType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\NamePersonType $NamePerson = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\StatusType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\StatusType $Status = null;
    /**
     * Constructor method for ContactPersonType
     * @uses ContactPersonType::setContact()
     * @uses ContactPersonType::setContactPersonID()
     * @uses ContactPersonType::setNamePerson()
     * @uses ContactPersonType::setStatus()
     * @param \Randock\PostNL\BulkMailApi\StructType\ContactType $contact
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $contactPersonID
     * @param \Randock\PostNL\BulkMailApi\StructType\NamePersonType $namePerson
     * @param \Randock\PostNL\BulkMailApi\StructType\StatusType $status
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\ContactType $contact = null, ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $contactPersonID = null, ?\Randock\PostNL\BulkMailApi\StructType\NamePersonType $namePerson = null, ?\Randock\PostNL\BulkMailApi\StructType\StatusType $status = null)
    {
        $this
            ->setContact($contact)
            ->setContactPersonID($contactPersonID)
            ->setNamePerson($namePerson)
            ->setStatus($status);
    }
    /**
     * Get Contact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactType|null
     */
    public function getContact(): ?\Randock\PostNL\BulkMailApi\StructType\ContactType
    {
        return isset($this->Contact) ? $this->Contact : null;
    }
    /**
     * Set Contact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\ContactType $contact
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactPersonType
     */
    public function setContact(?\Randock\PostNL\BulkMailApi\StructType\ContactType $contact = null): self
    {
        if (is_null($contact) || (is_array($contact) && empty($contact))) {
            unset($this->Contact);
        } else {
            $this->Contact = $contact;
        }
        
        return $this;
    }
    /**
     * Get ContactPersonID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getContactPersonID(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return isset($this->ContactPersonID) ? $this->ContactPersonID : null;
    }
    /**
     * Set ContactPersonID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $contactPersonID
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactPersonType
     */
    public function setContactPersonID(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $contactPersonID = null): self
    {
        if (is_null($contactPersonID) || (is_array($contactPersonID) && empty($contactPersonID))) {
            unset($this->ContactPersonID);
        } else {
            $this->ContactPersonID = $contactPersonID;
        }
        
        return $this;
    }
    /**
     * Get NamePerson value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NamePersonType|null
     */
    public function getNamePerson(): ?\Randock\PostNL\BulkMailApi\StructType\NamePersonType
    {
        return isset($this->NamePerson) ? $this->NamePerson : null;
    }
    /**
     * Set NamePerson value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NamePersonType $namePerson
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactPersonType
     */
    public function setNamePerson(?\Randock\PostNL\BulkMailApi\StructType\NamePersonType $namePerson = null): self
    {
        if (is_null($namePerson) || (is_array($namePerson) && empty($namePerson))) {
            unset($this->NamePerson);
        } else {
            $this->NamePerson = $namePerson;
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
    public function getStatus(): ?\Randock\PostNL\BulkMailApi\StructType\StatusType
    {
        return isset($this->Status) ? $this->Status : null;
    }
    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\StatusType $status
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactPersonType
     */
    public function setStatus(?\Randock\PostNL\BulkMailApi\StructType\StatusType $status = null): self
    {
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
        }
        
        return $this;
    }
}
