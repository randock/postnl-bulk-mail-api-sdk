<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationABIEType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LocationABIEType
 * @subpackage Structs
 */
class LocationABIEType extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfAddressType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfAddressType $Address = null;
    /**
     * The Contact
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactType $Contact = null;
    /**
     * The Coordinate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CoordinateType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CoordinateType $Coordinate = null;
    /**
     * The Directions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\TextType1 $Directions = null;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $ID = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $Name = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $Type = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for LocationABIEType
     * @uses LocationABIEType::setAddress()
     * @uses LocationABIEType::setContact()
     * @uses LocationABIEType::setCoordinate()
     * @uses LocationABIEType::setDirections()
     * @uses LocationABIEType::setID()
     * @uses LocationABIEType::setName()
     * @uses LocationABIEType::setType()
     * @uses LocationABIEType::setType_1()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfAddressType $address
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactType $contact
     * @param \Randock\PostNL\BulkMailApi\StructType\CoordinateType $coordinate
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $directions
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $iD
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $name
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type
     * @param string $type
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfAddressType $address = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfContactType $contact = null, ?\Randock\PostNL\BulkMailApi\StructType\CoordinateType $coordinate = null, ?\Randock\PostNL\BulkMailApi\StructType\TextType1 $directions = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $iD = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $name = null, ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $type = null, ?string $type_1 = null)
    {
        $this
            ->setAddress($address)
            ->setContact($contact)
            ->setCoordinate($coordinate)
            ->setDirections($directions)
            ->setID($iD)
            ->setName($name)
            ->setType($type)
            ->setType_1($type_1);
    }
    /**
     * Get Address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfAddressType|null
     */
    public function getAddress(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfAddressType
    {
        return isset($this->Address) ? $this->Address : null;
    }
    /**
     * Set Address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfAddressType $address
     * @return \Randock\PostNL\BulkMailApi\StructType\LocationABIEType
     */
    public function setAddress(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfAddressType $address = null): self
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->Address);
        } else {
            $this->Address = $address;
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
     * @return \Randock\PostNL\BulkMailApi\StructType\LocationABIEType
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
     * Get Coordinate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CoordinateType|null
     */
    public function getCoordinate(): ?\Randock\PostNL\BulkMailApi\StructType\CoordinateType
    {
        return isset($this->Coordinate) ? $this->Coordinate : null;
    }
    /**
     * Set Coordinate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CoordinateType $coordinate
     * @return \Randock\PostNL\BulkMailApi\StructType\LocationABIEType
     */
    public function setCoordinate(?\Randock\PostNL\BulkMailApi\StructType\CoordinateType $coordinate = null): self
    {
        if (is_null($coordinate) || (is_array($coordinate) && empty($coordinate))) {
            unset($this->Coordinate);
        } else {
            $this->Coordinate = $coordinate;
        }
        
        return $this;
    }
    /**
     * Get Directions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getDirections(): ?\Randock\PostNL\BulkMailApi\StructType\TextType1
    {
        return isset($this->Directions) ? $this->Directions : null;
    }
    /**
     * Set Directions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $directions
     * @return \Randock\PostNL\BulkMailApi\StructType\LocationABIEType
     */
    public function setDirections(?\Randock\PostNL\BulkMailApi\StructType\TextType1 $directions = null): self
    {
        if (is_null($directions) || (is_array($directions) && empty($directions))) {
            unset($this->Directions);
        } else {
            $this->Directions = $directions;
        }
        
        return $this;
    }
    /**
     * Get ID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1|null
     */
    public function getID(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1
    {
        return isset($this->ID) ? $this->ID : null;
    }
    /**
     * Set ID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $iD
     * @return \Randock\PostNL\BulkMailApi\StructType\LocationABIEType
     */
    public function setID(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $iD = null): self
    {
        if (is_null($iD) || (is_array($iD) && empty($iD))) {
            unset($this->ID);
        } else {
            $this->ID = $iD;
        }
        
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1|null
     */
    public function getName(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $name
     * @return \Randock\PostNL\BulkMailApi\StructType\LocationABIEType
     */
    public function setName(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $name = null): self
    {
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getType(): ?\Randock\PostNL\BulkMailApi\StructType\CodeType1
    {
        return isset($this->Type) ? $this->Type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type
     * @return \Randock\PostNL\BulkMailApi\StructType\LocationABIEType
     */
    public function setType(?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $type = null): self
    {
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }
        
        return $this;
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getType_1(): ?string
    {
        return isset($this->type) ? $this->type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type
     * @return \Randock\PostNL\BulkMailApi\StructType\LocationABIEType
     */
    public function setType_1(?string $type_1 = null): self
    {
        // validation for constraint: string
        if (!is_null($type_1) && !is_string($type_1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type_1, true), gettype($type_1)), __LINE__);
        }
        if (is_null($type_1) || (is_array($type_1) && empty($type_1))) {
            unset($this->type);
        } else {
            $this->type = $type_1;
        }
        
        return $this;
    }
}
