<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

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
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Randock\PostNL\BulkMailApi\StructType\GetValidationResultV1 $parameters
     * @return \Randock\PostNL\BulkMailApi\StructType\GetValidationResultV1Response|bool
     */
    public function GetValidationResultV1(\Randock\PostNL\BulkMailApi\StructType\GetValidationResultV1 $parameters)
    {
        try {
            $this->setResult($resultGetValidationResultV1 = $this->getSoapClient()->__soapCall('GetValidationResultV1', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetValidationResultV1;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetValidationAndSortingResultV1
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Randock\PostNL\BulkMailApi\StructType\GetValidationAndSortingResultV1 $parameters
     * @return \Randock\PostNL\BulkMailApi\StructType\GetValidationAndSortingResultV1Response|bool
     */
    public function GetValidationAndSortingResultV1(\Randock\PostNL\BulkMailApi\StructType\GetValidationAndSortingResultV1 $parameters)
    {
        try {
            $this->setResult($resultGetValidationAndSortingResultV1 = $this->getSoapClient()->__soapCall('GetValidationAndSortingResultV1', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetValidationAndSortingResultV1;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPackagingInformationV1
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Randock\PostNL\BulkMailApi\StructType\GetPackagingInformationV1 $parameters
     * @return \Randock\PostNL\BulkMailApi\StructType\GetPackagingInformationV1Response|bool
     */
    public function GetPackagingInformationV1(\Randock\PostNL\BulkMailApi\StructType\GetPackagingInformationV1 $parameters)
    {
        try {
            $this->setResult($resultGetPackagingInformationV1 = $this->getSoapClient()->__soapCall('GetPackagingInformationV1', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPackagingInformationV1;
        } catch (SoapFault $soapFault) {
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
