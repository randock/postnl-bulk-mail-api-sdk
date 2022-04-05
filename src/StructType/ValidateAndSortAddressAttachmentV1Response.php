<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateAndSortAddressAttachmentV1Response StructType
 * @subpackage Structs
 */
class ValidateAndSortAddressAttachmentV1Response extends AbstractStructBase
{
    /**
     * The ValidateAndSortAddressAttachmentV1Result
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $ValidateAndSortAddressAttachmentV1Result = null;
    /**
     * Constructor method for ValidateAndSortAddressAttachmentV1Response
     * @uses ValidateAndSortAddressAttachmentV1Response::setValidateAndSortAddressAttachmentV1Result()
     * @param \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $validateAndSortAddressAttachmentV1Result
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $validateAndSortAddressAttachmentV1Result = null)
    {
        $this
            ->setValidateAndSortAddressAttachmentV1Result($validateAndSortAddressAttachmentV1Result);
    }
    /**
     * Get ValidateAndSortAddressAttachmentV1Result value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1|null
     */
    public function getValidateAndSortAddressAttachmentV1Result(): ?\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1
    {
        return isset($this->ValidateAndSortAddressAttachmentV1Result) ? $this->ValidateAndSortAddressAttachmentV1Result : null;
    }
    /**
     * Set ValidateAndSortAddressAttachmentV1Result value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $validateAndSortAddressAttachmentV1Result
     * @return \Randock\PostNL\BulkMailApi\StructType\ValidateAndSortAddressAttachmentV1Response
     */
    public function setValidateAndSortAddressAttachmentV1Result(?\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $validateAndSortAddressAttachmentV1Result = null): self
    {
        if (is_null($validateAndSortAddressAttachmentV1Result) || (is_array($validateAndSortAddressAttachmentV1Result) && empty($validateAndSortAddressAttachmentV1Result))) {
            unset($this->ValidateAndSortAddressAttachmentV1Result);
        } else {
            $this->ValidateAndSortAddressAttachmentV1Result = $validateAndSortAddressAttachmentV1Result;
        }
        
        return $this;
    }
}
