<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsignmentAdministrativeReferencesType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ConsignmentAdministrativeReferencesType
 * @subpackage Structs
 */
class ConsignmentAdministrativeReferencesType extends AbstractStructBase
{
    /**
     * The CharacteristicName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $CharacteristicName = null;
    /**
     * The CharacteristicValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\TextType1 $CharacteristicValue = null;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $ID = null;
    /**
     * Constructor method for ConsignmentAdministrativeReferencesType
     * @uses ConsignmentAdministrativeReferencesType::setCharacteristicName()
     * @uses ConsignmentAdministrativeReferencesType::setCharacteristicValue()
     * @uses ConsignmentAdministrativeReferencesType::setID()
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $characteristicName
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $characteristicValue
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\NameType1 $characteristicName = null, ?\Randock\PostNL\BulkMailApi\StructType\TextType1 $characteristicValue = null, ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD = null)
    {
        $this
            ->setCharacteristicName($characteristicName)
            ->setCharacteristicValue($characteristicValue)
            ->setID($iD);
    }
    /**
     * Get CharacteristicName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function getCharacteristicName(): ?\Randock\PostNL\BulkMailApi\StructType\NameType1
    {
        return isset($this->CharacteristicName) ? $this->CharacteristicName : null;
    }
    /**
     * Set CharacteristicName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $characteristicName
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType
     */
    public function setCharacteristicName(?\Randock\PostNL\BulkMailApi\StructType\NameType1 $characteristicName = null): self
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
    public function getCharacteristicValue(): ?\Randock\PostNL\BulkMailApi\StructType\TextType1
    {
        return isset($this->CharacteristicValue) ? $this->CharacteristicValue : null;
    }
    /**
     * Set CharacteristicValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $characteristicValue
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType
     */
    public function setCharacteristicValue(?\Randock\PostNL\BulkMailApi\StructType\TextType1 $characteristicValue = null): self
    {
        if (is_null($characteristicValue) || (is_array($characteristicValue) && empty($characteristicValue))) {
            unset($this->CharacteristicValue);
        } else {
            $this->CharacteristicValue = $characteristicValue;
        }
        
        return $this;
    }
    /**
     * Get ID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getID(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return isset($this->ID) ? $this->ID : null;
    }
    /**
     * Set ID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentAdministrativeReferencesType
     */
    public function setID(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $iD = null): self
    {
        if (is_null($iD) || (is_array($iD) && empty($iD))) {
            unset($this->ID);
        } else {
            $this->ID = $iD;
        }
        
        return $this;
    }
}
