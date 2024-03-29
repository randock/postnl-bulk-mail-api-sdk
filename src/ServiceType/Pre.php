<?php

namespace Randock\PostNL\BulkMailApi\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Pre ServiceType
 * @subpackage Services
 */
class Pre extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named PreAdviceBulkMailOrderV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Randock\PostNL\BulkMailApi\StructType\PreAdviceBulkMailOrderV2 $parameters
     * @return \Randock\PostNL\BulkMailApi\StructType\PreAdviceBulkMailOrderV2Response|bool
     */
    public function PreAdviceBulkMailOrderV2(\Randock\PostNL\BulkMailApi\StructType\PreAdviceBulkMailOrderV2 $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->__soapCall('PreAdviceBulkMailOrderV2', array(
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
     * @return \Randock\PostNL\BulkMailApi\StructType\PreAdviceBulkMailOrderV2Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
