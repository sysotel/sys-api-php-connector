<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi;

enum CmsOpenApiEnums
{

    const PROPERTY_STATUS_ACTIVE = 'ACTIVE';
    const PROPERTY_STATUS_INACTIVE = 'INACTIVE';
    const PROPERTY_STATUS_BLOCKED = 'BLOCKED';

    const BOOKING_TYPE_DAILY = 'DAILY';
    const BOOKING_TYPE_HOURLY = 'HOURLY';

    const PROPERTY_TYPE_HOTEL = 'HOTEL';
    const PROPERTY_TYPE_RESORT = 'RESORT';
    const PROPERTY_TYPE_HOMESTAY = 'HOMESTAY';
    const PROPERTY_TYPE_VILLA = 'VILLA';
    const PROPERTY_TYPE_APARTMENT = 'APARTMENT';
    const PROPERTY_TYPE_GUEST_HOUSE = 'GUEST_HOUSE';
    const PROPERTY_TYPE_LODGE = 'LODGE';
    const PROPERTY_TYPE_HOUSEBOAT = 'HOUSEBOAT';
    const PROPERTY_TYPE_FARM_HOUSE = 'FARM_HOUSE';
    const PROPERTY_TYPE_PALACE = 'PALACE';
    const PROPERTY_TYPE_MOTEL = 'MOTEL';
    const PROPERTY_TYPE_DHARAMSHALA = 'DHARAMSHALA';
    const PROPERTY_TYPE_COTTAGE = 'COTTAGE';
    const PROPERTY_TYPE_CAMP = 'CAMP';
    const PROPERTY_TYPE_POD = 'POD';
    const PROPERTY_TYPE_OTHER = 'OTHER';

    const SPACE_STATUS_ACTIVE = 'ACTIVE';
    const SPACE_STATUS_INACTIVE = 'INACTIVE';

    const INVENTORY_ACCURACY_DAILY = 'DAILY';
    const INVENTORY_ACCURACY_HOURLY = 'HOURLY';

    const PRODUCT_STATUS_ACTIVE = 'ACTIVE';
    const PRODUCT_STATUS_INACTIVE = 'INACTIVE';

    const MEAL_PLAN_CODE_EP = 'EP';
    const MEAL_PLAN_CODE_CP = 'CP';
    const MEAL_PLAN_CODE_MAP = 'MAP';
    const MEAL_PLAN_CODE_AP = 'AP';

    /**
     * @return string[]
     */
    public static function propertyStatuses(): array
    {
        return [
            self::PROPERTY_STATUS_ACTIVE,
            self::PROPERTY_STATUS_INACTIVE,
            self::PROPERTY_STATUS_BLOCKED,
        ];
    }

    /**
     * @return string[]
     */
    public static function propertyTypes(): array
    {
        return [
            self::PROPERTY_TYPE_HOTEL,
            self::PROPERTY_TYPE_RESORT,
            self::PROPERTY_TYPE_HOMESTAY,
            self::PROPERTY_TYPE_VILLA,
            self::PROPERTY_TYPE_APARTMENT,
            self::PROPERTY_TYPE_GUEST_HOUSE,
            self::PROPERTY_TYPE_LODGE,
            self::PROPERTY_TYPE_HOUSEBOAT,
            self::PROPERTY_TYPE_FARM_HOUSE,
            self::PROPERTY_TYPE_PALACE,
            self::PROPERTY_TYPE_MOTEL,
            self::PROPERTY_TYPE_DHARAMSHALA,
            self::PROPERTY_TYPE_COTTAGE,
            self::PROPERTY_TYPE_CAMP,
            self::PROPERTY_TYPE_POD,
            self::PROPERTY_TYPE_OTHER,
        ];
    }

    /**
     * @return string[]
     */
    public static function inventoryAccuracies(): array
    {
        return [
            self::INVENTORY_ACCURACY_DAILY,
            self::INVENTORY_ACCURACY_HOURLY,
        ];
    }

    /**
     * @return string[]
     */
    public static function allowedBookingTypes(): array
    {
        return [
            self::BOOKING_TYPE_DAILY,
            self::BOOKING_TYPE_HOURLY,
        ];
    }

    /**
     * @return string[]
     */
    public static function spaceStatuses(): array
    {
        return [
            self::SPACE_STATUS_ACTIVE,
            self::SPACE_STATUS_INACTIVE,
        ];
    }

    /**
     * @return string[]
     */
    public static function productStatuses(): array
    {
        return [
            self::PRODUCT_STATUS_ACTIVE,
            self::PRODUCT_STATUS_INACTIVE,
        ];
    }

    /**
     * @return string[]
     */
    public static function mealPlanCodes(): array
    {
        return [
            self::MEAL_PLAN_CODE_EP,
            self::MEAL_PLAN_CODE_CP,
            self::MEAL_PLAN_CODE_MAP,
            self::MEAL_PLAN_CODE_AP,
        ];
    }
}
