<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CountryCodeType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CountryCodeType
 * @subpackage Structs
 */
class CountryCodeType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Value;
    /**
     * The languageID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $languageID;
    /**
     * The listAgencyID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $listAgencyID;
    /**
     * The listAgencyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $listAgencyName;
    /**
     * The listID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $listID;
    /**
     * The listName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $listName;
    /**
     * The listSchemeURI
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $listSchemeURI;
    /**
     * The listURI
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $listURI;
    /**
     * The listVersionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $listVersionID;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * Constructor method for CountryCodeType
     * @uses CountryCodeType::setValue()
     * @uses CountryCodeType::setLanguageID()
     * @uses CountryCodeType::setListAgencyID()
     * @uses CountryCodeType::setListAgencyName()
     * @uses CountryCodeType::setListID()
     * @uses CountryCodeType::setListName()
     * @uses CountryCodeType::setListSchemeURI()
     * @uses CountryCodeType::setListURI()
     * @uses CountryCodeType::setListVersionID()
     * @uses CountryCodeType::setName()
     * @param string $value
     * @param string $languageID
     * @param string $listAgencyID
     * @param string $listAgencyName
     * @param string $listID
     * @param string $listName
     * @param string $listSchemeURI
     * @param string $listURI
     * @param string $listVersionID
     * @param string $name
     */
    public function __construct($value = null, $languageID = null, $listAgencyID = null, $listAgencyName = null, $listID = null, $listName = null, $listSchemeURI = null, $listURI = null, $listVersionID = null, $name = null)
    {
        $this
            ->setValue($value)
            ->setLanguageID($languageID)
            ->setListAgencyID($listAgencyID)
            ->setListAgencyName($listAgencyName)
            ->setListID($listID)
            ->setListName($listName)
            ->setListSchemeURI($listSchemeURI)
            ->setListURI($listURI)
            ->setListVersionID($listVersionID)
            ->setName($name);
    }
    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValue()
    {
        return isset($this->Value) ? $this->Value : null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $value
     * @return \Randock\PostNL\BulkMailApi\StructType\CountryCodeType
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        return $this;
    }
    /**
     * Get languageID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLanguageID()
    {
        return isset($this->languageID) ? $this->languageID : null;
    }
    /**
     * Set languageID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $languageID
     * @return \Randock\PostNL\BulkMailApi\StructType\CountryCodeType
     */
    public function setLanguageID($languageID = null)
    {
        // validation for constraint: string
        if (!is_null($languageID) && !is_string($languageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageID, true), gettype($languageID)), __LINE__);
        }
        if (is_null($languageID) || (is_array($languageID) && empty($languageID))) {
            unset($this->languageID);
        } else {
            $this->languageID = $languageID;
        }
        return $this;
    }
    /**
     * Get listAgencyID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getListAgencyID()
    {
        return isset($this->listAgencyID) ? $this->listAgencyID : null;
    }
    /**
     * Set listAgencyID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $listAgencyID
     * @return \Randock\PostNL\BulkMailApi\StructType\CountryCodeType
     */
    public function setListAgencyID($listAgencyID = null)
    {
        // validation for constraint: string
        if (!is_null($listAgencyID) && !is_string($listAgencyID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listAgencyID, true), gettype($listAgencyID)), __LINE__);
        }
        if (is_null($listAgencyID) || (is_array($listAgencyID) && empty($listAgencyID))) {
            unset($this->listAgencyID);
        } else {
            $this->listAgencyID = $listAgencyID;
        }
        return $this;
    }
    /**
     * Get listAgencyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getListAgencyName()
    {
        return isset($this->listAgencyName) ? $this->listAgencyName : null;
    }
    /**
     * Set listAgencyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $listAgencyName
     * @return \Randock\PostNL\BulkMailApi\StructType\CountryCodeType
     */
    public function setListAgencyName($listAgencyName = null)
    {
        // validation for constraint: string
        if (!is_null($listAgencyName) && !is_string($listAgencyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listAgencyName, true), gettype($listAgencyName)), __LINE__);
        }
        if (is_null($listAgencyName) || (is_array($listAgencyName) && empty($listAgencyName))) {
            unset($this->listAgencyName);
        } else {
            $this->listAgencyName = $listAgencyName;
        }
        return $this;
    }
    /**
     * Get listID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getListID()
    {
        return isset($this->listID) ? $this->listID : null;
    }
    /**
     * Set listID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $listID
     * @return \Randock\PostNL\BulkMailApi\StructType\CountryCodeType
     */
    public function setListID($listID = null)
    {
        // validation for constraint: string
        if (!is_null($listID) && !is_string($listID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listID, true), gettype($listID)), __LINE__);
        }
        if (is_null($listID) || (is_array($listID) && empty($listID))) {
            unset($this->listID);
        } else {
            $this->listID = $listID;
        }
        return $this;
    }
    /**
     * Get listName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getListName()
    {
        return isset($this->listName) ? $this->listName : null;
    }
    /**
     * Set listName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $listName
     * @return \Randock\PostNL\BulkMailApi\StructType\CountryCodeType
     */
    public function setListName($listName = null)
    {
        // validation for constraint: string
        if (!is_null($listName) && !is_string($listName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listName, true), gettype($listName)), __LINE__);
        }
        if (is_null($listName) || (is_array($listName) && empty($listName))) {
            unset($this->listName);
        } else {
            $this->listName = $listName;
        }
        return $this;
    }
    /**
     * Get listSchemeURI value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getListSchemeURI()
    {
        return isset($this->listSchemeURI) ? $this->listSchemeURI : null;
    }
    /**
     * Set listSchemeURI value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $listSchemeURI
     * @return \Randock\PostNL\BulkMailApi\StructType\CountryCodeType
     */
    public function setListSchemeURI($listSchemeURI = null)
    {
        // validation for constraint: string
        if (!is_null($listSchemeURI) && !is_string($listSchemeURI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listSchemeURI, true), gettype($listSchemeURI)), __LINE__);
        }
        if (is_null($listSchemeURI) || (is_array($listSchemeURI) && empty($listSchemeURI))) {
            unset($this->listSchemeURI);
        } else {
            $this->listSchemeURI = $listSchemeURI;
        }
        return $this;
    }
    /**
     * Get listURI value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getListURI()
    {
        return isset($this->listURI) ? $this->listURI : null;
    }
    /**
     * Set listURI value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $listURI
     * @return \Randock\PostNL\BulkMailApi\StructType\CountryCodeType
     */
    public function setListURI($listURI = null)
    {
        // validation for constraint: string
        if (!is_null($listURI) && !is_string($listURI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listURI, true), gettype($listURI)), __LINE__);
        }
        if (is_null($listURI) || (is_array($listURI) && empty($listURI))) {
            unset($this->listURI);
        } else {
            $this->listURI = $listURI;
        }
        return $this;
    }
    /**
     * Get listVersionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getListVersionID()
    {
        return isset($this->listVersionID) ? $this->listVersionID : null;
    }
    /**
     * Set listVersionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $listVersionID
     * @return \Randock\PostNL\BulkMailApi\StructType\CountryCodeType
     */
    public function setListVersionID($listVersionID = null)
    {
        // validation for constraint: string
        if (!is_null($listVersionID) && !is_string($listVersionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listVersionID, true), gettype($listVersionID)), __LINE__);
        }
        if (is_null($listVersionID) || (is_array($listVersionID) && empty($listVersionID))) {
            unset($this->listVersionID);
        } else {
            $this->listVersionID = $listVersionID;
        }
        return $this;
    }
    /**
     * Get name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : null;
    }
    /**
     * Set name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Randock\PostNL\BulkMailApi\StructType\CountryCodeType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->name);
        } else {
            $this->name = $name;
        }
        return $this;
    }
}
