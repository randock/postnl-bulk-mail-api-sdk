<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharacteristicType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CharacteristicType
 * @subpackage Structs
 */
class CharacteristicType extends AbstractStructBase
{
    /**
     * The CharacteristicName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1
     */
    public $CharacteristicName;
    /**
     * The CharacteristicValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1
     */
    public $CharacteristicValue;
    /**
     * Constructor method for CharacteristicType
     * @uses CharacteristicType::setCharacteristicName()
     * @uses CharacteristicType::setCharacteristicValue()
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $characteristicName
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $characteristicValue
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\NameType1 $characteristicName = null, \Randock\PostNL\BulkMailApi\StructType\TextType1 $characteristicValue = null)
    {
        $this
            ->setCharacteristicName($characteristicName)
            ->setCharacteristicValue($characteristicValue);
    }
    /**
     * Get CharacteristicName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function getCharacteristicName()
    {
        return isset($this->CharacteristicName) ? $this->CharacteristicName : null;
    }
    /**
     * Set CharacteristicName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $characteristicName
     * @return \Randock\PostNL\BulkMailApi\StructType\CharacteristicType
     */
    public function setCharacteristicName(\Randock\PostNL\BulkMailApi\StructType\NameType1 $characteristicName = null)
    {
        if (is_null($characteristicName) || (is_array($characteristicName) && empty($characteristicName))) {
            unset($this->CharacteristicName);
        } else {
            $this->CharacteristicName = $characteristicName;
        }
        return $this;
    }
    /**
     * Get CharacteristicValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getCharacteristicValue()
    {
        return isset($this->CharacteristicValue) ? $this->CharacteristicValue : null;
    }
    /**
     * Set CharacteristicValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $characteristicValue
     * @return \Randock\PostNL\BulkMailApi\StructType\CharacteristicType
     */
    public function setCharacteristicValue(\Randock\PostNL\BulkMailApi\StructType\TextType1 $characteristicValue = null)
    {
        if (is_null($characteristicValue) || (is_array($characteristicValue) && empty($characteristicValue))) {
            unset($this->CharacteristicValue);
        } else {
            $this->CharacteristicValue = $characteristicValue;
        }
        return $this;
    }
}
