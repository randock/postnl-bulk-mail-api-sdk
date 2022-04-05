<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreAdviceBulkMailOrderV2Response StructType
 * @subpackage Structs
 */
class PreAdviceBulkMailOrderV2Response extends AbstractStructBase
{
    /**
     * The PreAdviceBulkMailOrderV2Result
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $PreAdviceBulkMailOrderV2Result = null;
    /**
     * Constructor method for PreAdviceBulkMailOrderV2Response
     * @uses PreAdviceBulkMailOrderV2Response::setPreAdviceBulkMailOrderV2Result()
     * @param \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $preAdviceBulkMailOrderV2Result
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $preAdviceBulkMailOrderV2Result = null)
    {
        $this
            ->setPreAdviceBulkMailOrderV2Result($preAdviceBulkMailOrderV2Result);
    }
    /**
     * Get PreAdviceBulkMailOrderV2Result value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2|null
     */
    public function getPreAdviceBulkMailOrderV2Result(): ?\Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2
    {
        return isset($this->PreAdviceBulkMailOrderV2Result) ? $this->PreAdviceBulkMailOrderV2Result : null;
    }
    /**
     * Set PreAdviceBulkMailOrderV2Result value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $preAdviceBulkMailOrderV2Result
     * @return \Randock\PostNL\BulkMailApi\StructType\PreAdviceBulkMailOrderV2Response
     */
    public function setPreAdviceBulkMailOrderV2Result(?\Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $preAdviceBulkMailOrderV2Result = null): self
    {
        if (is_null($preAdviceBulkMailOrderV2Result) || (is_array($preAdviceBulkMailOrderV2Result) && empty($preAdviceBulkMailOrderV2Result))) {
            unset($this->PreAdviceBulkMailOrderV2Result);
        } else {
            $this->PreAdviceBulkMailOrderV2Result = $preAdviceBulkMailOrderV2Result;
        }
        
        return $this;
    }
}
