<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TrackingIDRangeType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TrackingIDRangeType
 * @subpackage Structs
 */
class TrackingIDRangeType extends AbstractStructBase
{
    /**
     * The EndTrackingID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $EndTrackingID;
    /**
     * The StartTrackingID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $StartTrackingID;
    /**
     * Constructor method for TrackingIDRangeType
     * @uses TrackingIDRangeType::setEndTrackingID()
     * @uses TrackingIDRangeType::setStartTrackingID()
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $endTrackingID
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $startTrackingID
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $endTrackingID = null, \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $startTrackingID = null)
    {
        $this
            ->setEndTrackingID($endTrackingID)
            ->setStartTrackingID($startTrackingID);
    }
    /**
     * Get EndTrackingID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getEndTrackingID()
    {
        return isset($this->EndTrackingID) ? $this->EndTrackingID : null;
    }
    /**
     * Set EndTrackingID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $endTrackingID
     * @return \Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType
     */
    public function setEndTrackingID(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $endTrackingID = null)
    {
        if (is_null($endTrackingID) || (is_array($endTrackingID) && empty($endTrackingID))) {
            unset($this->EndTrackingID);
        } else {
            $this->EndTrackingID = $endTrackingID;
        }
        return $this;
    }
    /**
     * Get StartTrackingID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getStartTrackingID()
    {
        return isset($this->StartTrackingID) ? $this->StartTrackingID : null;
    }
    /**
     * Set StartTrackingID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $startTrackingID
     * @return \Randock\PostNL\BulkMailApi\StructType\TrackingIDRangeType
     */
    public function setStartTrackingID(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $startTrackingID = null)
    {
        if (is_null($startTrackingID) || (is_array($startTrackingID) && empty($startTrackingID))) {
            unset($this->StartTrackingID);
        } else {
            $this->StartTrackingID = $startTrackingID;
        }
        return $this;
    }
}
