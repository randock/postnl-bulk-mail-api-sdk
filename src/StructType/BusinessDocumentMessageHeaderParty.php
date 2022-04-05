<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessDocumentMessageHeaderParty StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BusinessDocumentMessageHeaderParty
 * @subpackage Structs
 */
class BusinessDocumentMessageHeaderParty extends AbstractStructBase
{
    /**
     * The ContactPerson
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderPartyContactPerson|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderPartyContactPerson $ContactPerson = null;
    /**
     * The InternalID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\PartyInternalID|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\PartyInternalID $InternalID = null;
    /**
     * The StandardID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPartyStandardID|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPartyStandardID $StandardID = null;
    /**
     * Constructor method for BusinessDocumentMessageHeaderParty
     * @uses BusinessDocumentMessageHeaderParty::setContactPerson()
     * @uses BusinessDocumentMessageHeaderParty::setInternalID()
     * @uses BusinessDocumentMessageHeaderParty::setStandardID()
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderPartyContactPerson $contactPerson
     * @param \Randock\PostNL\BulkMailApi\StructType\PartyInternalID $internalID
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPartyStandardID $standardID
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderPartyContactPerson $contactPerson = null, ?\Randock\PostNL\BulkMailApi\StructType\PartyInternalID $internalID = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPartyStandardID $standardID = null)
    {
        $this
            ->setContactPerson($contactPerson)
            ->setInternalID($internalID)
            ->setStandardID($standardID);
    }
    /**
     * Get ContactPerson value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderPartyContactPerson|null
     */
    public function getContactPerson(): ?\Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderPartyContactPerson
    {
        return isset($this->ContactPerson) ? $this->ContactPerson : null;
    }
    /**
     * Set ContactPerson value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderPartyContactPerson $contactPerson
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty
     */
    public function setContactPerson(?\Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderPartyContactPerson $contactPerson = null): self
    {
        if (is_null($contactPerson) || (is_array($contactPerson) && empty($contactPerson))) {
            unset($this->ContactPerson);
        } else {
            $this->ContactPerson = $contactPerson;
        }
        
        return $this;
    }
    /**
     * Get InternalID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyInternalID|null
     */
    public function getInternalID(): ?\Randock\PostNL\BulkMailApi\StructType\PartyInternalID
    {
        return isset($this->InternalID) ? $this->InternalID : null;
    }
    /**
     * Set InternalID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\PartyInternalID $internalID
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty
     */
    public function setInternalID(?\Randock\PostNL\BulkMailApi\StructType\PartyInternalID $internalID = null): self
    {
        if (is_null($internalID) || (is_array($internalID) && empty($internalID))) {
            unset($this->InternalID);
        } else {
            $this->InternalID = $internalID;
        }
        
        return $this;
    }
    /**
     * Get StandardID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPartyStandardID|null
     */
    public function getStandardID(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPartyStandardID
    {
        return isset($this->StandardID) ? $this->StandardID : null;
    }
    /**
     * Set StandardID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPartyStandardID $standardID
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty
     */
    public function setStandardID(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPartyStandardID $standardID = null): self
    {
        if (is_null($standardID) || (is_array($standardID) && empty($standardID))) {
            unset($this->StandardID);
        } else {
            $this->StandardID = $standardID;
        }
        
        return $this;
    }
}
