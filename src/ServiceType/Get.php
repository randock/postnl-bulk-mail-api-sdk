<?php

namespace Randock\PostNL\BulkMailApi\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetValidationResultV1
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Randock\PostNL\BulkMailApi\StructType\GetValidationResultV1 $parameters
     * @return \Randock\PostNL\BulkMailApi\StructType\GetValidationResultV1Response|bool
     */
    public function GetValidationResultV1(\Randock\PostNL\BulkMailApi\StructType\GetValidationResultV1 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetValidationResultV1', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetValidationAndSortingResultV1
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Randock\PostNL\BulkMailApi\StructType\GetValidationAndSortingResultV1 $parameters
     * @return \Randock\PostNL\BulkMailApi\StructType\GetValidationAndSortingResultV1Response|bool
     */
    public function GetValidationAndSortingResultV1(\Randock\PostNL\BulkMailApi\StructType\GetValidationAndSortingResultV1 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetValidationAndSortingResultV1', array(
                $parameters,
            ), array(), array(), $this->outputHeaders));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPackagingInformationV1
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Randock\PostNL\BulkMailApi\StructType\GetPackagingInformationV1 $parameters
     * @return \Randock\PostNL\BulkMailApi\StructType\GetPackagingInformationV1Response|bool
     */
    public function GetPackagingInformationV1(\Randock\PostNL\BulkMailApi\StructType\GetPackagingInformationV1 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('GetPackagingInformationV1', array(
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
     * @return \Randock\PostNL\BulkMailApi\StructType\GetPackagingInformationV1Response|\Randock\PostNL\BulkMailApi\StructType\GetValidationAndSortingResultV1Response|\Randock\PostNL\BulkMailApi\StructType\GetValidationResultV1Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
