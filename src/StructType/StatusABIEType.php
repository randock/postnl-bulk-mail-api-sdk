<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatusABIEType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:StatusABIEType
 * @subpackage Structs
 */
class StatusABIEType extends StatusBasisType
{
    /**
     * The TimePeriod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TimePeriodType
     */
    public $TimePeriod;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $Type;
    /**
     * Constructor method for StatusABIEType
     * @uses StatusABIEType::setTimePeriod()
     * @uses StatusABIEType::setType()
     * @param \Randock\PostNL\BulkMailApi\StructType\TimePeriodType $timePeriod
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\TimePeriodType $timePeriod = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type = null)
    {
        $this
            ->setTimePeriod($timePeriod)
            ->setType($type);
    }
    /**
     * Get TimePeriod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TimePeriodType|null
     */
    public function getTimePeriod()
    {
        return isset($this->TimePeriod) ? $this->TimePeriod : null;
    }
    /**
     * Set TimePeriod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TimePeriodType $timePeriod
     * @return \Randock\PostNL\BulkMailApi\StructType\StatusABIEType
     */
    public function setTimePeriod(\Randock\PostNL\BulkMailApi\StructType\TimePeriodType $timePeriod = null)
    {
        if (is_null($timePeriod) || (is_array($timePeriod) && empty($timePeriod))) {
            unset($this->TimePeriod);
        } else {
            $this->TimePeriod = $timePeriod;
        }
        return $this;
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getType()
    {
        return isset($this->Type) ? $this->Type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type
     * @return \Randock\PostNL\BulkMailApi\StructType\StatusABIEType
     */
    public function setType(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $type = null)
    {
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }
        return $this;
    }
}
