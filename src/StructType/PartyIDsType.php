<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PartyIDsType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PartyIDsType
 * @subpackage Structs
 */
class PartyIDsType extends AbstractStructBase
{
    /**
     * The AlternateID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1
     */
    public $AlternateID;
    /**
     * The BICID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $BICID;
    /**
     * The CAGEID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $CAGEID;
    /**
     * The ChamberOfCommerceID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $ChamberOfCommerceID;
    /**
     * The DODAACID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $DODAACID;
    /**
     * The DUNSID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $DUNSID;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1
     */
    public $ID;
    /**
     * The SCACID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1
     */
    public $SCACID;
    /**
     * The TaxID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1
     */
    public $TaxID;
    /**
     * Constructor method for PartyIDsType
     * @uses PartyIDsType::setAlternateID()
     * @uses PartyIDsType::setBICID()
     * @uses PartyIDsType::setCAGEID()
     * @uses PartyIDsType::setChamberOfCommerceID()
     * @uses PartyIDsType::setDODAACID()
     * @uses PartyIDsType::setDUNSID()
     * @uses PartyIDsType::setID()
     * @uses PartyIDsType::setSCACID()
     * @uses PartyIDsType::setTaxID()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $alternateID
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $bICID
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $cAGEID
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $chamberOfCommerceID
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $dODAACID
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $dUNSID
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $iD
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $sCACID
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $taxID
     */
    public function __construct(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $alternateID = null, \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $bICID = null, \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $cAGEID = null, \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $chamberOfCommerceID = null, \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $dODAACID = null, \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $dUNSID = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $iD = null, \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $sCACID = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $taxID = null)
    {
        $this
            ->setAlternateID($alternateID)
            ->setBICID($bICID)
            ->setCAGEID($cAGEID)
            ->setChamberOfCommerceID($chamberOfCommerceID)
            ->setDODAACID($dODAACID)
            ->setDUNSID($dUNSID)
            ->setID($iD)
            ->setSCACID($sCACID)
            ->setTaxID($taxID);
    }
    /**
     * Get AlternateID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1|null
     */
    public function getAlternateID()
    {
        return isset($this->AlternateID) ? $this->AlternateID : null;
    }
    /**
     * Set AlternateID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $alternateID
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyIDsType
     */
    public function setAlternateID(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $alternateID = null)
    {
        if (is_null($alternateID) || (is_array($alternateID) && empty($alternateID))) {
            unset($this->AlternateID);
        } else {
            $this->AlternateID = $alternateID;
        }
        return $this;
    }
    /**
     * Get BICID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getBICID()
    {
        return isset($this->BICID) ? $this->BICID : null;
    }
    /**
     * Set BICID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $bICID
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyIDsType
     */
    public function setBICID(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $bICID = null)
    {
        if (is_null($bICID) || (is_array($bICID) && empty($bICID))) {
            unset($this->BICID);
        } else {
            $this->BICID = $bICID;
        }
        return $this;
    }
    /**
     * Get CAGEID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getCAGEID()
    {
        return isset($this->CAGEID) ? $this->CAGEID : null;
    }
    /**
     * Set CAGEID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $cAGEID
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyIDsType
     */
    public function setCAGEID(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $cAGEID = null)
    {
        if (is_null($cAGEID) || (is_array($cAGEID) && empty($cAGEID))) {
            unset($this->CAGEID);
        } else {
            $this->CAGEID = $cAGEID;
        }
        return $this;
    }
    /**
     * Get ChamberOfCommerceID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getChamberOfCommerceID()
    {
        return isset($this->ChamberOfCommerceID) ? $this->ChamberOfCommerceID : null;
    }
    /**
     * Set ChamberOfCommerceID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $chamberOfCommerceID
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyIDsType
     */
    public function setChamberOfCommerceID(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $chamberOfCommerceID = null)
    {
        if (is_null($chamberOfCommerceID) || (is_array($chamberOfCommerceID) && empty($chamberOfCommerceID))) {
            unset($this->ChamberOfCommerceID);
        } else {
            $this->ChamberOfCommerceID = $chamberOfCommerceID;
        }
        return $this;
    }
    /**
     * Get DODAACID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getDODAACID()
    {
        return isset($this->DODAACID) ? $this->DODAACID : null;
    }
    /**
     * Set DODAACID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $dODAACID
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyIDsType
     */
    public function setDODAACID(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $dODAACID = null)
    {
        if (is_null($dODAACID) || (is_array($dODAACID) && empty($dODAACID))) {
            unset($this->DODAACID);
        } else {
            $this->DODAACID = $dODAACID;
        }
        return $this;
    }
    /**
     * Get DUNSID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getDUNSID()
    {
        return isset($this->DUNSID) ? $this->DUNSID : null;
    }
    /**
     * Set DUNSID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $dUNSID
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyIDsType
     */
    public function setDUNSID(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $dUNSID = null)
    {
        if (is_null($dUNSID) || (is_array($dUNSID) && empty($dUNSID))) {
            unset($this->DUNSID);
        } else {
            $this->DUNSID = $dUNSID;
        }
        return $this;
    }
    /**
     * Get ID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1|null
     */
    public function getID()
    {
        return isset($this->ID) ? $this->ID : null;
    }
    /**
     * Set ID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $iD
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyIDsType
     */
    public function setID(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $iD = null)
    {
        if (is_null($iD) || (is_array($iD) && empty($iD))) {
            unset($this->ID);
        } else {
            $this->ID = $iD;
        }
        return $this;
    }
    /**
     * Get SCACID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getSCACID()
    {
        return isset($this->SCACID) ? $this->SCACID : null;
    }
    /**
     * Set SCACID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $sCACID
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyIDsType
     */
    public function setSCACID(\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $sCACID = null)
    {
        if (is_null($sCACID) || (is_array($sCACID) && empty($sCACID))) {
            unset($this->SCACID);
        } else {
            $this->SCACID = $sCACID;
        }
        return $this;
    }
    /**
     * Get TaxID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1|null
     */
    public function getTaxID()
    {
        return isset($this->TaxID) ? $this->TaxID : null;
    }
    /**
     * Set TaxID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $taxID
     * @return \Randock\PostNL\BulkMailApi\StructType\PartyIDsType
     */
    public function setTaxID(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $taxID = null)
    {
        if (is_null($taxID) || (is_array($taxID) && empty($taxID))) {
            unset($this->TaxID);
        } else {
            $this->TaxID = $taxID;
        }
        return $this;
    }
}
