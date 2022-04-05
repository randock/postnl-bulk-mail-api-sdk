<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetValidationAndSortingResultV1 StructType
 * @subpackage Structs
 */
class GetValidationAndSortingResultV1 extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $request = null;
    /**
     * Constructor method for GetValidationAndSortingResultV1
     * @uses GetValidationAndSortingResultV1::setRequest()
     * @param \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $request
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1|null
     */
    public function getRequest(): ?\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $request
     * @return \Randock\PostNL\BulkMailApi\StructType\GetValidationAndSortingResultV1
     */
    public function setRequest(?\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $request = null): self
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        
        return $this;
    }
}
