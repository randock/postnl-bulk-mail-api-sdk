<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameType1 StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:NameType1
 * @subpackage Structs
 */
class NameType1 extends NameType
{
    /**
     * The sequence
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sequence;
    /**
     * The sequenceName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sequenceName;
    /**
     * Constructor method for NameType1
     * @uses NameType1::setSequence()
     * @uses NameType1::setSequenceName()
     * @param string $sequence
     * @param string $sequenceName
     */
    public function __construct($sequence = null, $sequenceName = null)
    {
        $this
            ->setSequence($sequence)
            ->setSequenceName($sequenceName);
    }
    /**
     * Get sequence value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSequence()
    {
        return isset($this->sequence) ? $this->sequence : null;
    }
    /**
     * Set sequence value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sequence
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1
     */
    public function setSequence($sequence = null)
    {
        // validation for constraint: string
        if (!is_null($sequence) && !is_string($sequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sequence, true), gettype($sequence)), __LINE__);
        }
        if (is_null($sequence) || (is_array($sequence) && empty($sequence))) {
            unset($this->sequence);
        } else {
            $this->sequence = $sequence;
        }
        return $this;
    }
    /**
     * Get sequenceName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSequenceName()
    {
        return isset($this->sequenceName) ? $this->sequenceName : null;
    }
    /**
     * Set sequenceName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sequenceName
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1
     */
    public function setSequenceName($sequenceName = null)
    {
        // validation for constraint: string
        if (!is_null($sequenceName) && !is_string($sequenceName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sequenceName, true), gettype($sequenceName)), __LINE__);
        }
        if (is_null($sequenceName) || (is_array($sequenceName) && empty($sequenceName))) {
            unset($this->sequenceName);
        } else {
            $this->sequenceName = $sequenceName;
        }
        return $this;
    }
}
