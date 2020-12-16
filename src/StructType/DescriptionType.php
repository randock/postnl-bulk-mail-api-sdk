<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescriptionType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DescriptionType
 * @subpackage Structs
 */
class DescriptionType extends TextType
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $type;
    /**
     * Constructor method for DescriptionType
     * @uses DescriptionType::setType()
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $type = null)
    {
        $this
            ->setType($type);
    }
    /**
     * Get type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : null;
    }
    /**
     * Set type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type
     * @return \Randock\PostNL\BulkMailApi\StructType\DescriptionType
     */
    public function setType(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $type = null)
    {
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->type);
        } else {
            $this->type = $type;
        }
        return $this;
    }
}
