<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateAddressAttachmentV1Response StructType
 * @subpackage Structs
 */
class ValidateAddressAttachmentV1Response extends AbstractStructBase
{
    /**
     * The ValidateAddressAttachmentV1Result
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $ValidateAddressAttachmentV1Result = null;
    /**
     * Constructor method for ValidateAddressAttachmentV1Response
     * @uses ValidateAddressAttachmentV1Response::setValidateAddressAttachmentV1Result()
     * @param \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $validateAddressAttachmentV1Result
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $validateAddressAttachmentV1Result = null)
    {
        $this
            ->setValidateAddressAttachmentV1Result($validateAddressAttachmentV1Result);
    }
    /**
     * Get ValidateAddressAttachmentV1Result value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1|null
     */
    public function getValidateAddressAttachmentV1Result(): ?\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1
    {
        return isset($this->ValidateAddressAttachmentV1Result) ? $this->ValidateAddressAttachmentV1Result : null;
    }
    /**
     * Set ValidateAddressAttachmentV1Result value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $validateAddressAttachmentV1Result
     * @return \Randock\PostNL\BulkMailApi\StructType\ValidateAddressAttachmentV1Response
     */
    public function setValidateAddressAttachmentV1Result(?\Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1 $validateAddressAttachmentV1Result = null): self
    {
        if (is_null($validateAddressAttachmentV1Result) || (is_array($validateAddressAttachmentV1Result) && empty($validateAddressAttachmentV1Result))) {
            unset($this->ValidateAddressAttachmentV1Result);
        } else {
            $this->ValidateAddressAttachmentV1Result = $validateAddressAttachmentV1Result;
        }
        
        return $this;
    }
}
