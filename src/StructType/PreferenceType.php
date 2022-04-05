<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreferenceType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PreferenceType
 * @subpackage Structs
 */
class PreferenceType extends PreferenceABIEType
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
     * The Note
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType $Note = null;
    /**
     * The UserArea
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\UserAreaType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\UserAreaType $UserArea = null;
    /**
     * Constructor method for PreferenceType
     * @uses PreferenceType::setDescription()
     * @uses PreferenceType::setNote()
     * @uses PreferenceType::setUserArea()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDescriptionType $description
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType $note
     * @param \Randock\PostNL\BulkMailApi\StructType\UserAreaType $userArea
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfDescriptionType $description = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNoteType $note = null, ?\Randock\PostNL\BulkMailApi\StructType\UserAreaType $userArea = null)
    {
        $this
            ->setDescription($description)
            ->setNote($note)
            ->setUserArea($userArea);
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
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferenceType
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
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferenceType
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
     * Get UserArea value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\UserAreaType|null
     */
    public function getUserArea(): ?\Randock\PostNL\BulkMailApi\StructType\UserAreaType
    {
        return isset($this->UserArea) ? $this->UserArea : null;
    }
    /**
     * Set UserArea value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\UserAreaType $userArea
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferenceType
     */
    public function setUserArea(?\Randock\PostNL\BulkMailApi\StructType\UserAreaType $userArea = null): self
    {
        if (is_null($userArea) || (is_array($userArea) && empty($userArea))) {
            unset($this->UserArea);
        } else {
            $this->UserArea = $userArea;
        }
        
        return $this;
    }
}
