<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceLevelType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ServiceLevelType
 * @subpackage Structs
 */
class ServiceLevelType extends AbstractStructBase
{
    /**
     * The ServiceLevelCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $ServiceLevelCode = null;
    /**
     * The ServiceLevelDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\TextType1 $ServiceLevelDescription = null;
    /**
     * Constructor method for ServiceLevelType
     * @uses ServiceLevelType::setServiceLevelCode()
     * @uses ServiceLevelType::setServiceLevelDescription()
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $serviceLevelCode
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $serviceLevelDescription
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $serviceLevelCode = null, ?\Randock\PostNL\BulkMailApi\StructType\TextType1 $serviceLevelDescription = null)
    {
        $this
            ->setServiceLevelCode($serviceLevelCode)
            ->setServiceLevelDescription($serviceLevelDescription);
    }
    /**
     * Get ServiceLevelCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\CodeType1|null
     */
    public function getServiceLevelCode(): ?\Randock\PostNL\BulkMailApi\StructType\CodeType1
    {
        return isset($this->ServiceLevelCode) ? $this->ServiceLevelCode : null;
    }
    /**
     * Set ServiceLevelCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\CodeType1 $serviceLevelCode
     * @return \Randock\PostNL\BulkMailApi\StructType\ServiceLevelType
     */
    public function setServiceLevelCode(?\Randock\PostNL\BulkMailApi\StructType\CodeType1 $serviceLevelCode = null): self
    {
        if (is_null($serviceLevelCode) || (is_array($serviceLevelCode) && empty($serviceLevelCode))) {
            unset($this->ServiceLevelCode);
        } else {
            $this->ServiceLevelCode = $serviceLevelCode;
        }
        
        return $this;
    }
    /**
     * Get ServiceLevelDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\TextType1|null
     */
    public function getServiceLevelDescription(): ?\Randock\PostNL\BulkMailApi\StructType\TextType1
    {
        return isset($this->ServiceLevelDescription) ? $this->ServiceLevelDescription : null;
    }
    /**
     * Set ServiceLevelDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\TextType1 $serviceLevelDescription
     * @return \Randock\PostNL\BulkMailApi\StructType\ServiceLevelType
     */
    public function setServiceLevelDescription(?\Randock\PostNL\BulkMailApi\StructType\TextType1 $serviceLevelDescription = null): self
    {
        if (is_null($serviceLevelDescription) || (is_array($serviceLevelDescription) && empty($serviceLevelDescription))) {
            unset($this->ServiceLevelDescription);
        } else {
            $this->ServiceLevelDescription = $serviceLevelDescription;
        }
        
        return $this;
    }
}
