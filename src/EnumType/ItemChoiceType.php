<?php

namespace Randock\PostNL\BulkMailApi\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ItemChoiceType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ItemChoiceType
 * @subpackage Enumerations
 */
class ItemChoiceType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Duration'
     * @return string 'Duration'
     */
    const VALUE_DURATION = 'Duration';
    /**
     * Constant for value 'EndDateTime'
     * @return string 'EndDateTime'
     */
    const VALUE_END_DATE_TIME = 'EndDateTime';
    /**
     * Return allowed values
     * @uses self::VALUE_DURATION
     * @uses self::VALUE_END_DATE_TIME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DURATION,
            self::VALUE_END_DATE_TIME,
        );
    }
}
