<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TenderBulkMailOrderV2Response StructType
 * @subpackage Structs
 */
class TenderBulkMailOrderV2Response extends AbstractStructBase
{
    /**
     * The TenderBulkMailOrderV2Result
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2
     */
    public $TenderBulkMailOrderV2Result;
    /**
     * Constructor method for TenderBulkMailOrderV2Response
     * @uses TenderBulkMailOrderV2Response::setTenderBulkMailOrderV2Result()
     * @param \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $tenderBulkMailOrderV2Result
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $tenderBulkMailOrderV2Result = null)
    {
        $this
            ->setTenderBulkMailOrderV2Result($tenderBulkMailOrderV2Result);
    }
    /**
     * Get TenderBulkMailOrderV2Result value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2|null
     */
    public function getTenderBulkMailOrderV2Result()
    {
        return isset($this->TenderBulkMailOrderV2Result) ? $this->TenderBulkMailOrderV2Result : null;
    }
    /**
     * Set TenderBulkMailOrderV2Result value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $tenderBulkMailOrderV2Result
     * @return \Randock\PostNL\BulkMailApi\StructType\TenderBulkMailOrderV2Response
     */
    public function setTenderBulkMailOrderV2Result(\Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $tenderBulkMailOrderV2Result = null)
    {
        if (is_null($tenderBulkMailOrderV2Result) || (is_array($tenderBulkMailOrderV2Result) && empty($tenderBulkMailOrderV2Result))) {
            unset($this->TenderBulkMailOrderV2Result);
        } else {
            $this->TenderBulkMailOrderV2Result = $tenderBulkMailOrderV2Result;
        }
        return $this;
    }
}
