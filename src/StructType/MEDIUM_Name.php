<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MEDIUM_Name StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MEDIUM_Name
 * @subpackage Structs
 */
class MEDIUM_Name extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Value;
    /**
     * The languageCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $languageCode;
    /**
     * Constructor method for MEDIUM_Name
     * @uses MEDIUM_Name::setValue()
     * @uses MEDIUM_Name::setLanguageCode()
     * @param string $value
     * @param string $languageCode
     */
    public function __construct($value = null, $languageCode = null)
    {
        $this
            ->setValue($value)
            ->setLanguageCode($languageCode);
    }
    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValue()
    {
        return isset($this->Value) ? $this->Value : null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $value
     * @return \Randock\PostNL\BulkMailApi\StructType\MEDIUM_Name
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        return $this;
    }
    /**
     * Get languageCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLanguageCode()
    {
        return isset($this->languageCode) ? $this->languageCode : null;
    }
    /**
     * Set languageCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $languageCode
     * @return \Randock\PostNL\BulkMailApi\StructType\MEDIUM_Name
     */
    public function setLanguageCode($languageCode = null)
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageCode, true), gettype($languageCode)), __LINE__);
        }
        if (is_null($languageCode) || (is_array($languageCode) && empty($languageCode))) {
            unset($this->languageCode);
        } else {
            $this->languageCode = $languageCode;
        }
        return $this;
    }
}
