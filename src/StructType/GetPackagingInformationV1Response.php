<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPackagingInformationV1Response StructType
 * @subpackage Structs
 */
class GetPackagingInformationV1Response extends AbstractStructBase
{
    /**
     * The GetPackagingInformationV1Result
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $GetPackagingInformationV1Result = null;
    /**
     * Constructor method for GetPackagingInformationV1Response
     * @uses GetPackagingInformationV1Response::setGetPackagingInformationV1Result()
     * @param \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $getPackagingInformationV1Result
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $getPackagingInformationV1Result = null)
    {
        $this
            ->setGetPackagingInformationV1Result($getPackagingInformationV1Result);
    }
    /**
     * Get GetPackagingInformationV1Result value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1|null
     */
    public function getGetPackagingInformationV1Result(): ?\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1
    {
        return isset($this->GetPackagingInformationV1Result) ? $this->GetPackagingInformationV1Result : null;
    }
    /**
     * Set GetPackagingInformationV1Result value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $getPackagingInformationV1Result
     * @return \Randock\PostNL\BulkMailApi\StructType\GetPackagingInformationV1Response
     */
    public function setGetPackagingInformationV1Result(?\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $getPackagingInformationV1Result = null): self
    {
        if (is_null($getPackagingInformationV1Result) || (is_array($getPackagingInformationV1Result) && empty($getPackagingInformationV1Result))) {
            unset($this->GetPackagingInformationV1Result);
        } else {
            $this->GetPackagingInformationV1Result = $getPackagingInformationV1Result;
        }
        
        return $this;
    }
}
