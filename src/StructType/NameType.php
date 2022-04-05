<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:NameType
 * @subpackage Structs
 */
class NameType extends AbstractStructBase
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
     * The languageID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $languageID = null;
    /**
     * Constructor method for NameType
     * @uses NameType::setValue()
     * @uses NameType::setLanguageID()
     * @param string $value
     * @param string $languageID
     */
    public function __construct(?string $value = null, ?string $languageID = null)
    {
        $this
            ->setValue($value)
            ->setLanguageID($languageID);
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
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType
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
     * Get languageID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLanguageID(): ?string
    {
        return isset($this->languageID) ? $this->languageID : null;
    }
    /**
     * Set languageID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $languageID
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType
     */
    public function setLanguageID(?string $languageID = null): self
    {
        // validation for constraint: string
        if (!is_null($languageID) && !is_string($languageID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageID, true), gettype($languageID)), __LINE__);
        }
        if (is_null($languageID) || (is_array($languageID) && empty($languageID))) {
            unset($this->languageID);
        } else {
            $this->languageID = $languageID;
        }
        
        return $this;
    }
}
