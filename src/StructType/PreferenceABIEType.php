<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferenceABIEType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PreferenceABIEType
 * @subpackage Structs
 */
class PreferenceABIEType extends AbstractStructBase
{
    /**
     * The EffectiveTimePeriod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TimePeriodType
     */
    public $EffectiveTimePeriod;
    /**
     * The Indicator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Indicator;
    /**
     * The IndicatorSpecified
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IndicatorSpecified;
    /**
     * The Sequence
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Sequence;
    /**
     * Constructor method for PreferenceABIEType
     * @uses PreferenceABIEType::setEffectiveTimePeriod()
     * @uses PreferenceABIEType::setIndicator()
     * @uses PreferenceABIEType::setIndicatorSpecified()
     * @uses PreferenceABIEType::setSequence()
     * @param \Randock\PostNL\BulkMailApi\StructType\TimePeriodType $effectiveTimePeriod
     * @param bool $indicator
     * @param bool $indicatorSpecified
     * @param string $sequence
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\TimePeriodType $effectiveTimePeriod = null, $indicator = null, $indicatorSpecified = null, $sequence = null)
    {
        $this
            ->setEffectiveTimePeriod($effectiveTimePeriod)
            ->setIndicator($indicator)
            ->setIndicatorSpecified($indicatorSpecified)
            ->setSequence($sequence);
    }
    /**
     * Get EffectiveTimePeriod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TimePeriodType|null
     */
    public function getEffectiveTimePeriod()
    {
        return isset($this->EffectiveTimePeriod) ? $this->EffectiveTimePeriod : null;
    }
    /**
     * Set EffectiveTimePeriod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TimePeriodType $effectiveTimePeriod
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferenceABIEType
     */
    public function setEffectiveTimePeriod(\Randock\PostNL\BulkMailApi\StructType\TimePeriodType $effectiveTimePeriod = null)
    {
        if (is_null($effectiveTimePeriod) || (is_array($effectiveTimePeriod) && empty($effectiveTimePeriod))) {
            unset($this->EffectiveTimePeriod);
        } else {
            $this->EffectiveTimePeriod = $effectiveTimePeriod;
        }
        return $this;
    }
    /**
     * Get Indicator value
     * @return bool|null
     */
    public function getIndicator()
    {
        return $this->Indicator;
    }
    /**
     * Set Indicator value
     * @param bool $indicator
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferenceABIEType
     */
    public function setIndicator($indicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicator) && !is_bool($indicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($indicator, true), gettype($indicator)), __LINE__);
        }
        $this->Indicator = $indicator;
        return $this;
    }
    /**
     * Get IndicatorSpecified value
     * @return bool|null
     */
    public function getIndicatorSpecified()
    {
        return $this->IndicatorSpecified;
    }
    /**
     * Set IndicatorSpecified value
     * @param bool $indicatorSpecified
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferenceABIEType
     */
    public function setIndicatorSpecified($indicatorSpecified = null)
    {
        // validation for constraint: boolean
        if (!is_null($indicatorSpecified) && !is_bool($indicatorSpecified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($indicatorSpecified, true), gettype($indicatorSpecified)), __LINE__);
        }
        $this->IndicatorSpecified = $indicatorSpecified;
        return $this;
    }
    /**
     * Get Sequence value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSequence()
    {
        return isset($this->Sequence) ? $this->Sequence : null;
    }
    /**
     * Set Sequence value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sequence
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferenceABIEType
     */
    public function setSequence($sequence = null)
    {
        // validation for constraint: string
        if (!is_null($sequence) && !is_string($sequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sequence, true), gettype($sequence)), __LINE__);
        }
        if (is_null($sequence) || (is_array($sequence) && empty($sequence))) {
            unset($this->Sequence);
        } else {
            $this->Sequence = $sequence;
        }
        return $this;
    }
}
