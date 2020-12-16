<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsignmentDeliveryWeekType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ConsignmentDeliveryWeekType
 * @subpackage Structs
 */
class ConsignmentDeliveryWeekType extends AbstractStructBase
{
    /**
     * The WeekInYear
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $WeekInYear;
    /**
     * The Year
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Year;
    /**
     * Constructor method for ConsignmentDeliveryWeekType
     * @uses ConsignmentDeliveryWeekType::setWeekInYear()
     * @uses ConsignmentDeliveryWeekType::setYear()
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $weekInYear
     * @param string $year
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $weekInYear = null, $year = null)
    {
        $this
            ->setWeekInYear($weekInYear)
            ->setYear($year);
    }
    /**
     * Get WeekInYear value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getWeekInYear()
    {
        return isset($this->WeekInYear) ? $this->WeekInYear : null;
    }
    /**
     * Set WeekInYear value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $weekInYear
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentDeliveryWeekType
     */
    public function setWeekInYear(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $weekInYear = null)
    {
        if (is_null($weekInYear) || (is_array($weekInYear) && empty($weekInYear))) {
            unset($this->WeekInYear);
        } else {
            $this->WeekInYear = $weekInYear;
        }
        return $this;
    }
    /**
     * Get Year value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getYear()
    {
        return isset($this->Year) ? $this->Year : null;
    }
    /**
     * Set Year value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $year
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentDeliveryWeekType
     */
    public function setYear($year = null)
    {
        // validation for constraint: string
        if (!is_null($year) && !is_string($year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        if (is_null($year) || (is_array($year) && empty($year))) {
            unset($this->Year);
        } else {
            $this->Year = $year;
        }
        return $this;
    }
}
