<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactABIEType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ContactABIEType
 * @subpackage Structs
 */
class ContactABIEType extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfAddressType
     */
    public $Address;
    /**
     * The DepartmentName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1
     */
    public $DepartmentName;
    /**
     * The EMailAddressCommunication
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfEMailAddressCommunicationType
     */
    public $EMailAddressCommunication;
    /**
     * The FaxTelephoneCommunication
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType
     */
    public $FaxTelephoneCommunication;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1
     */
    public $ID;
    /**
     * The InstantMessageCommunication
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType
     */
    public $InstantMessageCommunication;
    /**
     * The InternetAddressCommunication
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType
     */
    public $InternetAddressCommunication;
    /**
     * The JobTitle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1
     */
    public $JobTitle;
    /**
     * The MobileTelephoneCommunication
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType
     */
    public $MobileTelephoneCommunication;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1
     */
    public $Name;
    /**
     * The PagerTelephoneCommunication
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType
     */
    public $PagerTelephoneCommunication;
    /**
     * The Preference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\PreferenceType
     */
    public $Preference;
    /**
     * The PreferredCommunicationChannel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1
     */
    public $PreferredCommunicationChannel;
    /**
     * The Responsibility
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1
     */
    public $Responsibility;
    /**
     * The SocialNetworkCommunication
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType
     */
    public $SocialNetworkCommunication;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\StatusType
     */
    public $Status;
    /**
     * The TelephoneCommNoAnswer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType
     */
    public $TelephoneCommNoAnswer;
    /**
     * The TelephoneCommunication
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType
     */
    public $TelephoneCommunication;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $Type;
    /**
     * Constructor method for ContactABIEType
     * @uses ContactABIEType::setAddress()
     * @uses ContactABIEType::setDepartmentName()
     * @uses ContactABIEType::setEMailAddressCommunication()
     * @uses ContactABIEType::setFaxTelephoneCommunication()
     * @uses ContactABIEType::setID()
     * @uses ContactABIEType::setInstantMessageCommunication()
     * @uses ContactABIEType::setInternetAddressCommunication()
     * @uses ContactABIEType::setJobTitle()
     * @uses ContactABIEType::setMobileTelephoneCommunication()
     * @uses ContactABIEType::setName()
     * @uses ContactABIEType::setPagerTelephoneCommunication()
     * @uses ContactABIEType::setPreference()
     * @uses ContactABIEType::setPreferredCommunicationChannel()
     * @uses ContactABIEType::setResponsibility()
     * @uses ContactABIEType::setSocialNetworkCommunication()
     * @uses ContactABIEType::setStatus()
     * @uses ContactABIEType::setTelephoneCommNoAnswer()
     * @uses ContactABIEType::setTelephoneCommunication()
     * @uses ContactABIEType::setType()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfAddressType $address
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $departmentName
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfEMailAddressCommunicationType $eMailAddressCommunication
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $faxTelephoneCommunication
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $iD
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType $instantMessageCommunication
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType $internetAddressCommunication
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $jobTitle
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $mobileTelephoneCommunication
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $name
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $pagerTelephoneCommunication
     * @param \Randock\PostNL\BulkMailApi\StructType\PreferenceType $preference
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1 $preferredCommunicationChannel
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1 $responsibility
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType $socialNetworkCommunication
     * @param \Randock\PostNL\BulkMailApi\StructType\StatusType $status
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $telephoneCommNoAnswer
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $telephoneCommunication
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type
     */
    public function __construct(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfAddressType $address = null, \Randock\PostNL\BulkMailApi\StructType\NameType1 $departmentName = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfEMailAddressCommunicationType $eMailAddressCommunication = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $faxTelephoneCommunication = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $iD = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType $instantMessageCommunication = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType $internetAddressCommunication = null, \Randock\PostNL\BulkMailApi\StructType\TextType1 $jobTitle = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $mobileTelephoneCommunication = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $name = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $pagerTelephoneCommunication = null, \Randock\PostNL\BulkMailApi\StructType\PreferenceType $preference = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1 $preferredCommunicationChannel = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1 $responsibility = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType $socialNetworkCommunication = null, \Randock\PostNL\BulkMailApi\StructType\StatusType $status = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $telephoneCommNoAnswer = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $telephoneCommunication = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type = null)
    {
        $this
            ->setAddress($address)
            ->setDepartmentName($departmentName)
            ->setEMailAddressCommunication($eMailAddressCommunication)
            ->setFaxTelephoneCommunication($faxTelephoneCommunication)
            ->setID($iD)
            ->setInstantMessageCommunication($instantMessageCommunication)
            ->setInternetAddressCommunication($internetAddressCommunication)
            ->setJobTitle($jobTitle)
            ->setMobileTelephoneCommunication($mobileTelephoneCommunication)
            ->setName($name)
            ->setPagerTelephoneCommunication($pagerTelephoneCommunication)
            ->setPreference($preference)
            ->setPreferredCommunicationChannel($preferredCommunicationChannel)
            ->setResponsibility($responsibility)
            ->setSocialNetworkCommunication($socialNetworkCommunication)
            ->setStatus($status)
            ->setTelephoneCommNoAnswer($telephoneCommNoAnswer)
            ->setTelephoneCommunication($telephoneCommunication)
            ->setType($type);
    }
    /**
     * Get Address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfAddressType|null
     */
    public function getAddress()
    {
        return isset($this->Address) ? $this->Address : null;
    }
    /**
     * Set Address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfAddressType $address
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setAddress(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfAddressType $address = null)
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->Address);
        } else {
            $this->Address = $address;
        }
        return $this;
    }
    /**
     * Get DepartmentName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function getDepartmentName()
    {
        return isset($this->DepartmentName) ? $this->DepartmentName : null;
    }
    /**
     * Set DepartmentName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $departmentName
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setDepartmentName(\Randock\PostNL\BulkMailApi\StructType\NameType1 $departmentName = null)
    {
        if (is_null($departmentName) || (is_array($departmentName) && empty($departmentName))) {
            unset($this->DepartmentName);
        } else {
            $this->DepartmentName = $departmentName;
        }
        return $this;
    }
    /**
     * Get EMailAddressCommunication value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfEMailAddressCommunicationType|null
     */
    public function getEMailAddressCommunication()
    {
        return isset($this->EMailAddressCommunication) ? $this->EMailAddressCommunication : null;
    }
    /**
     * Set EMailAddressCommunication value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfEMailAddressCommunicationType $eMailAddressCommunication
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setEMailAddressCommunication(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfEMailAddressCommunicationType $eMailAddressCommunication = null)
    {
        if (is_null($eMailAddressCommunication) || (is_array($eMailAddressCommunication) && empty($eMailAddressCommunication))) {
            unset($this->EMailAddressCommunication);
        } else {
            $this->EMailAddressCommunication = $eMailAddressCommunication;
        }
        return $this;
    }
    /**
     * Get FaxTelephoneCommunication value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType|null
     */
    public function getFaxTelephoneCommunication()
    {
        return isset($this->FaxTelephoneCommunication) ? $this->FaxTelephoneCommunication : null;
    }
    /**
     * Set FaxTelephoneCommunication value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $faxTelephoneCommunication
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setFaxTelephoneCommunication(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $faxTelephoneCommunication = null)
    {
        if (is_null($faxTelephoneCommunication) || (is_array($faxTelephoneCommunication) && empty($faxTelephoneCommunication))) {
            unset($this->FaxTelephoneCommunication);
        } else {
            $this->FaxTelephoneCommunication = $faxTelephoneCommunication;
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
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
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
     * Get InstantMessageCommunication value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType|null
     */
    public function getInstantMessageCommunication()
    {
        return isset($this->InstantMessageCommunication) ? $this->InstantMessageCommunication : null;
    }
    /**
     * Set InstantMessageCommunication value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType $instantMessageCommunication
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setInstantMessageCommunication(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType $instantMessageCommunication = null)
    {
        if (is_null($instantMessageCommunication) || (is_array($instantMessageCommunication) && empty($instantMessageCommunication))) {
            unset($this->InstantMessageCommunication);
        } else {
            $this->InstantMessageCommunication = $instantMessageCommunication;
        }
        return $this;
    }
    /**
     * Get InternetAddressCommunication value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType|null
     */
    public function getInternetAddressCommunication()
    {
        return isset($this->InternetAddressCommunication) ? $this->InternetAddressCommunication : null;
    }
    /**
     * Set InternetAddressCommunication value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType $internetAddressCommunication
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setInternetAddressCommunication(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType $internetAddressCommunication = null)
    {
        if (is_null($internetAddressCommunication) || (is_array($internetAddressCommunication) && empty($internetAddressCommunication))) {
            unset($this->InternetAddressCommunication);
        } else {
            $this->InternetAddressCommunication = $internetAddressCommunication;
        }
        return $this;
    }
    /**
     * Get JobTitle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getJobTitle()
    {
        return isset($this->JobTitle) ? $this->JobTitle : null;
    }
    /**
     * Set JobTitle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $jobTitle
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setJobTitle(\Randock\PostNL\BulkMailApi\StructType\TextType1 $jobTitle = null)
    {
        if (is_null($jobTitle) || (is_array($jobTitle) && empty($jobTitle))) {
            unset($this->JobTitle);
        } else {
            $this->JobTitle = $jobTitle;
        }
        return $this;
    }
    /**
     * Get MobileTelephoneCommunication value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType|null
     */
    public function getMobileTelephoneCommunication()
    {
        return isset($this->MobileTelephoneCommunication) ? $this->MobileTelephoneCommunication : null;
    }
    /**
     * Set MobileTelephoneCommunication value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $mobileTelephoneCommunication
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setMobileTelephoneCommunication(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $mobileTelephoneCommunication = null)
    {
        if (is_null($mobileTelephoneCommunication) || (is_array($mobileTelephoneCommunication) && empty($mobileTelephoneCommunication))) {
            unset($this->MobileTelephoneCommunication);
        } else {
            $this->MobileTelephoneCommunication = $mobileTelephoneCommunication;
        }
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $name
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setName(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $name = null)
    {
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Get PagerTelephoneCommunication value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType|null
     */
    public function getPagerTelephoneCommunication()
    {
        return isset($this->PagerTelephoneCommunication) ? $this->PagerTelephoneCommunication : null;
    }
    /**
     * Set PagerTelephoneCommunication value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $pagerTelephoneCommunication
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setPagerTelephoneCommunication(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $pagerTelephoneCommunication = null)
    {
        if (is_null($pagerTelephoneCommunication) || (is_array($pagerTelephoneCommunication) && empty($pagerTelephoneCommunication))) {
            unset($this->PagerTelephoneCommunication);
        } else {
            $this->PagerTelephoneCommunication = $pagerTelephoneCommunication;
        }
        return $this;
    }
    /**
     * Get Preference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\PreferenceType|null
     */
    public function getPreference()
    {
        return isset($this->Preference) ? $this->Preference : null;
    }
    /**
     * Set Preference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\PreferenceType $preference
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setPreference(\Randock\PostNL\BulkMailApi\StructType\PreferenceType $preference = null)
    {
        if (is_null($preference) || (is_array($preference) && empty($preference))) {
            unset($this->Preference);
        } else {
            $this->Preference = $preference;
        }
        return $this;
    }
    /**
     * Get PreferredCommunicationChannel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1|null
     */
    public function getPreferredCommunicationChannel()
    {
        return isset($this->PreferredCommunicationChannel) ? $this->PreferredCommunicationChannel : null;
    }
    /**
     * Set PreferredCommunicationChannel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1 $preferredCommunicationChannel
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setPreferredCommunicationChannel(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1 $preferredCommunicationChannel = null)
    {
        if (is_null($preferredCommunicationChannel) || (is_array($preferredCommunicationChannel) && empty($preferredCommunicationChannel))) {
            unset($this->PreferredCommunicationChannel);
        } else {
            $this->PreferredCommunicationChannel = $preferredCommunicationChannel;
        }
        return $this;
    }
    /**
     * Get Responsibility value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1|null
     */
    public function getResponsibility()
    {
        return isset($this->Responsibility) ? $this->Responsibility : null;
    }
    /**
     * Set Responsibility value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1 $responsibility
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setResponsibility(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1 $responsibility = null)
    {
        if (is_null($responsibility) || (is_array($responsibility) && empty($responsibility))) {
            unset($this->Responsibility);
        } else {
            $this->Responsibility = $responsibility;
        }
        return $this;
    }
    /**
     * Get SocialNetworkCommunication value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType|null
     */
    public function getSocialNetworkCommunication()
    {
        return isset($this->SocialNetworkCommunication) ? $this->SocialNetworkCommunication : null;
    }
    /**
     * Set SocialNetworkCommunication value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType $socialNetworkCommunication
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setSocialNetworkCommunication(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfElectronicCommunicationType $socialNetworkCommunication = null)
    {
        if (is_null($socialNetworkCommunication) || (is_array($socialNetworkCommunication) && empty($socialNetworkCommunication))) {
            unset($this->SocialNetworkCommunication);
        } else {
            $this->SocialNetworkCommunication = $socialNetworkCommunication;
        }
        return $this;
    }
    /**
     * Get Status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\StatusType|null
     */
    public function getStatus()
    {
        return isset($this->Status) ? $this->Status : null;
    }
    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\StatusType $status
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setStatus(\Randock\PostNL\BulkMailApi\StructType\StatusType $status = null)
    {
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
        }
        return $this;
    }
    /**
     * Get TelephoneCommNoAnswer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType|null
     */
    public function getTelephoneCommNoAnswer()
    {
        return isset($this->TelephoneCommNoAnswer) ? $this->TelephoneCommNoAnswer : null;
    }
    /**
     * Set TelephoneCommNoAnswer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $telephoneCommNoAnswer
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setTelephoneCommNoAnswer(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $telephoneCommNoAnswer = null)
    {
        if (is_null($telephoneCommNoAnswer) || (is_array($telephoneCommNoAnswer) && empty($telephoneCommNoAnswer))) {
            unset($this->TelephoneCommNoAnswer);
        } else {
            $this->TelephoneCommNoAnswer = $telephoneCommNoAnswer;
        }
        return $this;
    }
    /**
     * Get TelephoneCommunication value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType|null
     */
    public function getTelephoneCommunication()
    {
        return isset($this->TelephoneCommunication) ? $this->TelephoneCommunication : null;
    }
    /**
     * Set TelephoneCommunication value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $telephoneCommunication
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setTelephoneCommunication(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTelephoneCommunicationType $telephoneCommunication = null)
    {
        if (is_null($telephoneCommunication) || (is_array($telephoneCommunication) && empty($telephoneCommunication))) {
            unset($this->TelephoneCommunication);
        } else {
            $this->TelephoneCommunication = $telephoneCommunication;
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
    public function getType()
    {
        return isset($this->Type) ? $this->Type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $type
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactABIEType
     */
    public function setType(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $type = null)
    {
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }
        return $this;
    }
}
