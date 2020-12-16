<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Message StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Message
 * @subpackage Structs
 */
class Message extends AbstractStructBase
{
    /**
     * The ErrorMessages
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfResult
     */
    public $ErrorMessages;
    /**
     * The IsTestOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsTestOrder;
    /**
     * Constructor method for Message
     * @uses Message::setErrorMessages()
     * @uses Message::setIsTestOrder()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfResult $errorMessages
     * @param bool $isTestOrder
     */
    public function __construct(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfResult $errorMessages = null, $isTestOrder = null)
    {
        $this
            ->setErrorMessages($errorMessages)
            ->setIsTestOrder($isTestOrder);
    }
    /**
     * Get ErrorMessages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfResult|null
     */
    public function getErrorMessages()
    {
        return isset($this->ErrorMessages) ? $this->ErrorMessages : null;
    }
    /**
     * Set ErrorMessages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfResult $errorMessages
     * @return \Randock\PostNL\BulkMailApi\StructType\Message
     */
    public function setErrorMessages(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfResult $errorMessages = null)
    {
        if (is_null($errorMessages) || (is_array($errorMessages) && empty($errorMessages))) {
            unset($this->ErrorMessages);
        } else {
            $this->ErrorMessages = $errorMessages;
        }
        return $this;
    }
    /**
     * Get IsTestOrder value
     * @return bool|null
     */
    public function getIsTestOrder()
    {
        return $this->IsTestOrder;
    }
    /**
     * Set IsTestOrder value
     * @param bool $isTestOrder
     * @return \Randock\PostNL\BulkMailApi\StructType\Message
     */
    public function setIsTestOrder($isTestOrder = null)
    {
        // validation for constraint: boolean
        if (!is_null($isTestOrder) && !is_bool($isTestOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTestOrder, true), gettype($isTestOrder)), __LINE__);
        }
        $this->IsTestOrder = $isTestOrder;
        return $this;
    }
}
