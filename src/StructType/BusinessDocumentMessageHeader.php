<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessDocumentMessageHeader StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BusinessDocumentMessageHeader
 * @subpackage Structs
 */
class BusinessDocumentMessageHeader extends AbstractStructBase
{
    /**
     * The BusinessScope
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessScope
     */
    public $BusinessScope;
    /**
     * The CreationDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreationDateTime;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageID
     */
    public $ID;
    /**
     * The RecipientBusinessSystemID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RecipientBusinessSystemID;
    /**
     * The RecipientParty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessDocumentMessageHeaderParty
     */
    public $RecipientParty;
    /**
     * The ReconciliationIndicator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReconciliationIndicator;
    /**
     * The ReferenceID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageID
     */
    public $ReferenceID;
    /**
     * The ReferenceUUID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\UUID
     */
    public $ReferenceUUID;
    /**
     * The SenderBusinessSystemID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SenderBusinessSystemID;
    /**
     * The SenderParty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty
     */
    public $SenderParty;
    /**
     * The TestDataIndicator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $TestDataIndicator;
    /**
     * The UUID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\UUID
     */
    public $UUID;
    /**
     * Constructor method for BusinessDocumentMessageHeader
     * @uses BusinessDocumentMessageHeader::setBusinessScope()
     * @uses BusinessDocumentMessageHeader::setCreationDateTime()
     * @uses BusinessDocumentMessageHeader::setID()
     * @uses BusinessDocumentMessageHeader::setRecipientBusinessSystemID()
     * @uses BusinessDocumentMessageHeader::setRecipientParty()
     * @uses BusinessDocumentMessageHeader::setReconciliationIndicator()
     * @uses BusinessDocumentMessageHeader::setReferenceID()
     * @uses BusinessDocumentMessageHeader::setReferenceUUID()
     * @uses BusinessDocumentMessageHeader::setSenderBusinessSystemID()
     * @uses BusinessDocumentMessageHeader::setSenderParty()
     * @uses BusinessDocumentMessageHeader::setTestDataIndicator()
     * @uses BusinessDocumentMessageHeader::setUUID()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessScope $businessScope
     * @param string $creationDateTime
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageID $iD
     * @param string $recipientBusinessSystemID
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessDocumentMessageHeaderParty $recipientParty
     * @param bool $reconciliationIndicator
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageID $referenceID
     * @param \Randock\PostNL\BulkMailApi\StructType\UUID $referenceUUID
     * @param string $senderBusinessSystemID
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty $senderParty
     * @param bool $testDataIndicator
     * @param \Randock\PostNL\BulkMailApi\StructType\UUID $uUID
     */
    public function __construct(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessScope $businessScope = null, $creationDateTime = null, \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageID $iD = null, $recipientBusinessSystemID = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessDocumentMessageHeaderParty $recipientParty = null, $reconciliationIndicator = null, \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageID $referenceID = null, \Randock\PostNL\BulkMailApi\StructType\UUID $referenceUUID = null, $senderBusinessSystemID = null, \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty $senderParty = null, $testDataIndicator = null, \Randock\PostNL\BulkMailApi\StructType\UUID $uUID = null)
    {
        $this
            ->setBusinessScope($businessScope)
            ->setCreationDateTime($creationDateTime)
            ->setID($iD)
            ->setRecipientBusinessSystemID($recipientBusinessSystemID)
            ->setRecipientParty($recipientParty)
            ->setReconciliationIndicator($reconciliationIndicator)
            ->setReferenceID($referenceID)
            ->setReferenceUUID($referenceUUID)
            ->setSenderBusinessSystemID($senderBusinessSystemID)
            ->setSenderParty($senderParty)
            ->setTestDataIndicator($testDataIndicator)
            ->setUUID($uUID);
    }
    /**
     * Get BusinessScope value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessScope|null
     */
    public function getBusinessScope()
    {
        return isset($this->BusinessScope) ? $this->BusinessScope : null;
    }
    /**
     * Set BusinessScope value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessScope $businessScope
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeader
     */
    public function setBusinessScope(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessScope $businessScope = null)
    {
        if (is_null($businessScope) || (is_array($businessScope) && empty($businessScope))) {
            unset($this->BusinessScope);
        } else {
            $this->BusinessScope = $businessScope;
        }
        return $this;
    }
    /**
     * Get CreationDateTime value
     * @return string|null
     */
    public function getCreationDateTime()
    {
        return $this->CreationDateTime;
    }
    /**
     * Set CreationDateTime value
     * @param string $creationDateTime
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeader
     */
    public function setCreationDateTime($creationDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($creationDateTime) && !is_string($creationDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateTime, true), gettype($creationDateTime)), __LINE__);
        }
        $this->CreationDateTime = $creationDateTime;
        return $this;
    }
    /**
     * Get ID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageID|null
     */
    public function getID()
    {
        return isset($this->ID) ? $this->ID : null;
    }
    /**
     * Set ID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageID $iD
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeader
     */
    public function setID(\Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageID $iD = null)
    {
        if (is_null($iD) || (is_array($iD) && empty($iD))) {
            unset($this->ID);
        } else {
            $this->ID = $iD;
        }
        return $this;
    }
    /**
     * Get RecipientBusinessSystemID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecipientBusinessSystemID()
    {
        return isset($this->RecipientBusinessSystemID) ? $this->RecipientBusinessSystemID : null;
    }
    /**
     * Set RecipientBusinessSystemID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recipientBusinessSystemID
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeader
     */
    public function setRecipientBusinessSystemID($recipientBusinessSystemID = null)
    {
        // validation for constraint: string
        if (!is_null($recipientBusinessSystemID) && !is_string($recipientBusinessSystemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientBusinessSystemID, true), gettype($recipientBusinessSystemID)), __LINE__);
        }
        if (is_null($recipientBusinessSystemID) || (is_array($recipientBusinessSystemID) && empty($recipientBusinessSystemID))) {
            unset($this->RecipientBusinessSystemID);
        } else {
            $this->RecipientBusinessSystemID = $recipientBusinessSystemID;
        }
        return $this;
    }
    /**
     * Get RecipientParty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessDocumentMessageHeaderParty|null
     */
    public function getRecipientParty()
    {
        return isset($this->RecipientParty) ? $this->RecipientParty : null;
    }
    /**
     * Set RecipientParty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessDocumentMessageHeaderParty $recipientParty
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeader
     */
    public function setRecipientParty(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfBusinessDocumentMessageHeaderParty $recipientParty = null)
    {
        if (is_null($recipientParty) || (is_array($recipientParty) && empty($recipientParty))) {
            unset($this->RecipientParty);
        } else {
            $this->RecipientParty = $recipientParty;
        }
        return $this;
    }
    /**
     * Get ReconciliationIndicator value
     * @return bool|null
     */
    public function getReconciliationIndicator()
    {
        return $this->ReconciliationIndicator;
    }
    /**
     * Set ReconciliationIndicator value
     * @param bool $reconciliationIndicator
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeader
     */
    public function setReconciliationIndicator($reconciliationIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($reconciliationIndicator) && !is_bool($reconciliationIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reconciliationIndicator, true), gettype($reconciliationIndicator)), __LINE__);
        }
        $this->ReconciliationIndicator = $reconciliationIndicator;
        return $this;
    }
    /**
     * Get ReferenceID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageID|null
     */
    public function getReferenceID()
    {
        return isset($this->ReferenceID) ? $this->ReferenceID : null;
    }
    /**
     * Set ReferenceID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageID $referenceID
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeader
     */
    public function setReferenceID(\Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageID $referenceID = null)
    {
        if (is_null($referenceID) || (is_array($referenceID) && empty($referenceID))) {
            unset($this->ReferenceID);
        } else {
            $this->ReferenceID = $referenceID;
        }
        return $this;
    }
    /**
     * Get ReferenceUUID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\UUID|null
     */
    public function getReferenceUUID()
    {
        return isset($this->ReferenceUUID) ? $this->ReferenceUUID : null;
    }
    /**
     * Set ReferenceUUID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\UUID $referenceUUID
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeader
     */
    public function setReferenceUUID(\Randock\PostNL\BulkMailApi\StructType\UUID $referenceUUID = null)
    {
        if (is_null($referenceUUID) || (is_array($referenceUUID) && empty($referenceUUID))) {
            unset($this->ReferenceUUID);
        } else {
            $this->ReferenceUUID = $referenceUUID;
        }
        return $this;
    }
    /**
     * Get SenderBusinessSystemID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSenderBusinessSystemID()
    {
        return isset($this->SenderBusinessSystemID) ? $this->SenderBusinessSystemID : null;
    }
    /**
     * Set SenderBusinessSystemID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $senderBusinessSystemID
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeader
     */
    public function setSenderBusinessSystemID($senderBusinessSystemID = null)
    {
        // validation for constraint: string
        if (!is_null($senderBusinessSystemID) && !is_string($senderBusinessSystemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderBusinessSystemID, true), gettype($senderBusinessSystemID)), __LINE__);
        }
        if (is_null($senderBusinessSystemID) || (is_array($senderBusinessSystemID) && empty($senderBusinessSystemID))) {
            unset($this->SenderBusinessSystemID);
        } else {
            $this->SenderBusinessSystemID = $senderBusinessSystemID;
        }
        return $this;
    }
    /**
     * Get SenderParty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty|null
     */
    public function getSenderParty()
    {
        return isset($this->SenderParty) ? $this->SenderParty : null;
    }
    /**
     * Set SenderParty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty $senderParty
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeader
     */
    public function setSenderParty(\Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderParty $senderParty = null)
    {
        if (is_null($senderParty) || (is_array($senderParty) && empty($senderParty))) {
            unset($this->SenderParty);
        } else {
            $this->SenderParty = $senderParty;
        }
        return $this;
    }
    /**
     * Get TestDataIndicator value
     * @return bool|null
     */
    public function getTestDataIndicator()
    {
        return $this->TestDataIndicator;
    }
    /**
     * Set TestDataIndicator value
     * @param bool $testDataIndicator
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeader
     */
    public function setTestDataIndicator($testDataIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($testDataIndicator) && !is_bool($testDataIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($testDataIndicator, true), gettype($testDataIndicator)), __LINE__);
        }
        $this->TestDataIndicator = $testDataIndicator;
        return $this;
    }
    /**
     * Get UUID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\UUID|null
     */
    public function getUUID()
    {
        return isset($this->UUID) ? $this->UUID : null;
    }
    /**
     * Set UUID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\UUID $uUID
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeader
     */
    public function setUUID(\Randock\PostNL\BulkMailApi\StructType\UUID $uUID = null)
    {
        if (is_null($uUID) || (is_array($uUID) && empty($uUID))) {
            unset($this->UUID);
        } else {
            $this->UUID = $uUID;
        }
        return $this;
    }
}
