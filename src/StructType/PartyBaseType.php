<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PartyBaseType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PartyBaseType
 * @subpackage Structs
 */
class PartyBaseType extends AbstractStructBase
{
    /**
     * The AccountID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $AccountID = null;
    /**
     * The Contact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactType $Contact = null;
    /**
     * The Items
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType $Items = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfLocationType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfLocationType $Location = null;
    /**
     * The PartyIDs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\PartyIDsType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\PartyIDsType $PartyIDs = null;
    /**
     * The category
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * Constructor method for PartyBaseType
     * @uses PartyBaseType::setAccountID()
     * @uses PartyBaseType::setContact()
     * @uses PartyBaseType::setItems()
     * @uses PartyBaseType::setLocation()
     * @uses PartyBaseType::setPartyIDs()
     * @uses PartyBaseType::setCategory()
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $accountID
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactType $contact
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType $items
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfLocationType $location
     * @param \Randock\PostNL\BulkMailApi\StructType\PartyIDsType $partyIDs
     * @param string $category
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $accountID = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactType $contact = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType $items = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfLocationType $location = null, ?\Randock\PostNL\BulkMailApi\StructType\PartyIDsType $partyIDs = null, ?string $category = null)
    {
        $this
            ->setAccountID($accountID)
            ->setContact($contact)
            ->setItems($items)
            ->setLocation($location)
            ->setPartyIDs($partyIDs)
            ->setCategory($category);
    }
    /**
     * Get AccountID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getAccountID(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return isset($this->AccountID) ? $this->AccountID : null;
    }
    /**
     * Set AccountID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $accountID
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyBaseType
     */
    public function setAccountID(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $accountID = null): self
    {
        if (is_null($accountID) || (is_array($accountID) && empty($accountID))) {
            unset($this->AccountID);
        } else {
            $this->AccountID = $accountID;
        }
        
        return $this;
    }
    /**
     * Get Contact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactType|null
     */
    public function getContact(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactType
    {
        return isset($this->Contact) ? $this->Contact : null;
    }
    /**
     * Set Contact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactType $contact
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyBaseType
     */
    public function setContact(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactType $contact = null): self
    {
        if (is_null($contact) || (is_array($contact) && empty($contact))) {
            unset($this->Contact);
        } else {
            $this->Contact = $contact;
        }
        
        return $this;
    }
    /**
     * Get Items value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType|null
     */
    public function getItems(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType
    {
        return isset($this->Items) ? $this->Items : null;
    }
    /**
     * Set Items value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType $items
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyBaseType
     */
    public function setItems(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfanyType $items = null): self
    {
        if (is_null($items) || (is_array($items) && empty($items))) {
            unset($this->Items);
        } else {
            $this->Items = $items;
        }
        
        return $this;
    }
    /**
     * Get Location value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfLocationType|null
     */
    public function getLocation(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfLocationType
    {
        return isset($this->Location) ? $this->Location : null;
    }
    /**
     * Set Location value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfLocationType $location
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyBaseType
     */
    public function setLocation(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfLocationType $location = null): self
    {
        if (is_null($location) || (is_array($location) && empty($location))) {
            unset($this->Location);
        } else {
            $this->Location = $location;
        }
        
        return $this;
    }
    /**
     * Get PartyIDs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyIDsType|null
     */
    public function getPartyIDs(): ?\Randock\PostNL\BulkMailApi\StructType\PartyIDsType
    {
        return isset($this->PartyIDs) ? $this->PartyIDs : null;
    }
    /**
     * Set PartyIDs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\PartyIDsType $partyIDs
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyBaseType
     */
    public function setPartyIDs(?\Randock\PostNL\BulkMailApi\StructType\PartyIDsType $partyIDs = null): self
    {
        if (is_null($partyIDs) || (is_array($partyIDs) && empty($partyIDs))) {
            unset($this->PartyIDs);
        } else {
            $this->PartyIDs = $partyIDs;
        }
        
        return $this;
    }
    /**
     * Get category value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return isset($this->category) ? $this->category : null;
    }
    /**
     * Set category value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $category
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyBaseType
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        if (is_null($category) || (is_array($category) && empty($category))) {
            unset($this->category);
        } else {
            $this->category = $category;
        }
        
        return $this;
    }
}
