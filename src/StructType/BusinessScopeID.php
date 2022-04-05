<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessScopeID StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BusinessScopeID
 * @subpackage Structs
 */
class BusinessScopeID extends AbstractStructBase
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
     * The schemeID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $schemeID = null;
    /**
     * Constructor method for BusinessScopeID
     * @uses BusinessScopeID::setValue()
     * @uses BusinessScopeID::setSchemeAgencyID()
     * @uses BusinessScopeID::setSchemeID()
     * @param string $value
     * @param string $schemeAgencyID
     * @param string $schemeID
     */
    public function __construct(?string $value = null, ?string $schemeAgencyID = null, ?string $schemeID = null)
    {
        $this
            ->setValue($value)
            ->setSchemeAgencyID($schemeAgencyID)
            ->setSchemeID($schemeID);
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
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScopeID
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
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScopeID
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
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessScopeID
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
}
