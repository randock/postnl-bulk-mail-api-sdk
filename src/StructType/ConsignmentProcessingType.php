<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $ConsignmentDeliveryDate = null;
    /**
     * The ConsignmentDeliveryDateSpecified
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ConsignmentDeliveryDateSpecified = null;
    /**
     * The ConsignmentDeliveryTimePeriod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TimePeriodType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\TimePeriodType $ConsignmentDeliveryTimePeriod = null;
    /**
     * The ConsignmentDeliveryWeek
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ConsignmentDeliveryWeekType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\ConsignmentDeliveryWeekType $ConsignmentDeliveryWeek = null;
    /**
     * The ConsignmentProcessingCharacteristics
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $ConsignmentProcessingCharacteristics = null;
    /**
     * The ConsignmentShippingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ConsignmentShippingDate = null;
    /**
     * The ConsignmentShippingDateSpecified
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ConsignmentShippingDateSpecified = null;
    /**
     * The DestinationCountryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CountryCodeType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CountryCodeType $DestinationCountryCode = null;
    /**
     * The DestinationZone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $DestinationZone = null;
    /**
     * The KIXIndicator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $KIXIndicator = null;
    /**
     * The KIXIndicatorSpecified
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $KIXIndicatorSpecified = null;
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
     * @uses ConsignmentProcessingType::setKIXIndicatorSpecified()
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
     * @param bool $kIXIndicatorSpecified
     */
    public function __construct(?string $consignmentDeliveryDate = null, ?bool $consignmentDeliveryDateSpecified = null, ?\Randock\PostNL\BulkMailApi\StructType\TimePeriodType $consignmentDeliveryTimePeriod = null, ?\Randock\PostNL\BulkMailApi\StructType\ConsignmentDeliveryWeekType $consignmentDeliveryWeek = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $consignmentProcessingCharacteristics = null, ?string $consignmentShippingDate = null, ?bool $consignmentShippingDateSpecified = null, ?\Randock\PostNL\BulkMailApi\StructType\CountryCodeType $destinationCountryCode = null, ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $destinationZone = null, ?bool $kIXIndicator = null, ?bool $kIXIndicatorSpecified = null)
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
            ->setKIXIndicator($kIXIndicator)
            ->setKIXIndicatorSpecified($kIXIndicatorSpecified);
    }
    /**
     * Get ConsignmentDeliveryDate value
     * @return string|null
     */
    public function getConsignmentDeliveryDate(): ?string
    {
        return $this->ConsignmentDeliveryDate;
    }
    /**
     * Set ConsignmentDeliveryDate value
     * @param string $consignmentDeliveryDate
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
     */
    public function setConsignmentDeliveryDate(?string $consignmentDeliveryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($consignmentDeliveryDate) && !is_string($consignmentDeliveryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consignmentDeliveryDate, true), gettype($consignmentDeliveryDate)), __LINE__);
        }
        $this->ConsignmentDeliveryDate = $consignmentDeliveryDate;
        
        return $this;
    }
    /**
     * Get ConsignmentDeliveryDateSpecified value
     * @return bool|null
     */
    public function getConsignmentDeliveryDateSpecified(): ?bool
    {
        return $this->ConsignmentDeliveryDateSpecified;
    }
    /**
     * Set ConsignmentDeliveryDateSpecified value
     * @param bool $consignmentDeliveryDateSpecified
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
     */
    public function setConsignmentDeliveryDateSpecified(?bool $consignmentDeliveryDateSpecified = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consignmentDeliveryDateSpecified) && !is_bool($consignmentDeliveryDateSpecified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consignmentDeliveryDateSpecified, true), gettype($consignmentDeliveryDateSpecified)), __LINE__);
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
    public function getConsignmentDeliveryTimePeriod(): ?\Randock\PostNL\BulkMailApi\StructType\TimePeriodType
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
    public function setConsignmentDeliveryTimePeriod(?\Randock\PostNL\BulkMailApi\StructType\TimePeriodType $consignmentDeliveryTimePeriod = null): self
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
    public function getConsignmentDeliveryWeek(): ?\Randock\PostNL\BulkMailApi\StructType\ConsignmentDeliveryWeekType
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
    public function setConsignmentDeliveryWeek(?\Randock\PostNL\BulkMailApi\StructType\ConsignmentDeliveryWeekType $consignmentDeliveryWeek = null): self
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
    public function getConsignmentProcessingCharacteristics(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType
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
    public function setConsignmentProcessingCharacteristics(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $consignmentProcessingCharacteristics = null): self
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
    public function getConsignmentShippingDate(): ?string
    {
        return $this->ConsignmentShippingDate;
    }
    /**
     * Set ConsignmentShippingDate value
     * @param string $consignmentShippingDate
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
     */
    public function setConsignmentShippingDate(?string $consignmentShippingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($consignmentShippingDate) && !is_string($consignmentShippingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consignmentShippingDate, true), gettype($consignmentShippingDate)), __LINE__);
        }
        $this->ConsignmentShippingDate = $consignmentShippingDate;
        
        return $this;
    }
    /**
     * Get ConsignmentShippingDateSpecified value
     * @return bool|null
     */
    public function getConsignmentShippingDateSpecified(): ?bool
    {
        return $this->ConsignmentShippingDateSpecified;
    }
    /**
     * Set ConsignmentShippingDateSpecified value
     * @param bool $consignmentShippingDateSpecified
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
     */
    public function setConsignmentShippingDateSpecified(?bool $consignmentShippingDateSpecified = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consignmentShippingDateSpecified) && !is_bool($consignmentShippingDateSpecified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consignmentShippingDateSpecified, true), gettype($consignmentShippingDateSpecified)), __LINE__);
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
    public function getDestinationCountryCode(): ?\Randock\PostNL\BulkMailApi\StructType\CountryCodeType
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
    public function setDestinationCountryCode(?\Randock\PostNL\BulkMailApi\StructType\CountryCodeType $destinationCountryCode = null): self
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
    public function getDestinationZone(): ?\Randock\PostNL\BulkMailApi\StructType\CodeType1
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
    public function setDestinationZone(?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $destinationZone = null): self
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
    public function getKIXIndicator(): ?bool
    {
        return $this->KIXIndicator;
    }
    /**
     * Set KIXIndicator value
     * @param bool $kIXIndicator
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
     */
    public function setKIXIndicator(?bool $kIXIndicator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($kIXIndicator) && !is_bool($kIXIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($kIXIndicator, true), gettype($kIXIndicator)), __LINE__);
        }
        $this->KIXIndicator = $kIXIndicator;
        
        return $this;
    }
    /**
     * Get KIXIndicatorSpecified value
     * @return bool|null
     */
    public function getKIXIndicatorSpecified(): ?bool
    {
        return $this->KIXIndicatorSpecified;
    }
    /**
     * Set KIXIndicatorSpecified value
     * @param bool $kIXIndicatorSpecified
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
     */
    public function setKIXIndicatorSpecified(?bool $kIXIndicatorSpecified = null): self
    {
        // validation for constraint: boolean
        if (!is_null($kIXIndicatorSpecified) && !is_bool($kIXIndicatorSpecified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($kIXIndicatorSpecified, true), gettype($kIXIndicatorSpecified)), __LINE__);
        }
        $this->KIXIndicatorSpecified = $kIXIndicatorSpecified;
        
        return $this;
    }
}
