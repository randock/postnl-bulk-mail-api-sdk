<?php

namespace Randock\PostNL\BulkMailApi\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ItemsChoiceType1 EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ItemsChoiceType1
 * @subpackage Enumerations
 */
class ItemsChoiceType1 extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BuildingName'
     * @return string 'BuildingName'
     */
    const VALUE_BUILDING_NAME = 'BuildingName';
    /**
     * Constant for value 'BuildingNumber'
     * @return string 'BuildingNumber'
     */
    const VALUE_BUILDING_NUMBER = 'BuildingNumber';
    /**
     * Constant for value 'BuildingNumberDesignation'
     * @return string 'BuildingNumberDesignation'
     */
    const VALUE_BUILDING_NUMBER_DESIGNATION = 'BuildingNumberDesignation';
    /**
     * Constant for value 'BuildingNumberExtension'
     * @return string 'BuildingNumberExtension'
     */
    const VALUE_BUILDING_NUMBER_EXTENSION = 'BuildingNumberExtension';
    /**
     * Constant for value 'BusinessReplyNumber'
     * @return string 'BusinessReplyNumber'
     */
    const VALUE_BUSINESS_REPLY_NUMBER = 'BusinessReplyNumber';
    /**
     * Constant for value 'DeliveryPointCode'
     * @return string 'DeliveryPointCode'
     */
    const VALUE_DELIVERY_POINT_CODE = 'DeliveryPointCode';
    /**
     * Constant for value 'Floor'
     * @return string 'Floor'
     */
    const VALUE_FLOOR = 'Floor';
    /**
     * Constant for value 'HouseBoatReference'
     * @return string 'HouseBoatReference'
     */
    const VALUE_HOUSE_BOAT_REFERENCE = 'HouseBoatReference';
    /**
     * Constant for value 'HouseTrailerReference'
     * @return string 'HouseTrailerReference'
     */
    const VALUE_HOUSE_TRAILER_REFERENCE = 'HouseTrailerReference';
    /**
     * Constant for value 'LineFive'
     * @return string 'LineFive'
     */
    const VALUE_LINE_FIVE = 'LineFive';
    /**
     * Constant for value 'LineFour'
     * @return string 'LineFour'
     */
    const VALUE_LINE_FOUR = 'LineFour';
    /**
     * Constant for value 'LineOne'
     * @return string 'LineOne'
     */
    const VALUE_LINE_ONE = 'LineOne';
    /**
     * Constant for value 'LineThree'
     * @return string 'LineThree'
     */
    const VALUE_LINE_THREE = 'LineThree';
    /**
     * Constant for value 'LineTwo'
     * @return string 'LineTwo'
     */
    const VALUE_LINE_TWO = 'LineTwo';
    /**
     * Constant for value 'PostApartNumber'
     * @return string 'PostApartNumber'
     */
    const VALUE_POST_APART_NUMBER = 'PostApartNumber';
    /**
     * Constant for value 'PostOfficeBox'
     * @return string 'PostOfficeBox'
     */
    const VALUE_POST_OFFICE_BOX = 'PostOfficeBox';
    /**
     * Constant for value 'StreetName'
     * @return string 'StreetName'
     */
    const VALUE_STREET_NAME = 'StreetName';
    /**
     * Constant for value 'StreetNameShort'
     * @return string 'StreetNameShort'
     */
    const VALUE_STREET_NAME_SHORT = 'StreetNameShort';
    /**
     * Constant for value 'Unit'
     * @return string 'Unit'
     */
    const VALUE_UNIT = 'Unit';
    /**
     * Return allowed values
     * @uses self::VALUE_BUILDING_NAME
     * @uses self::VALUE_BUILDING_NUMBER
     * @uses self::VALUE_BUILDING_NUMBER_DESIGNATION
     * @uses self::VALUE_BUILDING_NUMBER_EXTENSION
     * @uses self::VALUE_BUSINESS_REPLY_NUMBER
     * @uses self::VALUE_DELIVERY_POINT_CODE
     * @uses self::VALUE_FLOOR
     * @uses self::VALUE_HOUSE_BOAT_REFERENCE
     * @uses self::VALUE_HOUSE_TRAILER_REFERENCE
     * @uses self::VALUE_LINE_FIVE
     * @uses self::VALUE_LINE_FOUR
     * @uses self::VALUE_LINE_ONE
     * @uses self::VALUE_LINE_THREE
     * @uses self::VALUE_LINE_TWO
     * @uses self::VALUE_POST_APART_NUMBER
     * @uses self::VALUE_POST_OFFICE_BOX
     * @uses self::VALUE_STREET_NAME
     * @uses self::VALUE_STREET_NAME_SHORT
     * @uses self::VALUE_UNIT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUILDING_NAME,
            self::VALUE_BUILDING_NUMBER,
            self::VALUE_BUILDING_NUMBER_DESIGNATION,
            self::VALUE_BUILDING_NUMBER_EXTENSION,
            self::VALUE_BUSINESS_REPLY_NUMBER,
            self::VALUE_DELIVERY_POINT_CODE,
            self::VALUE_FLOOR,
            self::VALUE_HOUSE_BOAT_REFERENCE,
            self::VALUE_HOUSE_TRAILER_REFERENCE,
            self::VALUE_LINE_FIVE,
            self::VALUE_LINE_FOUR,
            self::VALUE_LINE_ONE,
            self::VALUE_LINE_THREE,
            self::VALUE_LINE_TWO,
            self::VALUE_POST_APART_NUMBER,
            self::VALUE_POST_OFFICE_BOX,
            self::VALUE_STREET_NAME,
            self::VALUE_STREET_NAME_SHORT,
            self::VALUE_UNIT,
        );
    }
}
