<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Result StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Result
 * @subpackage Structs
 */
class Result extends AbstractStructBase
{
    /**
     * The ErrorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorCode;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Result
     * @uses Result::setErrorCode()
     * @uses Result::setErrorMessage()
     * @param string $errorCode
     * @param string $errorMessage
     */
    public function __construct($errorCode = null, $errorMessage = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get ErrorCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getErrorCode()
    {
        return isset($this->ErrorCode) ? $this->ErrorCode : null;
    }
    /**
     * Set ErrorCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $errorCode
     * @return \Randock\PostNL\BulkMailApi\StructType\Result
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        if (is_null($errorCode) || (is_array($errorCode) && empty($errorCode))) {
            unset($this->ErrorCode);
        } else {
            $this->ErrorCode = $errorCode;
        }
        return $this;
    }
    /**
     * Get ErrorMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getErrorMessage()
    {
        return isset($this->ErrorMessage) ? $this->ErrorMessage : null;
    }
    /**
     * Set ErrorMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $errorMessage
     * @return \Randock\PostNL\BulkMailApi\StructType\Result
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        if (is_null($errorMessage) || (is_array($errorMessage) && empty($errorMessage))) {
            unset($this->ErrorMessage);
        } else {
            $this->ErrorMessage = $errorMessage;
        }
        return $this;
    }
}
