<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetValidationResultV1Response StructType
 * @subpackage Structs
 */
class GetValidationResultV1Response extends AbstractStructBase
{
    /**
     * The GetValidationResultV1Result
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1
     */
    public $GetValidationResultV1Result;
    /**
     * Constructor method for GetValidationResultV1Response
     * @uses GetValidationResultV1Response::setGetValidationResultV1Result()
     * @param \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $getValidationResultV1Result
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $getValidationResultV1Result = null)
    {
        $this
            ->setGetValidationResultV1Result($getValidationResultV1Result);
    }
    /**
     * Get GetValidationResultV1Result value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1|null
     */
    public function getGetValidationResultV1Result()
    {
        return isset($this->GetValidationResultV1Result) ? $this->GetValidationResultV1Result : null;
    }
    /**
     * Set GetValidationResultV1Result value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $getValidationResultV1Result
     * @return \Randock\PostNL\BulkMailApi\StructType\GetValidationResultV1Response
     */
    public function setGetValidationResultV1Result(\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $getValidationResultV1Result = null)
    {
        if (is_null($getValidationResultV1Result) || (is_array($getValidationResultV1Result) && empty($getValidationResultV1Result))) {
            unset($this->GetValidationResultV1Result);
        } else {
            $this->GetValidationResultV1Result = $getValidationResultV1Result;
        }
        return $this;
    }
}
