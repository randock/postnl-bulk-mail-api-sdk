<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TenderBulkMailOrderV2 StructType
 * @subpackage Structs
 */
class TenderBulkMailOrderV2 extends AbstractStructBase
{
    /**
     * The tenderMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $tenderMessage = null;
    /**
     * Constructor method for TenderBulkMailOrderV2
     * @uses TenderBulkMailOrderV2::setTenderMessage()
     * @param \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $tenderMessage
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $tenderMessage = null)
    {
        $this
            ->setTenderMessage($tenderMessage);
    }
    /**
     * Get tenderMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2|null
     */
    public function getTenderMessage(): ?\Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2
    {
        return isset($this->tenderMessage) ? $this->tenderMessage : null;
    }
    /**
     * Set tenderMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $tenderMessage
     * @return \Randock\PostNL\BulkMailApi\StructType\TenderBulkMailOrderV2
     */
    public function setTenderMessage(?\Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2 $tenderMessage = null): self
    {
        if (is_null($tenderMessage) || (is_array($tenderMessage) && empty($tenderMessage))) {
            unset($this->tenderMessage);
        } else {
            $this->tenderMessage = $tenderMessage;
        }
        
        return $this;
    }
}
