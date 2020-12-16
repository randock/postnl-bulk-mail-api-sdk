<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuantityType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:QuantityType
 * @subpackage Structs
 */
class QuantityType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Value;
    /**
     * The unitCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $unitCode;
    /**
     * Constructor method for QuantityType
     * @uses QuantityType::setValue()
     * @uses QuantityType::setUnitCode()
     * @param float $value
     * @param string $unitCode
     */
    public function __construct($value = null, $unitCode = null)
    {
        $this
            ->setValue($value)
            ->setUnitCode($unitCode);
    }
    /**
     * Get Value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param float $value
     * @return \Randock\PostNL\BulkMailApi\StructType\QuantityType
     */
    public function setValue($value = null)
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Get unitCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUnitCode()
    {
        return isset($this->unitCode) ? $this->unitCode : null;
    }
    /**
     * Set unitCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $unitCode
     * @return \Randock\PostNL\BulkMailApi\StructType\QuantityType
     */
    public function setUnitCode($unitCode = null)
    {
        // validation for constraint: string
        if (!is_null($unitCode) && !is_string($unitCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitCode, true), gettype($unitCode)), __LINE__);
        }
        if (is_null($unitCode) || (is_array($unitCode) && empty($unitCode))) {
            unset($this->unitCode);
        } else {
            $this->unitCode = $unitCode;
        }
        return $this;
    }
}
