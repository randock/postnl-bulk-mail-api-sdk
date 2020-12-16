<?php

namespace Randock\PostNL\BulkMailApi\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ItemsChoiceType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ItemsChoiceType
 * @subpackage Enumerations
 */
class ItemsChoiceType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CoordinateReference'
     * @return string 'CoordinateReference'
     */
    const VALUE_COORDINATE_REFERENCE = 'CoordinateReference';
    /**
     * Constant for value 'Latitude'
     * @return string 'Latitude'
     */
    const VALUE_LATITUDE = 'Latitude';
    /**
     * Constant for value 'Longitude'
     * @return string 'Longitude'
     */
    const VALUE_LONGITUDE = 'Longitude';
    /**
     * Constant for value 'AltitudeMeasure'
     * @return string 'AltitudeMeasure'
     */
    const VALUE_ALTITUDE_MEASURE = 'AltitudeMeasure';
    /**
     * Constant for value 'BAGLatitude'
     * @return string 'BAGLatitude'
     */
    const VALUE_BAGLATITUDE = 'BAGLatitude';
    /**
     * Constant for value 'BAGLongitude'
     * @return string 'BAGLongitude'
     */
    const VALUE_BAGLONGITUDE = 'BAGLongitude';
    /**
     * Constant for value 'SystemID'
     * @return string 'SystemID'
     */
    const VALUE_SYSTEM_ID = 'SystemID';
    /**
     * Return allowed values
     * @uses self::VALUE_COORDINATE_REFERENCE
     * @uses self::VALUE_LATITUDE
     * @uses self::VALUE_LONGITUDE
     * @uses self::VALUE_ALTITUDE_MEASURE
     * @uses self::VALUE_BAGLATITUDE
     * @uses self::VALUE_BAGLONGITUDE
     * @uses self::VALUE_SYSTEM_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COORDINATE_REFERENCE,
            self::VALUE_LATITUDE,
            self::VALUE_LONGITUDE,
            self::VALUE_ALTITUDE_MEASURE,
            self::VALUE_BAGLATITUDE,
            self::VALUE_BAGLONGITUDE,
            self::VALUE_SYSTEM_ID,
        );
    }
}
