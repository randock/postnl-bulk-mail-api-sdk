<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessDocumentMessageHeaderPartyContactPerson StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BusinessDocumentMessageHeaderPartyContactPerson
 * @subpackage Structs
 */
class BusinessDocumentMessageHeaderPartyContactPerson extends AbstractStructBase
{
    /**
     * The EmailURI
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfEmailURI
     */
    public $EmailURI;
    /**
     * The FaxNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPhoneNumber
     */
    public $FaxNumber;
    /**
     * The InternalID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ContactPersonInternalID
     */
    public $InternalID;
    /**
     * The OrganisationFormattedName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfstring
     */
    public $OrganisationFormattedName;
    /**
     * The PersonFormattedName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfstring
     */
    public $PersonFormattedName;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPhoneNumber
     */
    public $PhoneNumber;
    /**
     * Constructor method for BusinessDocumentMessageHeaderPartyContactPerson
     * @uses BusinessDocumentMessageHeaderPartyContactPerson::setEmailURI()
     * @uses BusinessDocumentMessageHeaderPartyContactPerson::setFaxNumber()
     * @uses BusinessDocumentMessageHeaderPartyContactPerson::setInternalID()
     * @uses BusinessDocumentMessageHeaderPartyContactPerson::setOrganisationFormattedName()
     * @uses BusinessDocumentMessageHeaderPartyContactPerson::setPersonFormattedName()
     * @uses BusinessDocumentMessageHeaderPartyContactPerson::setPhoneNumber()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfEmailURI $emailURI
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPhoneNumber $faxNumber
     * @param \Randock\PostNL\BulkMailApi\StructType\ContactPersonInternalID $internalID
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfstring $organisationFormattedName
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfstring $personFormattedName
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPhoneNumber $phoneNumber
     */
    public function __construct(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfEmailURI $emailURI = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPhoneNumber $faxNumber = null, \Randock\PostNL\BulkMailApi\StructType\ContactPersonInternalID $internalID = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfstring $organisationFormattedName = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfstring $personFormattedName = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPhoneNumber $phoneNumber = null)
    {
        $this
            ->setEmailURI($emailURI)
            ->setFaxNumber($faxNumber)
            ->setInternalID($internalID)
            ->setOrganisationFormattedName($organisationFormattedName)
            ->setPersonFormattedName($personFormattedName)
            ->setPhoneNumber($phoneNumber);
    }
    /**
     * Get EmailURI value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfEmailURI|null
     */
    public function getEmailURI()
    {
        return isset($this->EmailURI) ? $this->EmailURI : null;
    }
    /**
     * Set EmailURI value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfEmailURI $emailURI
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderPartyContactPerson
     */
    public function setEmailURI(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfEmailURI $emailURI = null)
    {
        if (is_null($emailURI) || (is_array($emailURI) && empty($emailURI))) {
            unset($this->EmailURI);
        } else {
            $this->EmailURI = $emailURI;
        }
        return $this;
    }
    /**
     * Get FaxNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPhoneNumber|null
     */
    public function getFaxNumber()
    {
        return isset($this->FaxNumber) ? $this->FaxNumber : null;
    }
    /**
     * Set FaxNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPhoneNumber $faxNumber
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderPartyContactPerson
     */
    public function setFaxNumber(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPhoneNumber $faxNumber = null)
    {
        if (is_null($faxNumber) || (is_array($faxNumber) && empty($faxNumber))) {
            unset($this->FaxNumber);
        } else {
            $this->FaxNumber = $faxNumber;
        }
        return $this;
    }
    /**
     * Get InternalID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactPersonInternalID|null
     */
    public function getInternalID()
    {
        return isset($this->InternalID) ? $this->InternalID : null;
    }
    /**
     * Set InternalID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\ContactPersonInternalID $internalID
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderPartyContactPerson
     */
    public function setInternalID(\Randock\PostNL\BulkMailApi\StructType\ContactPersonInternalID $internalID = null)
    {
        if (is_null($internalID) || (is_array($internalID) && empty($internalID))) {
            unset($this->InternalID);
        } else {
            $this->InternalID = $internalID;
        }
        return $this;
    }
    /**
     * Get OrganisationFormattedName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfstring|null
     */
    public function getOrganisationFormattedName()
    {
        return isset($this->OrganisationFormattedName) ? $this->OrganisationFormattedName : null;
    }
    /**
     * Set OrganisationFormattedName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfstring $organisationFormattedName
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderPartyContactPerson
     */
    public function setOrganisationFormattedName(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfstring $organisationFormattedName = null)
    {
        if (is_null($organisationFormattedName) || (is_array($organisationFormattedName) && empty($organisationFormattedName))) {
            unset($this->OrganisationFormattedName);
        } else {
            $this->OrganisationFormattedName = $organisationFormattedName;
        }
        return $this;
    }
    /**
     * Get PersonFormattedName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfstring|null
     */
    public function getPersonFormattedName()
    {
        return isset($this->PersonFormattedName) ? $this->PersonFormattedName : null;
    }
    /**
     * Set PersonFormattedName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfstring $personFormattedName
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderPartyContactPerson
     */
    public function setPersonFormattedName(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfstring $personFormattedName = null)
    {
        if (is_null($personFormattedName) || (is_array($personFormattedName) && empty($personFormattedName))) {
            unset($this->PersonFormattedName);
        } else {
            $this->PersonFormattedName = $personFormattedName;
        }
        return $this;
    }
    /**
     * Get PhoneNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPhoneNumber|null
     */
    public function getPhoneNumber()
    {
        return isset($this->PhoneNumber) ? $this->PhoneNumber : null;
    }
    /**
     * Set PhoneNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPhoneNumber $phoneNumber
     * @return \Randock\PostNL\BulkMailApi\StructType\BusinessDocumentMessageHeaderPartyContactPerson
     */
    public function setPhoneNumber(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPhoneNumber $phoneNumber = null)
    {
        if (is_null($phoneNumber) || (is_array($phoneNumber) && empty($phoneNumber))) {
            unset($this->PhoneNumber);
        } else {
            $this->PhoneNumber = $phoneNumber;
        }
        return $this;
    }
}
