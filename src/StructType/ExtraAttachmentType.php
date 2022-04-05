<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtraAttachmentType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ExtraAttachmentType
 * @subpackage Structs
 */
class ExtraAttachmentType extends AbstractStructBase
{
    /**
     * The Attachment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\OpenAttachmentType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\OpenAttachmentType $Attachment = null;
    /**
     * The AttachmentCharacteristics
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $AttachmentCharacteristics = null;
    /**
     * Constructor method for ExtraAttachmentType
     * @uses ExtraAttachmentType::setAttachment()
     * @uses ExtraAttachmentType::setAttachmentCharacteristics()
     * @param \Randock\PostNL\BulkMailApi\StructType\OpenAttachmentType $attachment
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $attachmentCharacteristics
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\OpenAttachmentType $attachment = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $attachmentCharacteristics = null)
    {
        $this
            ->setAttachment($attachment)
            ->setAttachmentCharacteristics($attachmentCharacteristics);
    }
    /**
     * Get Attachment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\OpenAttachmentType|null
     */
    public function getAttachment(): ?\Randock\PostNL\BulkMailApi\StructType\OpenAttachmentType
    {
        return isset($this->Attachment) ? $this->Attachment : null;
    }
    /**
     * Set Attachment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\OpenAttachmentType $attachment
     * @return \Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType
     */
    public function setAttachment(?\Randock\PostNL\BulkMailApi\StructType\OpenAttachmentType $attachment = null): self
    {
        if (is_null($attachment) || (is_array($attachment) && empty($attachment))) {
            unset($this->Attachment);
        } else {
            $this->Attachment = $attachment;
        }
        
        return $this;
    }
    /**
     * Get AttachmentCharacteristics value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType|null
     */
    public function getAttachmentCharacteristics(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType
    {
        return isset($this->AttachmentCharacteristics) ? $this->AttachmentCharacteristics : null;
    }
    /**
     * Set AttachmentCharacteristics value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $attachmentCharacteristics
     * @return \Randock\PostNL\BulkMailApi\StructType\ExtraAttachmentType
     */
    public function setAttachmentCharacteristics(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCharacteristicType $attachmentCharacteristics = null): self
    {
        if (is_null($attachmentCharacteristics) || (is_array($attachmentCharacteristics) && empty($attachmentCharacteristics))) {
            unset($this->AttachmentCharacteristics);
        } else {
            $this->AttachmentCharacteristics = $attachmentCharacteristics;
        }
        
        return $this;
    }
}
