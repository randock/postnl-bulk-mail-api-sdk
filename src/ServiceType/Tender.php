<?php

namespace Randock\PostNL\BulkMailApi\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Tender ServiceType
 * @subpackage Services
 */
class Tender extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named TenderBulkMailOrderV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Randock\PostNL\BulkMailApi\StructType\TenderBulkMailOrderV2 $parameters
     * @return \Randock\PostNL\BulkMailApi\StructType\TenderBulkMailOrderV2Response|bool
     */
    public function TenderBulkMailOrderV2(\Randock\PostNL\BulkMailApi\StructType\TenderBulkMailOrderV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('TenderBulkMailOrderV2', array(
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
     * @return \Randock\PostNL\BulkMailApi\StructType\TenderBulkMailOrderV2Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
