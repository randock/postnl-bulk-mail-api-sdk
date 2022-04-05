<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdentifierType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IdentifierType
 * @subpackage Structs
 */
class IdentifierType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * The schemeAgencyID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $schemeAgencyID = null;
    /**
     * The schemeAgencySchemeAgencyID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $schemeAgencySchemeAgencyID = null;
    /**
     * The schemeAgencySchemeID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $schemeAgencySchemeID = null;
    /**
     * The schemeID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $schemeID = null;
    /**
     * The schemeVersionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $schemeVersionID = null;
    /**
     * Constructor method for IdentifierType
     * @uses IdentifierType::setValue()
     * @uses IdentifierType::setSchemeAgencyID()
     * @uses IdentifierType::setSchemeAgencySchemeAgencyID()
     * @uses IdentifierType::setSchemeAgencySchemeID()
     * @uses IdentifierType::setSchemeID()
     * @uses IdentifierType::setSchemeVersionID()
     * @param string $value
     * @param string $schemeAgencyID
     * @param string $schemeAgencySchemeAgencyID
     * @param string $schemeAgencySchemeID
     * @param string $schemeID
     * @param string $schemeVersionID
     */
    public function __construct(?string $value = null, ?string $schemeAgencyID = null, ?string $schemeAgencySchemeAgencyID = null, ?string $schemeAgencySchemeID = null, ?string $schemeID = null, ?string $schemeVersionID = null)
    {
        $this
            ->setValue($value)
            ->setSchemeAgencyID($schemeAgencyID)
            ->setSchemeAgencySchemeAgencyID($schemeAgencySchemeAgencyID)
            ->setSchemeAgencySchemeID($schemeAgencySchemeID)
            ->setSchemeID($schemeID)
            ->setSchemeVersionID($schemeVersionID);
    }
    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValue(): ?string
    {
        return isset($this->Value) ? $this->Value : null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $value
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        
        return $this;
    }
    /**
     * Get schemeAgencyID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSchemeAgencyID(): ?string
    {
        return isset($this->schemeAgencyID) ? $this->schemeAgencyID : null;
    }
    /**
     * Set schemeAgencyID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $schemeAgencyID
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType
     */
    public function setSchemeAgencyID(?string $schemeAgencyID = null): self
    {
        // validation for constraint: string
        if (!is_null($schemeAgencyID) && !is_string($schemeAgencyID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($schemeAgencyID, true), gettype($schemeAgencyID)), __LINE__);
        }
        if (is_null($schemeAgencyID) || (is_array($schemeAgencyID) && empty($schemeAgencyID))) {
            unset($this->schemeAgencyID);
        } else {
            $this->schemeAgencyID = $schemeAgencyID;
        }
        
        return $this;
    }
    /**
     * Get schemeAgencySchemeAgencyID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSchemeAgencySchemeAgencyID(): ?string
    {
        return isset($this->schemeAgencySchemeAgencyID) ? $this->schemeAgencySchemeAgencyID : null;
    }
    /**
     * Set schemeAgencySchemeAgencyID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $schemeAgencySchemeAgencyID
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType
     */
    public function setSchemeAgencySchemeAgencyID(?string $schemeAgencySchemeAgencyID = null): self
    {
        // validation for constraint: string
        if (!is_null($schemeAgencySchemeAgencyID) && !is_string($schemeAgencySchemeAgencyID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($schemeAgencySchemeAgencyID, true), gettype($schemeAgencySchemeAgencyID)), __LINE__);
        }
        if (is_null($schemeAgencySchemeAgencyID) || (is_array($schemeAgencySchemeAgencyID) && empty($schemeAgencySchemeAgencyID))) {
            unset($this->schemeAgencySchemeAgencyID);
        } else {
            $this->schemeAgencySchemeAgencyID = $schemeAgencySchemeAgencyID;
        }
        
        return $this;
    }
    /**
     * Get schemeAgencySchemeID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSchemeAgencySchemeID(): ?string
    {
        return isset($this->schemeAgencySchemeID) ? $this->schemeAgencySchemeID : null;
    }
    /**
     * Set schemeAgencySchemeID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $schemeAgencySchemeID
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType
     */
    public function setSchemeAgencySchemeID(?string $schemeAgencySchemeID = null): self
    {
        // validation for constraint: string
        if (!is_null($schemeAgencySchemeID) && !is_string($schemeAgencySchemeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($schemeAgencySchemeID, true), gettype($schemeAgencySchemeID)), __LINE__);
        }
        if (is_null($schemeAgencySchemeID) || (is_array($schemeAgencySchemeID) && empty($schemeAgencySchemeID))) {
            unset($this->schemeAgencySchemeID);
        } else {
            $this->schemeAgencySchemeID = $schemeAgencySchemeID;
        }
        
        return $this;
    }
    /**
     * Get schemeID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSchemeID(): ?string
    {
        return isset($this->schemeID) ? $this->schemeID : null;
    }
    /**
     * Set schemeID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $schemeID
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType
     */
    public function setSchemeID(?string $schemeID = null): self
    {
        // validation for constraint: string
        if (!is_null($schemeID) && !is_string($schemeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($schemeID, true), gettype($schemeID)), __LINE__);
        }
        if (is_null($schemeID) || (is_array($schemeID) && empty($schemeID))) {
            unset($this->schemeID);
        } else {
            $this->schemeID = $schemeID;
        }
        
        return $this;
    }
    /**
     * Get schemeVersionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSchemeVersionID(): ?string
    {
        return isset($this->schemeVersionID) ? $this->schemeVersionID : null;
    }
    /**
     * Set schemeVersionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $schemeVersionID
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType
     */
    public function setSchemeVersionID(?string $schemeVersionID = null): self
    {
        // validation for constraint: string
        if (!is_null($schemeVersionID) && !is_string($schemeVersionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($schemeVersionID, true), gettype($schemeVersionID)), __LINE__);
        }
        if (is_null($schemeVersionID) || (is_array($schemeVersionID) && empty($schemeVersionID))) {
            unset($this->schemeVersionID);
        } else {
            $this->schemeVersionID = $schemeVersionID;
        }
        
        return $this;
    }
}
