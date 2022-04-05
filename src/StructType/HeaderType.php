<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HeaderType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:HeaderType
 * @subpackage Structs
 */
class HeaderType extends AbstractStructBase
{
    /**
     * The AlternateDocumentID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDocumentIDType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDocumentIDType $AlternateDocumentID = null;
    /**
     * The Attachment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\OpenAttachmentType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\OpenAttachmentType $Attachment = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDescriptionType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDescriptionType $Description = null;
    /**
     * The DocumentDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DocumentDateTime = null;
    /**
     * The DocumentID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\DocumentIDType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\DocumentIDType $DocumentID = null;
    /**
     * The LastModificationDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $LastModificationDateTime = null;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType $Note = null;
    /**
     * Constructor method for HeaderType
     * @uses HeaderType::setAlternateDocumentID()
     * @uses HeaderType::setAttachment()
     * @uses HeaderType::setDescription()
     * @uses HeaderType::setDocumentDateTime()
     * @uses HeaderType::setDocumentID()
     * @uses HeaderType::setLastModificationDateTime()
     * @uses HeaderType::setNote()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDocumentIDType $alternateDocumentID
     * @param \Randock\PostNL\BulkMailApi\StructType\OpenAttachmentType $attachment
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDescriptionType $description
     * @param string $documentDateTime
     * @param \Randock\PostNL\BulkMailApi\StructType\DocumentIDType $documentID
     * @param string $lastModificationDateTime
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType $note
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDocumentIDType $alternateDocumentID = null, ?\Randock\PostNL\BulkMailApi\StructType\OpenAttachmentType $attachment = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDescriptionType $description = null, ?string $documentDateTime = null, ?\Randock\PostNL\BulkMailApi\StructType\DocumentIDType $documentID = null, ?string $lastModificationDateTime = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType $note = null)
    {
        $this
            ->setAlternateDocumentID($alternateDocumentID)
            ->setAttachment($attachment)
            ->setDescription($description)
            ->setDocumentDateTime($documentDateTime)
            ->setDocumentID($documentID)
            ->setLastModificationDateTime($lastModificationDateTime)
            ->setNote($note);
    }
    /**
     * Get AlternateDocumentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDocumentIDType|null
     */
    public function getAlternateDocumentID(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDocumentIDType
    {
        return isset($this->AlternateDocumentID) ? $this->AlternateDocumentID : null;
    }
    /**
     * Set AlternateDocumentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDocumentIDType $alternateDocumentID
     * @return \Randock\PostNL\BulkMailApi\StructType\HeaderType
     */
    public function setAlternateDocumentID(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDocumentIDType $alternateDocumentID = null): self
    {
        if (is_null($alternateDocumentID) || (is_array($alternateDocumentID) && empty($alternateDocumentID))) {
            unset($this->AlternateDocumentID);
        } else {
            $this->AlternateDocumentID = $alternateDocumentID;
        }
        
        return $this;
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
     * @return \Randock\PostNL\BulkMailApi\StructType\HeaderType
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
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDescriptionType|null
     */
    public function getDescription(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDescriptionType
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDescriptionType $description
     * @return \Randock\PostNL\BulkMailApi\StructType\HeaderType
     */
    public function setDescription(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDescriptionType $description = null): self
    {
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        
        return $this;
    }
    /**
     * Get DocumentDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentDateTime(): ?string
    {
        return isset($this->DocumentDateTime) ? $this->DocumentDateTime : null;
    }
    /**
     * Set DocumentDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $documentDateTime
     * @return \Randock\PostNL\BulkMailApi\StructType\HeaderType
     */
    public function setDocumentDateTime(?string $documentDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($documentDateTime) && !is_string($documentDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentDateTime, true), gettype($documentDateTime)), __LINE__);
        }
        if (is_null($documentDateTime) || (is_array($documentDateTime) && empty($documentDateTime))) {
            unset($this->DocumentDateTime);
        } else {
            $this->DocumentDateTime = $documentDateTime;
        }
        
        return $this;
    }
    /**
     * Get DocumentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\DocumentIDType|null
     */
    public function getDocumentID(): ?\Randock\PostNL\BulkMailApi\StructType\DocumentIDType
    {
        return isset($this->DocumentID) ? $this->DocumentID : null;
    }
    /**
     * Set DocumentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\DocumentIDType $documentID
     * @return \Randock\PostNL\BulkMailApi\StructType\HeaderType
     */
    public function setDocumentID(?\Randock\PostNL\BulkMailApi\StructType\DocumentIDType $documentID = null): self
    {
        if (is_null($documentID) || (is_array($documentID) && empty($documentID))) {
            unset($this->DocumentID);
        } else {
            $this->DocumentID = $documentID;
        }
        
        return $this;
    }
    /**
     * Get LastModificationDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastModificationDateTime(): ?string
    {
        return isset($this->LastModificationDateTime) ? $this->LastModificationDateTime : null;
    }
    /**
     * Set LastModificationDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastModificationDateTime
     * @return \Randock\PostNL\BulkMailApi\StructType\HeaderType
     */
    public function setLastModificationDateTime(?string $lastModificationDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastModificationDateTime) && !is_string($lastModificationDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModificationDateTime, true), gettype($lastModificationDateTime)), __LINE__);
        }
        if (is_null($lastModificationDateTime) || (is_array($lastModificationDateTime) && empty($lastModificationDateTime))) {
            unset($this->LastModificationDateTime);
        } else {
            $this->LastModificationDateTime = $lastModificationDateTime;
        }
        
        return $this;
    }
    /**
     * Get Note value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType|null
     */
    public function getNote(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType
    {
        return isset($this->Note) ? $this->Note : null;
    }
    /**
     * Set Note value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType $note
     * @return \Randock\PostNL\BulkMailApi\StructType\HeaderType
     */
    public function setNote(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType $note = null): self
    {
        if (is_null($note) || (is_array($note) && empty($note))) {
            unset($this->Note);
        } else {
            $this->Note = $note;
        }
        
        return $this;
    }
}
