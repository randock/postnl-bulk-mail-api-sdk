<?php

namespace Randock\PostNL\BulkMailApi\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Validate ServiceType
 * @subpackage Services
 */
class Validate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ValidateAddressAttachmentV1
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Randock\PostNL\BulkMailApi\StructType\ValidateAddressAttachmentV1 $parameters
     * @return \Randock\PostNL\BulkMailApi\StructType\ValidateAddressAttachmentV1Response|bool
     */
    public function ValidateAddressAttachmentV1(\Randock\PostNL\BulkMailApi\StructType\ValidateAddressAttachmentV1 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('ValidateAddressAttachmentV1', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ValidateAndSortAddressAttachmentV1
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Randock\PostNL\BulkMailApi\StructType\ValidateAndSortAddressAttachmentV1 $parameters
     * @return \Randock\PostNL\BulkMailApi\StructType\ValidateAndSortAddressAttachmentV1Response|bool
     */
    public function ValidateAndSortAddressAttachmentV1(\Randock\PostNL\BulkMailApi\StructType\ValidateAndSortAddressAttachmentV1 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('ValidateAndSortAddressAttachmentV1', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Randock\PostNL\BulkMailApi\StructType\ValidateAddressAttachmentV1Response|\Randock\PostNL\BulkMailApi\StructType\ValidateAndSortAddressAttachmentV1Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
