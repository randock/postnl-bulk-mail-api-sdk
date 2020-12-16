<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NoteType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:NoteType
 * @subpackage Structs
 */
class NoteType extends DescriptionType
{
    /**
     * The author
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $author;
    /**
     * The entryDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $entryDateTime;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $status;
    /**
     * Constructor method for NoteType
     * @uses NoteType::setAuthor()
     * @uses NoteType::setEntryDateTime()
     * @uses NoteType::setStatus()
     * @param string $author
     * @param string $entryDateTime
     * @param string $status
     */
    public function __construct($author = null, $entryDateTime = null, $status = null)
    {
        $this
            ->setAuthor($author)
            ->setEntryDateTime($entryDateTime)
            ->setStatus($status);
    }
    /**
     * Get author value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAuthor()
    {
        return isset($this->author) ? $this->author : null;
    }
    /**
     * Set author value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $author
     * @return \Randock\PostNL\BulkMailApi\StructType\NoteType
     */
    public function setAuthor($author = null)
    {
        // validation for constraint: string
        if (!is_null($author) && !is_string($author)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($author, true), gettype($author)), __LINE__);
        }
        if (is_null($author) || (is_array($author) && empty($author))) {
            unset($this->author);
        } else {
            $this->author = $author;
        }
        return $this;
    }
    /**
     * Get entryDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEntryDateTime()
    {
        return isset($this->entryDateTime) ? $this->entryDateTime : null;
    }
    /**
     * Set entryDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $entryDateTime
     * @return \Randock\PostNL\BulkMailApi\StructType\NoteType
     */
    public function setEntryDateTime($entryDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($entryDateTime) && !is_string($entryDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryDateTime, true), gettype($entryDateTime)), __LINE__);
        }
        if (is_null($entryDateTime) || (is_array($entryDateTime) && empty($entryDateTime))) {
            unset($this->entryDateTime);
        } else {
            $this->entryDateTime = $entryDateTime;
        }
        return $this;
    }
    /**
     * Get status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : null;
    }
    /**
     * Set status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $status
     * @return \Randock\PostNL\BulkMailApi\StructType\NoteType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->status);
        } else {
            $this->status = $status;
        }
        return $this;
    }
}
