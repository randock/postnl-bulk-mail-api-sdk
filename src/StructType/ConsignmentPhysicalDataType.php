<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsignmentPhysicalDataType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ConsignmentPhysicalDataType
 * @subpackage Structs
 */
class ConsignmentPhysicalDataType extends AbstractStructBase
{
    /**
     * The AddressLabelingTypeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $AddressLabelingTypeCode;
    /**
     * The EmballageCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1
     */
    public $EmballageCode;
    /**
     * The MailingWrapperFinishingTypeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $MailingWrapperFinishingTypeCode;
    /**
     * The MailingWrapperTypeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $MailingWrapperTypeCode;
    /**
     * The PhysicalDataFormatCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $PhysicalDataFormatCode;
    /**
     * The PhysicalDataLength
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\MeasureType1
     */
    public $PhysicalDataLength;
    /**
     * The PhysicalDataProductWeight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\MeasureType1
     */
    public $PhysicalDataProductWeight;
    /**
     * The PhysicalDataQuantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\QuantityType1
     */
    public $PhysicalDataQuantity;
    /**
     * The PhysicalDataThickness
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\MeasureType1
     */
    public $PhysicalDataThickness;
    /**
     * The PhysicalDataThicknessClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $PhysicalDataThicknessClass;
    /**
     * The PhysicalDataTotalWeight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\MeasureType1
     */
    public $PhysicalDataTotalWeight;
    /**
     * The PhysicalDataWidth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\MeasureType1
     */
    public $PhysicalDataWidth;
    /**
     * The PhysicalPackagingCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1
     */
    public $PhysicalPackagingCode;
    /**
     * The TarraID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1
     */
    public $TarraID;
    /**
     * The TrackingIDRange
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTrackingIDRangeType
     */
    public $TrackingIDRange;
    /**
     * Constructor method for ConsignmentPhysicalDataType
     * @uses ConsignmentPhysicalDataType::setAddressLabelingTypeCode()
     * @uses ConsignmentPhysicalDataType::setEmballageCode()
     * @uses ConsignmentPhysicalDataType::setMailingWrapperFinishingTypeCode()
     * @uses ConsignmentPhysicalDataType::setMailingWrapperTypeCode()
     * @uses ConsignmentPhysicalDataType::setPhysicalDataFormatCode()
     * @uses ConsignmentPhysicalDataType::setPhysicalDataLength()
     * @uses ConsignmentPhysicalDataType::setPhysicalDataProductWeight()
     * @uses ConsignmentPhysicalDataType::setPhysicalDataQuantity()
     * @uses ConsignmentPhysicalDataType::setPhysicalDataThickness()
     * @uses ConsignmentPhysicalDataType::setPhysicalDataThicknessClass()
     * @uses ConsignmentPhysicalDataType::setPhysicalDataTotalWeight()
     * @uses ConsignmentPhysicalDataType::setPhysicalDataWidth()
     * @uses ConsignmentPhysicalDataType::setPhysicalPackagingCode()
     * @uses ConsignmentPhysicalDataType::setTarraID()
     * @uses ConsignmentPhysicalDataType::setTrackingIDRange()
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $addressLabelingTypeCode
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1 $emballageCode
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $mailingWrapperFinishingTypeCode
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $mailingWrapperTypeCode
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $physicalDataFormatCode
     * @param \Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataLength
     * @param \Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataProductWeight
     * @param \Randock\PostNL\BulkMailApi\StructType\QuantityType1 $physicalDataQuantity
     * @param \Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataThickness
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $physicalDataThicknessClass
     * @param \Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataTotalWeight
     * @param \Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataWidth
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $physicalPackagingCode
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $tarraID
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTrackingIDRangeType $trackingIDRange
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $addressLabelingTypeCode = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1 $emballageCode = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $mailingWrapperFinishingTypeCode = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $mailingWrapperTypeCode = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $physicalDataFormatCode = null, \Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataLength = null, \Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataProductWeight = null, \Randock\PostNL\BulkMailApi\StructType\QuantityType1 $physicalDataQuantity = null, \Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataThickness = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $physicalDataThicknessClass = null, \Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataTotalWeight = null, \Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataWidth = null, \Randock\PostNL\BulkMailApi\StructType\CodeType1 $physicalPackagingCode = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $tarraID = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTrackingIDRangeType $trackingIDRange = null)
    {
        $this
            ->setAddressLabelingTypeCode($addressLabelingTypeCode)
            ->setEmballageCode($emballageCode)
            ->setMailingWrapperFinishingTypeCode($mailingWrapperFinishingTypeCode)
            ->setMailingWrapperTypeCode($mailingWrapperTypeCode)
            ->setPhysicalDataFormatCode($physicalDataFormatCode)
            ->setPhysicalDataLength($physicalDataLength)
            ->setPhysicalDataProductWeight($physicalDataProductWeight)
            ->setPhysicalDataQuantity($physicalDataQuantity)
            ->setPhysicalDataThickness($physicalDataThickness)
            ->setPhysicalDataThicknessClass($physicalDataThicknessClass)
            ->setPhysicalDataTotalWeight($physicalDataTotalWeight)
            ->setPhysicalDataWidth($physicalDataWidth)
            ->setPhysicalPackagingCode($physicalPackagingCode)
            ->setTarraID($tarraID)
            ->setTrackingIDRange($trackingIDRange);
    }
    /**
     * Get AddressLabelingTypeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getAddressLabelingTypeCode()
    {
        return isset($this->AddressLabelingTypeCode) ? $this->AddressLabelingTypeCode : null;
    }
    /**
     * Set AddressLabelingTypeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $addressLabelingTypeCode
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType
     */
    public function setAddressLabelingTypeCode(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $addressLabelingTypeCode = null)
    {
        if (is_null($addressLabelingTypeCode) || (is_array($addressLabelingTypeCode) && empty($addressLabelingTypeCode))) {
            unset($this->AddressLabelingTypeCode);
        } else {
            $this->AddressLabelingTypeCode = $addressLabelingTypeCode;
        }
        return $this;
    }
    /**
     * Get EmballageCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1|null
     */
    public function getEmballageCode()
    {
        return isset($this->EmballageCode) ? $this->EmballageCode : null;
    }
    /**
     * Set EmballageCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1 $emballageCode
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType
     */
    public function setEmballageCode(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfCodeType1 $emballageCode = null)
    {
        if (is_null($emballageCode) || (is_array($emballageCode) && empty($emballageCode))) {
            unset($this->EmballageCode);
        } else {
            $this->EmballageCode = $emballageCode;
        }
        return $this;
    }
    /**
     * Get MailingWrapperFinishingTypeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getMailingWrapperFinishingTypeCode()
    {
        return isset($this->MailingWrapperFinishingTypeCode) ? $this->MailingWrapperFinishingTypeCode : null;
    }
    /**
     * Set MailingWrapperFinishingTypeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $mailingWrapperFinishingTypeCode
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType
     */
    public function setMailingWrapperFinishingTypeCode(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $mailingWrapperFinishingTypeCode = null)
    {
        if (is_null($mailingWrapperFinishingTypeCode) || (is_array($mailingWrapperFinishingTypeCode) && empty($mailingWrapperFinishingTypeCode))) {
            unset($this->MailingWrapperFinishingTypeCode);
        } else {
            $this->MailingWrapperFinishingTypeCode = $mailingWrapperFinishingTypeCode;
        }
        return $this;
    }
    /**
     * Get MailingWrapperTypeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getMailingWrapperTypeCode()
    {
        return isset($this->MailingWrapperTypeCode) ? $this->MailingWrapperTypeCode : null;
    }
    /**
     * Set MailingWrapperTypeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $mailingWrapperTypeCode
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType
     */
    public function setMailingWrapperTypeCode(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $mailingWrapperTypeCode = null)
    {
        if (is_null($mailingWrapperTypeCode) || (is_array($mailingWrapperTypeCode) && empty($mailingWrapperTypeCode))) {
            unset($this->MailingWrapperTypeCode);
        } else {
            $this->MailingWrapperTypeCode = $mailingWrapperTypeCode;
        }
        return $this;
    }
    /**
     * Get PhysicalDataFormatCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getPhysicalDataFormatCode()
    {
        return isset($this->PhysicalDataFormatCode) ? $this->PhysicalDataFormatCode : null;
    }
    /**
     * Set PhysicalDataFormatCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $physicalDataFormatCode
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType
     */
    public function setPhysicalDataFormatCode(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $physicalDataFormatCode = null)
    {
        if (is_null($physicalDataFormatCode) || (is_array($physicalDataFormatCode) && empty($physicalDataFormatCode))) {
            unset($this->PhysicalDataFormatCode);
        } else {
            $this->PhysicalDataFormatCode = $physicalDataFormatCode;
        }
        return $this;
    }
    /**
     * Get PhysicalDataLength value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\MeasureType1|null
     */
    public function getPhysicalDataLength()
    {
        return isset($this->PhysicalDataLength) ? $this->PhysicalDataLength : null;
    }
    /**
     * Set PhysicalDataLength value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataLength
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType
     */
    public function setPhysicalDataLength(\Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataLength = null)
    {
        if (is_null($physicalDataLength) || (is_array($physicalDataLength) && empty($physicalDataLength))) {
            unset($this->PhysicalDataLength);
        } else {
            $this->PhysicalDataLength = $physicalDataLength;
        }
        return $this;
    }
    /**
     * Get PhysicalDataProductWeight value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\MeasureType1|null
     */
    public function getPhysicalDataProductWeight()
    {
        return isset($this->PhysicalDataProductWeight) ? $this->PhysicalDataProductWeight : null;
    }
    /**
     * Set PhysicalDataProductWeight value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataProductWeight
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType
     */
    public function setPhysicalDataProductWeight(\Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataProductWeight = null)
    {
        if (is_null($physicalDataProductWeight) || (is_array($physicalDataProductWeight) && empty($physicalDataProductWeight))) {
            unset($this->PhysicalDataProductWeight);
        } else {
            $this->PhysicalDataProductWeight = $physicalDataProductWeight;
        }
        return $this;
    }
    /**
     * Get PhysicalDataQuantity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\QuantityType1|null
     */
    public function getPhysicalDataQuantity()
    {
        return isset($this->PhysicalDataQuantity) ? $this->PhysicalDataQuantity : null;
    }
    /**
     * Set PhysicalDataQuantity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\QuantityType1 $physicalDataQuantity
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType
     */
    public function setPhysicalDataQuantity(\Randock\PostNL\BulkMailApi\StructType\QuantityType1 $physicalDataQuantity = null)
    {
        if (is_null($physicalDataQuantity) || (is_array($physicalDataQuantity) && empty($physicalDataQuantity))) {
            unset($this->PhysicalDataQuantity);
        } else {
            $this->PhysicalDataQuantity = $physicalDataQuantity;
        }
        return $this;
    }
    /**
     * Get PhysicalDataThickness value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\MeasureType1|null
     */
    public function getPhysicalDataThickness()
    {
        return isset($this->PhysicalDataThickness) ? $this->PhysicalDataThickness : null;
    }
    /**
     * Set PhysicalDataThickness value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataThickness
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType
     */
    public function setPhysicalDataThickness(\Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataThickness = null)
    {
        if (is_null($physicalDataThickness) || (is_array($physicalDataThickness) && empty($physicalDataThickness))) {
            unset($this->PhysicalDataThickness);
        } else {
            $this->PhysicalDataThickness = $physicalDataThickness;
        }
        return $this;
    }
    /**
     * Get PhysicalDataThicknessClass value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getPhysicalDataThicknessClass()
    {
        return isset($this->PhysicalDataThicknessClass) ? $this->PhysicalDataThicknessClass : null;
    }
    /**
     * Set PhysicalDataThicknessClass value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $physicalDataThicknessClass
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType
     */
    public function setPhysicalDataThicknessClass(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $physicalDataThicknessClass = null)
    {
        if (is_null($physicalDataThicknessClass) || (is_array($physicalDataThicknessClass) && empty($physicalDataThicknessClass))) {
            unset($this->PhysicalDataThicknessClass);
        } else {
            $this->PhysicalDataThicknessClass = $physicalDataThicknessClass;
        }
        return $this;
    }
    /**
     * Get PhysicalDataTotalWeight value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\MeasureType1|null
     */
    public function getPhysicalDataTotalWeight()
    {
        return isset($this->PhysicalDataTotalWeight) ? $this->PhysicalDataTotalWeight : null;
    }
    /**
     * Set PhysicalDataTotalWeight value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataTotalWeight
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType
     */
    public function setPhysicalDataTotalWeight(\Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataTotalWeight = null)
    {
        if (is_null($physicalDataTotalWeight) || (is_array($physicalDataTotalWeight) && empty($physicalDataTotalWeight))) {
            unset($this->PhysicalDataTotalWeight);
        } else {
            $this->PhysicalDataTotalWeight = $physicalDataTotalWeight;
        }
        return $this;
    }
    /**
     * Get PhysicalDataWidth value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\MeasureType1|null
     */
    public function getPhysicalDataWidth()
    {
        return isset($this->PhysicalDataWidth) ? $this->PhysicalDataWidth : null;
    }
    /**
     * Set PhysicalDataWidth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataWidth
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType
     */
    public function setPhysicalDataWidth(\Randock\PostNL\BulkMailApi\StructType\MeasureType1 $physicalDataWidth = null)
    {
        if (is_null($physicalDataWidth) || (is_array($physicalDataWidth) && empty($physicalDataWidth))) {
            unset($this->PhysicalDataWidth);
        } else {
            $this->PhysicalDataWidth = $physicalDataWidth;
        }
        return $this;
    }
    /**
     * Get PhysicalPackagingCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getPhysicalPackagingCode()
    {
        return isset($this->PhysicalPackagingCode) ? $this->PhysicalPackagingCode : null;
    }
    /**
     * Set PhysicalPackagingCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $physicalPackagingCode
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType
     */
    public function setPhysicalPackagingCode(\Randock\PostNL\BulkMailApi\StructType\CodeType1 $physicalPackagingCode = null)
    {
        if (is_null($physicalPackagingCode) || (is_array($physicalPackagingCode) && empty($physicalPackagingCode))) {
            unset($this->PhysicalPackagingCode);
        } else {
            $this->PhysicalPackagingCode = $physicalPackagingCode;
        }
        return $this;
    }
    /**
     * Get TarraID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1|null
     */
    public function getTarraID()
    {
        return isset($this->TarraID) ? $this->TarraID : null;
    }
    /**
     * Set TarraID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $tarraID
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType
     */
    public function setTarraID(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $tarraID = null)
    {
        if (is_null($tarraID) || (is_array($tarraID) && empty($tarraID))) {
            unset($this->TarraID);
        } else {
            $this->TarraID = $tarraID;
        }
        return $this;
    }
    /**
     * Get TrackingIDRange value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTrackingIDRangeType|null
     */
    public function getTrackingIDRange()
    {
        return isset($this->TrackingIDRange) ? $this->TrackingIDRange : null;
    }
    /**
     * Set TrackingIDRange value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTrackingIDRangeType $trackingIDRange
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType
     */
    public function setTrackingIDRange(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTrackingIDRangeType $trackingIDRange = null)
    {
        if (is_null($trackingIDRange) || (is_array($trackingIDRange) && empty($trackingIDRange))) {
            unset($this->TrackingIDRange);
        } else {
            $this->TrackingIDRange = $trackingIDRange;
        }
        return $this;
    }
}
