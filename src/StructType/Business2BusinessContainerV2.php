<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Business2BusinessContainerV2 StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Business2BusinessContainerV2
 * @subpackage Structs
 */
class Business2BusinessContainerV2 extends AbstractStructBase
{
    /**
     * The BulkMailOrders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBulkmailOrderType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBulkmailOrderType $BulkMailOrders = null;
    /**
     * The MessageHeader
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\MessageHeaderType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\MessageHeaderType $MessageHeader = null;
    /**
     * Constructor method for Business2BusinessContainerV2
     * @uses Business2BusinessContainerV2::setBulkMailOrders()
     * @uses Business2BusinessContainerV2::setMessageHeader()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBulkmailOrderType $bulkMailOrders
     * @param \Randock\PostNL\BulkMailApi\StructType\MessageHeaderType $messageHeader
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBulkmailOrderType $bulkMailOrders = null, ?\Randock\PostNL\BulkMailApi\StructType\MessageHeaderType $messageHeader = null)
    {
        $this
            ->setBulkMailOrders($bulkMailOrders)
            ->setMessageHeader($messageHeader);
    }
    /**
     * Get BulkMailOrders value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBulkmailOrderType|null
     */
    public function getBulkMailOrders(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBulkmailOrderType
    {
        return isset($this->BulkMailOrders) ? $this->BulkMailOrders : null;
    }
    /**
     * Set BulkMailOrders value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBulkmailOrderType $bulkMailOrders
     * @return \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2
     */
    public function setBulkMailOrders(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBulkmailOrderType $bulkMailOrders = null): self
    {
        if (is_null($bulkMailOrders) || (is_array($bulkMailOrders) && empty($bulkMailOrders))) {
            unset($this->BulkMailOrders);
        } else {
            $this->BulkMailOrders = $bulkMailOrders;
        }
        
        return $this;
    }
    /**
     * Get MessageHeader value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\MessageHeaderType|null
     */
    public function getMessageHeader(): ?\Randock\PostNL\BulkMailApi\StructType\MessageHeaderType
    {
        return isset($this->MessageHeader) ? $this->MessageHeader : null;
    }
    /**
     * Set MessageHeader value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\MessageHeaderType $messageHeader
     * @return \Randock\PostNL\BulkMailApi\StructType\Business2BusinessContainerV2
     */
    public function setMessageHeader(?\Randock\PostNL\BulkMailApi\StructType\MessageHeaderType $messageHeader = null): self
    {
        if (is_null($messageHeader) || (is_array($messageHeader) && empty($messageHeader))) {
            unset($this->MessageHeader);
        } else {
            $this->MessageHeader = $messageHeader;
        }
        
        return $this;
    }
}
