<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttachmentBaseType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AttachmentBaseType
 * @subpackage Structs
 */
class AttachmentBaseType extends AbstractStructBase
{
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
     * The EmbeddedData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\BinaryObjectType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\BinaryObjectType1 $EmbeddedData = null;
    /**
     * The FileName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $FileName = null;
    /**
     * The FileSizeQuantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\QuantityType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\QuantityType1 $FileSizeQuantity = null;
    /**
     * The FileType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1 $FileType = null;
    /**
     * The ISBN
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $ISBN = null;
    /**
     * The Note
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType $Note = null;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1 $Title = null;
    /**
     * The URI
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $URI = null;
    /**
     * The inline
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $inline = null;
    /**
     * Constructor method for AttachmentBaseType
     * @uses AttachmentBaseType::setDescription()
     * @uses AttachmentBaseType::setDocumentDateTime()
     * @uses AttachmentBaseType::setEmbeddedData()
     * @uses AttachmentBaseType::setFileName()
     * @uses AttachmentBaseType::setFileSizeQuantity()
     * @uses AttachmentBaseType::setFileType()
     * @uses AttachmentBaseType::setISBN()
     * @uses AttachmentBaseType::setNote()
     * @uses AttachmentBaseType::setTitle()
     * @uses AttachmentBaseType::setURI()
     * @uses AttachmentBaseType::setInline()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDescriptionType $description
     * @param string $documentDateTime
     * @param \Randock\PostNL\BulkMailApi\StructType\BinaryObjectType1 $embeddedData
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $fileName
     * @param \Randock\PostNL\BulkMailApi\StructType\QuantityType1 $fileSizeQuantity
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1 $fileType
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iSBN
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType $note
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1 $title
     * @param string $uRI
     * @param bool $inline
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDescriptionType $description = null, ?string $documentDateTime = null, ?\Randock\PostNL\BulkMailApi\StructType\BinaryObjectType1 $embeddedData = null, ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $fileName = null, ?\Randock\PostNL\BulkMailApi\StructType\QuantityType1 $fileSizeQuantity = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1 $fileType = null, ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iSBN = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType $note = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1 $title = null, ?string $uRI = null, ?bool $inline = null)
    {
        $this
            ->setDescription($description)
            ->setDocumentDateTime($documentDateTime)
            ->setEmbeddedData($embeddedData)
            ->setFileName($fileName)
            ->setFileSizeQuantity($fileSizeQuantity)
            ->setFileType($fileType)
            ->setISBN($iSBN)
            ->setNote($note)
            ->setTitle($title)
            ->setURI($uRI)
            ->setInline($inline);
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
     * @return \Randock\PostNL\BulkMailApi\StructType\AttachmentBaseType
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
     * @return \Randock\PostNL\BulkMailApi\StructType\AttachmentBaseType
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
     * Get EmbeddedData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\BinaryObjectType1|null
     */
    public function getEmbeddedData(): ?\Randock\PostNL\BulkMailApi\StructType\BinaryObjectType1
    {
        return isset($this->EmbeddedData) ? $this->EmbeddedData : null;
    }
    /**
     * Set EmbeddedData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\BinaryObjectType1 $embeddedData
     * @return \Randock\PostNL\BulkMailApi\StructType\AttachmentBaseType
     */
    public function setEmbeddedData(?\Randock\PostNL\BulkMailApi\StructType\BinaryObjectType1 $embeddedData = null): self
    {
        if (is_null($embeddedData) || (is_array($embeddedData) && empty($embeddedData))) {
            unset($this->EmbeddedData);
        } else {
            $this->EmbeddedData = $embeddedData;
        }
        
        return $this;
    }
    /**
     * Get FileName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function getFileName(): ?\Randock\PostNL\BulkMailApi\StructType\NameType1
    {
        return isset($this->FileName) ? $this->FileName : null;
    }
    /**
     * Set FileName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $fileName
     * @return \Randock\PostNL\BulkMailApi\StructType\AttachmentBaseType
     */
    public function setFileName(?\Randock\PostNL\BulkMailApi\StructType\NameType1 $fileName = null): self
    {
        if (is_null($fileName) || (is_array($fileName) && empty($fileName))) {
            unset($this->FileName);
        } else {
            $this->FileName = $fileName;
        }
        
        return $this;
    }
    /**
     * Get FileSizeQuantity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\QuantityType1|null
     */
    public function getFileSizeQuantity(): ?\Randock\PostNL\BulkMailApi\StructType\QuantityType1
    {
        return isset($this->FileSizeQuantity) ? $this->FileSizeQuantity : null;
    }
    /**
     * Set FileSizeQuantity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\QuantityType1 $fileSizeQuantity
     * @return \Randock\PostNL\BulkMailApi\StructType\AttachmentBaseType
     */
    public function setFileSizeQuantity(?\Randock\PostNL\BulkMailApi\StructType\QuantityType1 $fileSizeQuantity = null): self
    {
        if (is_null($fileSizeQuantity) || (is_array($fileSizeQuantity) && empty($fileSizeQuantity))) {
            unset($this->FileSizeQuantity);
        } else {
            $this->FileSizeQuantity = $fileSizeQuantity;
        }
        
        return $this;
    }
    /**
     * Get FileType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1|null
     */
    public function getFileType(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1
    {
        return isset($this->FileType) ? $this->FileType : null;
    }
    /**
     * Set FileType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1 $fileType
     * @return \Randock\PostNL\BulkMailApi\StructType\AttachmentBaseType
     */
    public function setFileType(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1 $fileType = null): self
    {
        if (is_null($fileType) || (is_array($fileType) && empty($fileType))) {
            unset($this->FileType);
        } else {
            $this->FileType = $fileType;
        }
        
        return $this;
    }
    /**
     * Get ISBN value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getISBN(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return isset($this->ISBN) ? $this->ISBN : null;
    }
    /**
     * Set ISBN value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iSBN
     * @return \Randock\PostNL\BulkMailApi\StructType\AttachmentBaseType
     */
    public function setISBN(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iSBN = null): self
    {
        if (is_null($iSBN) || (is_array($iSBN) && empty($iSBN))) {
            unset($this->ISBN);
        } else {
            $this->ISBN = $iSBN;
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
     * @return \Randock\PostNL\BulkMailApi\StructType\AttachmentBaseType
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
    /**
     * Get Title value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1|null
     */
    public function getTitle(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1
    {
        return isset($this->Title) ? $this->Title : null;
    }
    /**
     * Set Title value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1 $title
     * @return \Randock\PostNL\BulkMailApi\StructType\AttachmentBaseType
     */
    public function setTitle(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1 $title = null): self
    {
        if (is_null($title) || (is_array($title) && empty($title))) {
            unset($this->Title);
        } else {
            $this->Title = $title;
        }
        
        return $this;
    }
    /**
     * Get URI value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getURI(): ?string
    {
        return isset($this->URI) ? $this->URI : null;
    }
    /**
     * Set URI value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $uRI
     * @return \Randock\PostNL\BulkMailApi\StructType\AttachmentBaseType
     */
    public function setURI(?string $uRI = null): self
    {
        // validation for constraint: string
        if (!is_null($uRI) && !is_string($uRI)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRI, true), gettype($uRI)), __LINE__);
        }
        if (is_null($uRI) || (is_array($uRI) && empty($uRI))) {
            unset($this->URI);
        } else {
            $this->URI = $uRI;
        }
        
        return $this;
    }
    /**
     * Get inline value
     * @return bool|null
     */
    public function getInline(): ?bool
    {
        return $this->inline;
    }
    /**
     * Set inline value
     * @param bool $inline
     * @return \Randock\PostNL\BulkMailApi\StructType\AttachmentBaseType
     */
    public function setInline(?bool $inline = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inline) && !is_bool($inline)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inline, true), gettype($inline)), __LINE__);
        }
        $this->inline = $inline;
        
        return $this;
    }
}
