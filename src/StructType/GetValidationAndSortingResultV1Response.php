<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetValidationAndSortingResultV1Response StructType
 * @subpackage Structs
 */
class GetValidationAndSortingResultV1Response extends AbstractStructBase
{
    /**
     * The GetValidationAndSortingResultV1Result
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1
     */
    public $GetValidationAndSortingResultV1Result;
    /**
     * Constructor method for GetValidationAndSortingResultV1Response
     * @uses GetValidationAndSortingResultV1Response::setGetValidationAndSortingResultV1Result()
     * @param \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $getValidationAndSortingResultV1Result
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $getValidationAndSortingResultV1Result = null)
    {
        $this
            ->setGetValidationAndSortingResultV1Result($getValidationAndSortingResultV1Result);
    }
    /**
     * Get GetValidationAndSortingResultV1Result value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1|null
     */
    public function getGetValidationAndSortingResultV1Result()
    {
        return isset($this->GetValidationAndSortingResultV1Result) ? $this->GetValidationAndSortingResultV1Result : null;
    }
    /**
     * Set GetValidationAndSortingResultV1Result value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $getValidationAndSortingResultV1Result
     * @return \Randock\PostNL\BulkMailApi\StructType\GetValidationAndSortingResultV1Response
     */
    public function setGetValidationAndSortingResultV1Result(\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $getValidationAndSortingResultV1Result = null)
    {
        if (is_null($getValidationAndSortingResultV1Result) || (is_array($getValidationAndSortingResultV1Result) && empty($getValidationAndSortingResultV1Result))) {
            unset($this->GetValidationAndSortingResultV1Result);
        } else {
            $this->GetValidationAndSortingResultV1Result = $getValidationAndSortingResultV1Result;
        }
        return $this;
    }
}
