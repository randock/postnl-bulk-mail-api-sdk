<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsignmentType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ConsignmentType
 * @subpackage Structs
 */
class ConsignmentType extends AbstractStructBase
{
    /**
     * The AlternateConsignmentID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $AlternateConsignmentID = null;
    /**
     * The CommercialProduct
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CommercialProductType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CommercialProductType $CommercialProduct = null;
    /**
     * The ConsignmentContract
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ConsignmentContractType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\ConsignmentContractType $ConsignmentContract = null;
    /**
     * The ConsignmentID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $ConsignmentID = null;
    /**
     * The ConsignmentPhysicalData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType $ConsignmentPhysicalData = null;
    /**
     * The ConsignmentProcessing
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType $ConsignmentProcessing = null;
    /**
     * The CustomerConsignment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType $CustomerConsignment = null;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemIDType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemIDType $ItemID = null;
    /**
     * The MergedFromConsignmentID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $MergedFromConsignmentID = null;
    /**
     * The ReturnToParty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\ReturnToPartyType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\ReturnToPartyType $ReturnToParty = null;
    /**
     * Constructor method for ConsignmentType
     * @uses ConsignmentType::setAlternateConsignmentID()
     * @uses ConsignmentType::setCommercialProduct()
     * @uses ConsignmentType::setConsignmentContract()
     * @uses ConsignmentType::setConsignmentID()
     * @uses ConsignmentType::setConsignmentPhysicalData()
     * @uses ConsignmentType::setConsignmentProcessing()
     * @uses ConsignmentType::setCustomerConsignment()
     * @uses ConsignmentType::setItemID()
     * @uses ConsignmentType::setMergedFromConsignmentID()
     * @uses ConsignmentType::setReturnToParty()
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $alternateConsignmentID
     * @param \Randock\PostNL\BulkMailApi\StructType\CommercialProductType $commercialProduct
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentContractType $consignmentContract
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $consignmentID
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType $consignmentPhysicalData
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType $consignmentProcessing
     * @param \Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType $customerConsignment
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemIDType $itemID
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $mergedFromConsignmentID
     * @param \Randock\PostNL\BulkMailApi\StructType\ReturnToPartyType $returnToParty
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $alternateConsignmentID = null, ?\Randock\PostNL\BulkMailApi\StructType\CommercialProductType $commercialProduct = null, ?\Randock\PostNL\BulkMailApi\StructType\ConsignmentContractType $consignmentContract = null, ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $consignmentID = null, ?\Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType $consignmentPhysicalData = null, ?\Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType $consignmentProcessing = null, ?\Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType $customerConsignment = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemIDType $itemID = null, ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $mergedFromConsignmentID = null, ?\Randock\PostNL\BulkMailApi\StructType\ReturnToPartyType $returnToParty = null)
    {
        $this
            ->setAlternateConsignmentID($alternateConsignmentID)
            ->setCommercialProduct($commercialProduct)
            ->setConsignmentContract($consignmentContract)
            ->setConsignmentID($consignmentID)
            ->setConsignmentPhysicalData($consignmentPhysicalData)
            ->setConsignmentProcessing($consignmentProcessing)
            ->setCustomerConsignment($customerConsignment)
            ->setItemID($itemID)
            ->setMergedFromConsignmentID($mergedFromConsignmentID)
            ->setReturnToParty($returnToParty);
    }
    /**
     * Get AlternateConsignmentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getAlternateConsignmentID(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return isset($this->AlternateConsignmentID) ? $this->AlternateConsignmentID : null;
    }
    /**
     * Set AlternateConsignmentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $alternateConsignmentID
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setAlternateConsignmentID(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $alternateConsignmentID = null): self
    {
        if (is_null($alternateConsignmentID) || (is_array($alternateConsignmentID) && empty($alternateConsignmentID))) {
            unset($this->AlternateConsignmentID);
        } else {
            $this->AlternateConsignmentID = $alternateConsignmentID;
        }
        
        return $this;
    }
    /**
     * Get CommercialProduct value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CommercialProductType|null
     */
    public function getCommercialProduct(): ?\Randock\PostNL\BulkMailApi\StructType\CommercialProductType
    {
        return isset($this->CommercialProduct) ? $this->CommercialProduct : null;
    }
    /**
     * Set CommercialProduct value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CommercialProductType $commercialProduct
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setCommercialProduct(?\Randock\PostNL\BulkMailApi\StructType\CommercialProductType $commercialProduct = null): self
    {
        if (is_null($commercialProduct) || (is_array($commercialProduct) && empty($commercialProduct))) {
            unset($this->CommercialProduct);
        } else {
            $this->CommercialProduct = $commercialProduct;
        }
        
        return $this;
    }
    /**
     * Get ConsignmentContract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentContractType|null
     */
    public function getConsignmentContract(): ?\Randock\PostNL\BulkMailApi\StructType\ConsignmentContractType
    {
        return isset($this->ConsignmentContract) ? $this->ConsignmentContract : null;
    }
    /**
     * Set ConsignmentContract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentContractType $consignmentContract
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setConsignmentContract(?\Randock\PostNL\BulkMailApi\StructType\ConsignmentContractType $consignmentContract = null): self
    {
        if (is_null($consignmentContract) || (is_array($consignmentContract) && empty($consignmentContract))) {
            unset($this->ConsignmentContract);
        } else {
            $this->ConsignmentContract = $consignmentContract;
        }
        
        return $this;
    }
    /**
     * Get ConsignmentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\IdentifierType1|null
     */
    public function getConsignmentID(): ?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1
    {
        return isset($this->ConsignmentID) ? $this->ConsignmentID : null;
    }
    /**
     * Set ConsignmentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $consignmentID
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setConsignmentID(?\Randock\PostNL\BulkMailApi\StructType\IdentifierType1 $consignmentID = null): self
    {
        if (is_null($consignmentID) || (is_array($consignmentID) && empty($consignmentID))) {
            unset($this->ConsignmentID);
        } else {
            $this->ConsignmentID = $consignmentID;
        }
        
        return $this;
    }
    /**
     * Get ConsignmentPhysicalData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType|null
     */
    public function getConsignmentPhysicalData(): ?\Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType
    {
        return isset($this->ConsignmentPhysicalData) ? $this->ConsignmentPhysicalData : null;
    }
    /**
     * Set ConsignmentPhysicalData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType $consignmentPhysicalData
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setConsignmentPhysicalData(?\Randock\PostNL\BulkMailApi\StructType\ConsignmentPhysicalDataType $consignmentPhysicalData = null): self
    {
        if (is_null($consignmentPhysicalData) || (is_array($consignmentPhysicalData) && empty($consignmentPhysicalData))) {
            unset($this->ConsignmentPhysicalData);
        } else {
            $this->ConsignmentPhysicalData = $consignmentPhysicalData;
        }
        
        return $this;
    }
    /**
     * Get ConsignmentProcessing value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType|null
     */
    public function getConsignmentProcessing(): ?\Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType
    {
        return isset($this->ConsignmentProcessing) ? $this->ConsignmentProcessing : null;
    }
    /**
     * Set ConsignmentProcessing value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType $consignmentProcessing
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setConsignmentProcessing(?\Randock\PostNL\BulkMailApi\StructType\ConsignmentProcessingType $consignmentProcessing = null): self
    {
        if (is_null($consignmentProcessing) || (is_array($consignmentProcessing) && empty($consignmentProcessing))) {
            unset($this->ConsignmentProcessing);
        } else {
            $this->ConsignmentProcessing = $consignmentProcessing;
        }
        
        return $this;
    }
    /**
     * Get CustomerConsignment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType|null
     */
    public function getCustomerConsignment(): ?\Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType
    {
        return isset($this->CustomerConsignment) ? $this->CustomerConsignment : null;
    }
    /**
     * Set CustomerConsignment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType $customerConsignment
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setCustomerConsignment(?\Randock\PostNL\BulkMailApi\StructType\CustomerConsignmentType $customerConsignment = null): self
    {
        if (is_null($customerConsignment) || (is_array($customerConsignment) && empty($customerConsignment))) {
            unset($this->CustomerConsignment);
        } else {
            $this->CustomerConsignment = $customerConsignment;
        }
        
        return $this;
    }
    /**
     * Get ItemID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemIDType|null
     */
    public function getItemID(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemIDType
    {
        return isset($this->ItemID) ? $this->ItemID : null;
    }
    /**
     * Set ItemID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemIDType $itemID
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setItemID(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfItemIDType $itemID = null): self
    {
        if (is_null($itemID) || (is_array($itemID) && empty($itemID))) {
            unset($this->ItemID);
        } else {
            $this->ItemID = $itemID;
        }
        
        return $this;
    }
    /**
     * Get MergedFromConsignmentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1|null
     */
    public function getMergedFromConsignmentID(): ?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1
    {
        return isset($this->MergedFromConsignmentID) ? $this->MergedFromConsignmentID : null;
    }
    /**
     * Set MergedFromConsignmentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $mergedFromConsignmentID
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setMergedFromConsignmentID(?\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfIdentifierType1 $mergedFromConsignmentID = null): self
    {
        if (is_null($mergedFromConsignmentID) || (is_array($mergedFromConsignmentID) && empty($mergedFromConsignmentID))) {
            unset($this->MergedFromConsignmentID);
        } else {
            $this->MergedFromConsignmentID = $mergedFromConsignmentID;
        }
        
        return $this;
    }
    /**
     * Get ReturnToParty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\ReturnToPartyType|null
     */
    public function getReturnToParty(): ?\Randock\PostNL\BulkMailApi\StructType\ReturnToPartyType
    {
        return isset($this->ReturnToParty) ? $this->ReturnToParty : null;
    }
    /**
     * Set ReturnToParty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\ReturnToPartyType $returnToParty
     * @return \Randock\PostNL\BulkMailApi\StructType\ConsignmentType
     */
    public function setReturnToParty(?\Randock\PostNL\BulkMailApi\StructType\ReturnToPartyType $returnToParty = null): self
    {
        if (is_null($returnToParty) || (is_array($returnToParty) && empty($returnToParty))) {
            unset($this->ReturnToParty);
        } else {
            $this->ReturnToParty = $returnToParty;
        }
        
        return $this;
    }
}
