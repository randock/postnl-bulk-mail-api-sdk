<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessScopeTypeCode StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BusinessScopeTypeCode
 * @subpackage Structs
 */
class BusinessScopeTypeCode extends AbstractStructBase
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
     * The listAgencyID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $listAgencyID = null;
    /**
     * The listAgencySchemeAgencyID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $listAgencySchemeAgencyID = null;
    /**
     * The listAgencySchemeID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $listAgencySchemeID = null;
    /**
     * The listID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $listID = null;
    /**
     * The listVersionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $listVersionID = null;
    /**
     * Constructor method for BusinessScopeTypeCode
     * @uses BusinessScopeTypeCode::setValue()
     * @uses BusinessScopeTypeCode::setListAgencyID()
     * @uses BusinessScopeTypeCode::setListAgencySchemeAgencyID()
     * @uses BusinessScopeTypeCode::setListAgencySchemeID()
     * @uses BusinessScopeTypeCode::setListID()
     * @uses BusinessScopeTypeCode::setListVersionID()
     * @param string $value
     * @param string $listAgencyID
     * @param string $listAgencySchemeAgencyID
     * @param string $listAgencySchemeID
     * @param string $listID
     * @param string $listVersionID
     */
    public function __construct(?string $value = null, ?string $listAgencyID = null, ?string $listAgencySchemeAgencyID = null, ?string $listAgencySchemeID = null, ?string $listID = null, ?string $listVersionID = null)
    {
        $this
            ->setValue($value)
            ->setListAgencyID($listAgencyID)
            ->setListAgencySchemeAgencyID($listAgencySchemeAgencyID)
            ->setListAgencySchemeID($listAgencySchemeID)
            ->setListID($listID)
            ->setListVersionID($listVersionID);
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
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScopeTypeCode
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
     * Get listAgencyID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getListAgencyID(): ?string
    {
        return isset($this->listAgencyID) ? $this->listAgencyID : null;
    }
    /**
     * Set listAgencyID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $listAgencyID
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScopeTypeCode
     */
    public function setListAgencyID(?string $listAgencyID = null): self
    {
        // validation for constraint: string
        if (!is_null($listAgencyID) && !is_string($listAgencyID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listAgencyID, true), gettype($listAgencyID)), __LINE__);
        }
        if (is_null($listAgencyID) || (is_array($listAgencyID) && empty($listAgencyID))) {
            unset($this->listAgencyID);
        } else {
            $this->listAgencyID = $listAgencyID;
        }
        
        return $this;
    }
    /**
     * Get listAgencySchemeAgencyID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getListAgencySchemeAgencyID(): ?string
    {
        return isset($this->listAgencySchemeAgencyID) ? $this->listAgencySchemeAgencyID : null;
    }
    /**
     * Set listAgencySchemeAgencyID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $listAgencySchemeAgencyID
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScopeTypeCode
     */
    public function setListAgencySchemeAgencyID(?string $listAgencySchemeAgencyID = null): self
    {
        // validation for constraint: string
        if (!is_null($listAgencySchemeAgencyID) && !is_string($listAgencySchemeAgencyID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listAgencySchemeAgencyID, true), gettype($listAgencySchemeAgencyID)), __LINE__);
        }
        if (is_null($listAgencySchemeAgencyID) || (is_array($listAgencySchemeAgencyID) && empty($listAgencySchemeAgencyID))) {
            unset($this->listAgencySchemeAgencyID);
        } else {
            $this->listAgencySchemeAgencyID = $listAgencySchemeAgencyID;
        }
        
        return $this;
    }
    /**
     * Get listAgencySchemeID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getListAgencySchemeID(): ?string
    {
        return isset($this->listAgencySchemeID) ? $this->listAgencySchemeID : null;
    }
    /**
     * Set listAgencySchemeID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $listAgencySchemeID
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScopeTypeCode
     */
    public function setListAgencySchemeID(?string $listAgencySchemeID = null): self
    {
        // validation for constraint: string
        if (!is_null($listAgencySchemeID) && !is_string($listAgencySchemeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listAgencySchemeID, true), gettype($listAgencySchemeID)), __LINE__);
        }
        if (is_null($listAgencySchemeID) || (is_array($listAgencySchemeID) && empty($listAgencySchemeID))) {
            unset($this->listAgencySchemeID);
        } else {
            $this->listAgencySchemeID = $listAgencySchemeID;
        }
        
        return $this;
    }
    /**
     * Get listID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getListID(): ?string
    {
        return isset($this->listID) ? $this->listID : null;
    }
    /**
     * Set listID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $listID
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScopeTypeCode
     */
    public function setListID(?string $listID = null): self
    {
        // validation for constraint: string
        if (!is_null($listID) && !is_string($listID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listID, true), gettype($listID)), __LINE__);
        }
        if (is_null($listID) || (is_array($listID) && empty($listID))) {
            unset($this->listID);
        } else {
            $this->listID = $listID;
        }
        
        return $this;
    }
    /**
     * Get listVersionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getListVersionID(): ?string
    {
        return isset($this->listVersionID) ? $this->listVersionID : null;
    }
    /**
     * Set listVersionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $listVersionID
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScopeTypeCode
     */
    public function setListVersionID(?string $listVersionID = null): self
    {
        // validation for constraint: string
        if (!is_null($listVersionID) && !is_string($listVersionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listVersionID, true), gettype($listVersionID)), __LINE__);
        }
        if (is_null($listVersionID) || (is_array($listVersionID) && empty($listVersionID))) {
            unset($this->listVersionID);
        } else {
            $this->listVersionID = $listVersionID;
        }
        
        return $this;
    }
}
