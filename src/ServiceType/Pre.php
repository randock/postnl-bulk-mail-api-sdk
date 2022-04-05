<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

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
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Randock\PostNL\BulkMailApi\StructType\PreAdviceBulkMailOrderV2 $parameters
     * @return \Randock\PostNL\BulkMailApi\StructType\PreAdviceBulkMailOrderV2Response|bool
     */
    public function PreAdviceBulkMailOrderV2(\Randock\PostNL\BulkMailApi\StructType\PreAdviceBulkMailOrderV2 $parameters)
    {
        try {
            $this->setResult($resultPreAdviceBulkMailOrderV2 = $this->getSoapClient()->__soapCall('PreAdviceBulkMailOrderV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultPreAdviceBulkMailOrderV2;
        } catch (SoapFault $soapFault) {
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
