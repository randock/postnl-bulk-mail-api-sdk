<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkLocationTypeType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WorkLocationTypeType
 * @subpackage Structs
 */
class WorkLocationTypeType extends AbstractStructBase
{
    /**
     * The LocationType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $LocationType = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $Name = null;
    /**
     * The ShortName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $ShortName = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\StatusType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\StatusType $Status = null;
    /**
     * Constructor method for WorkLocationTypeType
     * @uses WorkLocationTypeType::setLocationType()
     * @uses WorkLocationTypeType::setName()
     * @uses WorkLocationTypeType::setShortName()
     * @uses WorkLocationTypeType::setStatus()
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $locationType
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $name
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $shortName
     * @param \Randock\PostNL\BulkMailApi\StructType\StatusType $status
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $locationType = null, ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $name = null, ?\Randock\PostNL\BulkMailApi\StructType\NameType1 $shortName = null, ?\Randock\PostNL\BulkMailApi\StructType\StatusType $status = null)
    {
        $this
            ->setLocationType($locationType)
            ->setName($name)
            ->setShortName($shortName)
            ->setStatus($status);
    }
    /**
     * Get LocationType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getLocationType(): ?\Randock\PostNL\BulkMailApi\StructType\CodeType1
    {
        return isset($this->LocationType) ? $this->LocationType : null;
    }
    /**
     * Set LocationType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $locationType
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationTypeType
     */
    public function setLocationType(?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $locationType = null): self
    {
        if (is_null($locationType) || (is_array($locationType) && empty($locationType))) {
            unset($this->LocationType);
        } else {
            $this->LocationType = $locationType;
        }
        
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function getName(): ?\Randock\PostNL\BulkMailApi\StructType\NameType1
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $name
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationTypeType
     */
    public function setName(?\Randock\PostNL\BulkMailApi\StructType\NameType1 $name = null): self
    {
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
    /**
     * Get ShortName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\NameType1|null
     */
    public function getShortName(): ?\Randock\PostNL\BulkMailApi\StructType\NameType1
    {
        return isset($this->ShortName) ? $this->ShortName : null;
    }
    /**
     * Set ShortName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\NameType1 $shortName
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationTypeType
     */
    public function setShortName(?\Randock\PostNL\BulkMailApi\StructType\NameType1 $shortName = null): self
    {
        if (is_null($shortName) || (is_array($shortName) && empty($shortName))) {
            unset($this->ShortName);
        } else {
            $this->ShortName = $shortName;
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
    public function getStatus(): ?\Randock\PostNL\BulkMailApi\StructType\StatusType
    {
        return isset($this->Status) ? $this->Status : null;
    }
    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\StatusType $status
     * @return \Randock\PostNL\BulkMailApi\StructType\WorkLocationTypeType
     */
    public function setStatus(?\Randock\PostNL\BulkMailApi\StructType\StatusType $status = null): self
    {
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
        }
        
        return $this;
    }
}
