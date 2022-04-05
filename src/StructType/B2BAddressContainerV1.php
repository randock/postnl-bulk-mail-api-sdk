<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for B2BAddressContainerV1 StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:B2BAddressContainerV1
 * @subpackage Structs
 */
class B2BAddressContainerV1 extends AbstractStructBase
{
    /**
     * The AddressAttachment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\AddressAttachmentType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\AddressAttachmentType $AddressAttachment = null;
    /**
     * The MessageHeader
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\MessageHeaderType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\MessageHeaderType $MessageHeader = null;
    /**
     * Constructor method for B2BAddressContainerV1
     * @uses B2BAddressContainerV1::setAddressAttachment()
     * @uses B2BAddressContainerV1::setMessageHeader()
     * @param \Randock\PostNL\BulkMailApi\StructType\AddressAttachmentType $addressAttachment
     * @param \Randock\PostNL\BulkMailApi\StructType\MessageHeaderType $messageHeader
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\AddressAttachmentType $addressAttachment = null, ?\Randock\PostNL\BulkMailApi\StructType\MessageHeaderType $messageHeader = null)
    {
        $this
            ->setAddressAttachment($addressAttachment)
            ->setMessageHeader($messageHeader);
    }
    /**
     * Get AddressAttachment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\AddressAttachmentType|null
     */
    public function getAddressAttachment(): ?\Randock\PostNL\BulkMailApi\StructType\AddressAttachmentType
    {
        return isset($this->AddressAttachment) ? $this->AddressAttachment : null;
    }
    /**
     * Set AddressAttachment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\AddressAttachmentType $addressAttachment
     * @return \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1
     */
    public function setAddressAttachment(?\Randock\PostNL\BulkMailApi\StructType\AddressAttachmentType $addressAttachment = null): self
    {
        if (is_null($addressAttachment) || (is_array($addressAttachment) && empty($addressAttachment))) {
            unset($this->AddressAttachment);
        } else {
            $this->AddressAttachment = $addressAttachment;
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
     * @return \Randock\PostNL\BulkMailApi\StructType\B2BAddressContainerV1
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
