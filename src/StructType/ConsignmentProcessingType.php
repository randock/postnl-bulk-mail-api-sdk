<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsignmentProcessingType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ConsignmentProcessingType
 * @subpackage Structs
 */
class ConsignmentProcessingType extends AbstractStructBase
{
    /**
     * The ConsignmentDeliveryDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ConsignmentDeliveryDate;
    /**
     * The ConsignmentDeliveryDateSpecified
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ConsignmentDeliveryDateSpecified;
    /**
     * The ConsignmentDeliveryTimePeriod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TimePeriodType
     */
    public $ConsignmentDeliveryTimePeriod;
    /**
     * The ConsignmentDeliveryWeek
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ConsignmentDeliveryWeekType
     */
    public $ConsignmentDeliveryWeek;
    /**
     * The ConsignmentProcessingCharacteristics
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType
     */
    public $ConsignmentProcessingCharacteristics;
    /**
     * The ConsignmentShippingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ConsignmentShippingDate;
    /**
     * The ConsignmentShippingDateSpecified
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ConsignmentShippingDateSpecified;
    /**
     * The DestinationCountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CountryCodeType
     */
    public $DestinationCountryCode;
    /**
     * The DestinationZone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $DestinationZone;
    /**
     * The KIXIndicator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $KIXIndicator;
    /**
     * Constructor method for ConsignmentProcessingType
     * @uses ConsignmentProcessingType::setConsignmentDeliveryDate()
     * @uses ConsignmentProcessingType::setConsignmentDeliveryDateSpecified()
     * @uses ConsignmentProcessingType::setConsignmentDeliveryTimePeriod()
     * @uses ConsignmentProcessingType::setConsignmentDeliveryWeek()
     * @uses ConsignmentProcessingType::setConsignmentProcessingCharacteristics()
     * @uses ConsignmentProcessingType::setConsignmentShippingDate()
     * @uses ConsignmentProcessingType::setConsignmentShippingDateSpecified()
     * @uses ConsignmentProcessingType::setDestinationCountryCode()
     * @uses ConsignmentProcessingType::setDestinationZone()
     * @uses ConsignmentProcessingType::setKIXIndicator()
     * @param string $consignmentDeliveryDate
     * @param bool $consignmentDeliveryDateSpecified
     * @param \Randock\PostNL\BulkMailApi\StructType\TimePeriodType $consignmentDeliveryTimePeriod
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentDeliveryWeekType $consignmentDeliveryWeek
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $consignmentProcessingCharacteristics
     * @param string $consignmentShippingDate
     * @param bool $consignmentShippingDateSpecified
     * @param \Randock\PostNL\BulkMailApi\StructType\CountryCodeType $destinationCountryCode
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $destinationZone
     * @param bool $kIXIndicator
     */
    public function __construct($consignmentDeliveryDate = null, $consignmentDeliveryDateSpecified = null, \Randock\PostNL\BulkMailApi\StructType\TimePeriodType $consignmentDeliveryTimePeriod = null, \Randock\PostNL\BulkMailApi\StructType\ConsignmentDeliveryWeekType $consignmentDeliveryWeek = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $consignmentProcessingCharacteristics = null, $consignmentShippingDate = null, $consignmentShippingDateSpecified = null, \Randock\PostNL\BulkMailApi\StructType\CountryCodeType $destinationCountryCode = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $destinationZone = null, $kIXIndicator = null)
    {
        $this
            ->setConsignmentDeliveryDate($consignmentDeliveryDate)
            ->setConsignmentDeliveryDateSpecified($consignmentDeliveryDateSpecified)
            ->setConsignmentDeliveryTimePeriod($consignmentDeliveryTimePeriod)
            ->setConsignmentDeliveryWeek($consignmentDeliveryWeek)
            ->setConsignmentProcessingCharacteristics($consignmentProcessingCharacteristics)
            ->setConsignmentShippingDate($consignmentShippingDate)
            ->setConsignmentShippingDateSpecified($consignmentShippingDateSpecified)
            ->setDestinationCountryCode($destinationCountryCode)
            ->setDestinationZone($destinationZone)
            ->setKIXIndicator($kIXIndicator);
    }
    /**
     * Get ConsignmentDeliveryDate value
     * @return string|null
     */
    public function getConsignmentDeliveryDate()
    {
        return $this->ConsignmentDeliveryDate;
    }
    /**
     * Set ConsignmentDeliveryDate value
     * @param string $consignmentDeliveryDate
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
     */
    public function setConsignmentDeliveryDate($consignmentDeliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($consignmentDeliveryDate) && !is_string($consignmentDeliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consignmentDeliveryDate, true), gettype($consignmentDeliveryDate)), __LINE__);
        }
        $this->ConsignmentDeliveryDate = $consignmentDeliveryDate;
        return $this;
    }
    /**
     * Get ConsignmentDeliveryDateSpecified value
     * @return bool|null
     */
    public function getConsignmentDeliveryDateSpecified()
    {
        return $this->ConsignmentDeliveryDateSpecified;
    }
    /**
     * Set ConsignmentDeliveryDateSpecified value
     * @param bool $consignmentDeliveryDateSpecified
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
     */
    public function setConsignmentDeliveryDateSpecified($consignmentDeliveryDateSpecified = null)
    {
        // validation for constraint: boolean
        if (!is_null($consignmentDeliveryDateSpecified) && !is_bool($consignmentDeliveryDateSpecified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consignmentDeliveryDateSpecified, true), gettype($consignmentDeliveryDateSpecified)), __LINE__);
        }
        $this->ConsignmentDeliveryDateSpecified = $consignmentDeliveryDateSpecified;
        return $this;
    }
    /**
     * Get ConsignmentDeliveryTimePeriod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TimePeriodType|null
     */
    public function getConsignmentDeliveryTimePeriod()
    {
        return isset($this->ConsignmentDeliveryTimePeriod) ? $this->ConsignmentDeliveryTimePeriod : null;
    }
    /**
     * Set ConsignmentDeliveryTimePeriod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TimePeriodType $consignmentDeliveryTimePeriod
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
     */
    public function setConsignmentDeliveryTimePeriod(\Randock\PostNL\BulkMailApi\StructType\TimePeriodType $consignmentDeliveryTimePeriod = null)
    {
        if (is_null($consignmentDeliveryTimePeriod) || (is_array($consignmentDeliveryTimePeriod) && empty($consignmentDeliveryTimePeriod))) {
            unset($this->ConsignmentDeliveryTimePeriod);
        } else {
            $this->ConsignmentDeliveryTimePeriod = $consignmentDeliveryTimePeriod;
        }
        return $this;
    }
    /**
     * Get ConsignmentDeliveryWeek value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentDeliveryWeekType|null
     */
    public function getConsignmentDeliveryWeek()
    {
        return isset($this->ConsignmentDeliveryWeek) ? $this->ConsignmentDeliveryWeek : null;
    }
    /**
     * Set ConsignmentDeliveryWeek value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentDeliveryWeekType $consignmentDeliveryWeek
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
     */
    public function setConsignmentDeliveryWeek(\Randock\PostNL\BulkMailApi\StructType\ConsignmentDeliveryWeekType $consignmentDeliveryWeek = null)
    {
        if (is_null($consignmentDeliveryWeek) || (is_array($consignmentDeliveryWeek) && empty($consignmentDeliveryWeek))) {
            unset($this->ConsignmentDeliveryWeek);
        } else {
            $this->ConsignmentDeliveryWeek = $consignmentDeliveryWeek;
        }
        return $this;
    }
    /**
     * Get ConsignmentProcessingCharacteristics value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType|null
     */
    public function getConsignmentProcessingCharacteristics()
    {
        return isset($this->ConsignmentProcessingCharacteristics) ? $this->ConsignmentProcessingCharacteristics : null;
    }
    /**
     * Set ConsignmentProcessingCharacteristics value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $consignmentProcessingCharacteristics
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
     */
    public function setConsignmentProcessingCharacteristics(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $consignmentProcessingCharacteristics = null)
    {
        if (is_null($consignmentProcessingCharacteristics) || (is_array($consignmentProcessingCharacteristics) && empty($consignmentProcessingCharacteristics))) {
            unset($this->ConsignmentProcessingCharacteristics);
        } else {
            $this->ConsignmentProcessingCharacteristics = $consignmentProcessingCharacteristics;
        }
        return $this;
    }
    /**
     * Get ConsignmentShippingDate value
     * @return string|null
     */
    public function getConsignmentShippingDate()
    {
        return $this->ConsignmentShippingDate;
    }
    /**
     * Set ConsignmentShippingDate value
     * @param string $consignmentShippingDate
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
     */
    public function setConsignmentShippingDate($consignmentShippingDate = null)
    {
        // validation for constraint: string
        if (!is_null($consignmentShippingDate) && !is_string($consignmentShippingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consignmentShippingDate, true), gettype($consignmentShippingDate)), __LINE__);
        }
        $this->ConsignmentShippingDate = $consignmentShippingDate;
        return $this;
    }
    /**
     * Get ConsignmentShippingDateSpecified value
     * @return bool|null
     */
    public function getConsignmentShippingDateSpecified()
    {
        return $this->ConsignmentShippingDateSpecified;
    }
    /**
     * Set ConsignmentShippingDateSpecified value
     * @param bool $consignmentShippingDateSpecified
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
     */
    public function setConsignmentShippingDateSpecified($consignmentShippingDateSpecified = null)
    {
        // validation for constraint: boolean
        if (!is_null($consignmentShippingDateSpecified) && !is_bool($consignmentShippingDateSpecified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consignmentShippingDateSpecified, true), gettype($consignmentShippingDateSpecified)), __LINE__);
        }
        $this->ConsignmentShippingDateSpecified = $consignmentShippingDateSpecified;
        return $this;
    }
    /**
     * Get DestinationCountryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CountryCodeType|null
     */
    public function getDestinationCountryCode()
    {
        return isset($this->DestinationCountryCode) ? $this->DestinationCountryCode : null;
    }
    /**
     * Set DestinationCountryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CountryCodeType $destinationCountryCode
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
     */
    public function setDestinationCountryCode(\Randock\PostNL\BulkMailApi\StructType\CountryCodeType $destinationCountryCode = null)
    {
        if (is_null($destinationCountryCode) || (is_array($destinationCountryCode) && empty($destinationCountryCode))) {
            unset($this->DestinationCountryCode);
        } else {
            $this->DestinationCountryCode = $destinationCountryCode;
        }
        return $this;
    }
    /**
     * Get DestinationZone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getDestinationZone()
    {
        return isset($this->DestinationZone) ? $this->DestinationZone : null;
    }
    /**
     * Set DestinationZone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $destinationZone
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
     */
    public function setDestinationZone(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $destinationZone = null)
    {
        if (is_null($destinationZone) || (is_array($destinationZone) && empty($destinationZone))) {
            unset($this->DestinationZone);
        } else {
            $this->DestinationZone = $destinationZone;
        }
        return $this;
    }
    /**
     * Get KIXIndicator value
     * @return bool|null
     */
    public function getKIXIndicator()
    {
        return $this->KIXIndicator;
    }
    /**
     * Set KIXIndicator value
     * @param bool $kIXIndicator
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
     */
    public function setKIXIndicator($kIXIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($kIXIndicator) && !is_bool($kIXIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($kIXIndicator, true), gettype($kIXIndicator)), __LINE__);
        }
        $this->KIXIndicator = $kIXIndicator;
        return $this;
    }
}
