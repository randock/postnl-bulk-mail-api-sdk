<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreAdviceBulkMailOrderV2 StructType
 * @subpackage Structs
 */
class PreAdviceBulkMailOrderV2 extends AbstractStructBase
{
    /**
     * The preAdviceMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2
     */
    public $preAdviceMessage;
    /**
     * Constructor method for PreAdviceBulkMailOrderV2
     * @uses PreAdviceBulkMailOrderV2::setPreAdviceMessage()
     * @param \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $preAdviceMessage
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $preAdviceMessage = null)
    {
        $this
            ->setPreAdviceMessage($preAdviceMessage);
    }
    /**
     * Get preAdviceMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2|null
     */
    public function getPreAdviceMessage()
    {
        return isset($this->preAdviceMessage) ? $this->preAdviceMessage : null;
    }
    /**
     * Set preAdviceMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $preAdviceMessage
     * @return \Randock\PostNL\BulkMailApi\StructType\PreAdviceBulkMailOrderV2
     */
    public function setPreAdviceMessage(\Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $preAdviceMessage = null)
    {
        if (is_null($preAdviceMessage) || (is_array($preAdviceMessage) && empty($preAdviceMessage))) {
            unset($this->preAdviceMessage);
        } else {
            $this->preAdviceMessage = $preAdviceMessage;
        }
        return $this;
    }
}
