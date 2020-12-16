<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageHeaderType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MessageHeaderType
 * @subpackage Structs
 */
class MessageHeaderType extends BusinessDocumentMessageHeader
{
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\Message
     */
    public $Message;
    /**
     * Constructor method for MessageHeaderType
     * @uses MessageHeaderType::setMessage()
     * @param \Randock\PostNL\BulkMailApi\StructType\Message $message
     */
    public function __construct(\Randock\PostNL\BulkMailApi\StructType\Message $message = null)
    {
        $this
            ->setMessage($message);
    }
    /**
     * Get Message value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\Message|null
     */
    public function getMessage()
    {
        return isset($this->Message) ? $this->Message : null;
    }
    /**
     * Set Message value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\Message $message
     * @return \Randock\PostNL\BulkMailApi\StructType\MessageHeaderType
     */
    public function setMessage(\Randock\PostNL\BulkMailApi\StructType\Message $message = null)
    {
        if (is_null($message) || (is_array($message) && empty($message))) {
            unset($this->Message);
        } else {
            $this->Message = $message;
        }
        return $this;
    }
}
