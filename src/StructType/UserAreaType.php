<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserAreaType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UserAreaType
 * @subpackage Structs
 */
class UserAreaType extends AbstractStructBase
{
    /**
     * The Any
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfXmlElement
     */
    public $Any;
    /**
     * Constructor method for UserAreaType
     * @uses UserAreaType::setAny()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfXmlElement $any
     */
    public function __construct(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfXmlElement $any = null)
    {
        $this
            ->setAny($any);
    }
    /**
     * Get Any value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfXmlElement|null
     */
    public function getAny()
    {
        return isset($this->Any) ? $this->Any : null;
    }
    /**
     * Set Any value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfXmlElement $any
     * @return \Randock\PostNL\BulkMailApi\StructType\UserAreaType
     */
    public function setAny(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfXmlElement $any = null)
    {
        if (is_null($any) || (is_array($any) && empty($any))) {
            unset($this->Any);
        } else {
            $this->Any = $any;
        }
        return $this;
    }
}
