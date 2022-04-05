<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpenAttachmentType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OpenAttachmentType
 * @subpackage Structs
 */
class OpenAttachmentType extends SemanticAttachmentType
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $Type = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for OpenAttachmentType
     * @uses OpenAttachmentType::setType()
     * @uses OpenAttachmentType::setType_1()
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type
     * @param string $type
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $type = null, ?string $type_1 = null)
    {
        $this
            ->setType($type)
            ->setType_1($type_1);
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getType(): ?\Randock\PostNL\BulkMailApi\StructType\CodeType1
    {
        return isset($this->Type) ? $this->Type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type
     * @return \Randock\PostNL\BulkMailApi\StructType\OpenAttachmentType
     */
    public function setType(?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $type = null): self
    {
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }
        
        return $this;
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getType_1(): ?string
    {
        return isset($this->type) ? $this->type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type
     * @return \Randock\PostNL\BulkMailApi\StructType\OpenAttachmentType
     */
    public function setType_1(?string $type_1 = null): self
    {
        // validation for constraint: string
        if (!is_null($type_1) && !is_string($type_1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type_1, true), gettype($type_1)), __LINE__);
        }
        if (is_null($type_1) || (is_array($type_1) && empty($type_1))) {
            unset($this->type);
        } else {
            $this->type = $type_1;
        }
        
        return $this;
    }
}
