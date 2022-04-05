<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SemanticAttachmentType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SemanticAttachmentType
 * @subpackage Structs
 */
class SemanticAttachmentType extends AttachmentBaseType
{
    /**
     * The UserArea
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\UserAreaType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\UserAreaType $UserArea = null;
    /**
     * Constructor method for SemanticAttachmentType
     * @uses SemanticAttachmentType::setUserArea()
     * @param \Randock\PostNL\BulkMailApi\StructType\UserAreaType $userArea
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\UserAreaType $userArea = null)
    {
        $this
            ->setUserArea($userArea);
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
     * @return \Randock\PostNL\BulkMailApi\StructType\SemanticAttachmentType
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
