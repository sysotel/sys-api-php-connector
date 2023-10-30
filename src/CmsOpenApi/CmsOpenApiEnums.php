<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi;

enum CmsOpenApiEnums
{
    const LOCATION_TYPE_COUNTRY = 'COUNTRY';
    const LOCATION_TYPE_STATE = 'STATE';
    const LOCATION_TYPE_CITY = 'CITY';
    const LOCATION_TYPE_AREA = 'AREA';

    const CHANNEL_ID_AGGREGATE_INTELLIGENCE = 'AGGREGATE_INTELLIGENCE';
    const CHANNEL_ID_SYSOTEL_CMS_OPEN_API = 'SYSOTEL_CMS_OPEN_API';

    const PROPERTY_STATUS_ACTIVE = 'ACTIVE';
    const PROPERTY_STATUS_INACTIVE = 'INACTIVE';
    const PROPERTY_STATUS_BLOCKED = 'BLOCKED';

    const BOOKING_TYPE_DAILY = 'DAILY';
    const BOOKING_TYPE_HOURLY = 'HOURLY';

    const PROPERTY_STAR_RATING_ONE_STAR = 1;
    const PROPERTY_STAR_RATING_TWO_STAR = 2;
    const PROPERTY_STAR_RATING_THREE_STAR = 3;
    const PROPERTY_STAR_RATING_FOUR_STAR = 4;
    const PROPERTY_STAR_RATING_FIVE_STAR = 5;

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

    const SPACE_STAY_TYPE_PRIVATE = 'PRIVATE';
    const SPACE_STAY_TYPE_SHARED = 'SHARED';

    const SPACE_CATEGORY_APARTMENT = 'APARTMENT';
    const SPACE_CATEGORY_QUADRUPLE = 'QUADRUPLE';
    const SPACE_CATEGORY_SUITE = 'SUITE';
    const SPACE_CATEGORY_TRIPLE = 'TRIPLE';
    const SPACE_CATEGORY_TWIN = 'TWIN';
    const SPACE_CATEGORY_DOUBLE = 'DOUBLE';
    const SPACE_CATEGORY_SINGLE = 'SINGLE';
    const SPACE_CATEGORY_STUDIO = 'STUDIO';
    const SPACE_CATEGORY_FAMILY = 'FAMILY';
    const SPACE_CATEGORY_DORMITORY = 'DORMITORY';
    const SPACE_CATEGORY_BED_DORMITORY = 'BED_DORMITORY';
    const SPACE_CATEGORY_BUNGALOW = 'BUNGALOW';
    const SPACE_CATEGORY_CHALET = 'CHALET';
    const SPACE_CATEGORY_HOLIDAY_HOME = 'HOLIDAY_HOME';
    const SPACE_CATEGORY_VILLA = 'VILLA';
    const SPACE_CATEGORY_MOBILE_HOME = 'MOBILE_HOME';
    const SPACE_CATEGORY_TENT = 'TENT';
    const SPACE_CATEGORY_POWERED_SITE = 'POWERED_SITE';
    const SPACE_CATEGORY_KING = 'KING';
    const SPACE_CATEGORY_QUEEN = 'QUEEN';
    const SPACE_CATEGORY_OTHER = 'OTHER';

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

    const PROPERTY_IMAGE_TARGET_LOGO = 'LOGO';
    const PROPERTY_IMAGE_TARGET_BANNER = 'BANNER';
    const PROPERTY_IMAGE_TARGET_PROPERTY = 'PROPERTY';
    const PROPERTY_IMAGE_TARGET_SPACE = 'SPACE';
    const PROPERTY_IMAGE_TARGET_AMENITY = 'AMENITY';
    const PROPERTY_IMAGE_TARGET_GUEST_UPLOADED = 'GUEST_UPLOADED';

    const PROPERTY_IMAGE_STATUS_ACTIVE = 'ACTIVE';
    const PROPERTY_IMAGE_STATUS_INACTIVE = 'INACTIVE';
    const PROPERTY_IMAGE_STATUS_REJECTED = 'REJECTED';
    const PROPERTY_IMAGE_STATUS_DELETED = 'DELETED';

    const PROPERTY_CONTACT_STATUS_ACTIVE = 'ACTIVE';
    const PROPERTY_CONTACT_STATUS_EXPIRED = 'EXPIRED';

    const PROPERTY_CONTACT_TYPE_GENERAL_INQUIRY = 'GENERAL_INQUIRY';
    const PROPERTY_CONTACT_TYPE_RESERVATION = 'RESERVATION';
    const PROPERTY_CONTACT_TYPE_BOOKING_INQUIRY = 'BOOKING_INQUIRY';

    const PROPERTY_CONTACT_OWNED_BY_OWNER = 'OWNER';
    const PROPERTY_CONTACT_OWNED_BY_EXTERNAL_REVENUE_MANAGER = 'EXTERNAL_REVENUE_MANAGER';
    const PROPERTY_CONTACT_OWNED_BY_IN_HOUSE_REVENUE_MANAGER = 'IN_HOUSE_REVENUE_MANAGER';
    const PROPERTY_CONTACT_OWNED_BY_GENERAL_MANAGER = 'GENERAL_MANAGER';
    const PROPERTY_CONTACT_OWNED_BY_FRONT_DESK = 'FRONT_DESK';
    const PROPERTY_CONTACT_OWNED_BY_UNKNOWN = 'UNKNOWN';

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
    public static function spaceCategories(): array
    {
        return [
            self::SPACE_CATEGORY_APARTMENT,
            self::SPACE_CATEGORY_QUADRUPLE,
            self::SPACE_CATEGORY_SUITE,
            self::SPACE_CATEGORY_TRIPLE,
            self::SPACE_CATEGORY_TWIN,
            self::SPACE_CATEGORY_DOUBLE,
            self::SPACE_CATEGORY_SINGLE,
            self::SPACE_CATEGORY_STUDIO,
            self::SPACE_CATEGORY_FAMILY,
            self::SPACE_CATEGORY_DORMITORY,
            self::SPACE_CATEGORY_BED_DORMITORY,
            self::SPACE_CATEGORY_BUNGALOW,
            self::SPACE_CATEGORY_CHALET,
            self::SPACE_CATEGORY_HOLIDAY_HOME,
            self::SPACE_CATEGORY_VILLA,
            self::SPACE_CATEGORY_MOBILE_HOME,
            self::SPACE_CATEGORY_TENT,
            self::SPACE_CATEGORY_POWERED_SITE,
            self::SPACE_CATEGORY_KING,
            self::SPACE_CATEGORY_QUEEN,
            self::SPACE_CATEGORY_OTHER,
         ];
    }

    /**
     * @return string[]
     */
    public static function spaceStayTypes(): array
    {
        return [
            self::SPACE_STAY_TYPE_PRIVATE,
            self::SPACE_STAY_TYPE_SHARED,
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

    /**
     * @return string[]
     */
    public static function propertyStarRatings(): array
    {
        return [
            self::PROPERTY_STAR_RATING_ONE_STAR,
            self::PROPERTY_STAR_RATING_TWO_STAR,
            self::PROPERTY_STAR_RATING_THREE_STAR,
            self::PROPERTY_STAR_RATING_FOUR_STAR,
            self::PROPERTY_STAR_RATING_FIVE_STAR,
        ];
    }

    /**
     * @return string[]
     */
    public static function locationTypes(): array
    {
        return [
            self::LOCATION_TYPE_AREA,
            self::LOCATION_TYPE_CITY,
            self::LOCATION_TYPE_COUNTRY,
            self::LOCATION_TYPE_STATE,
        ];
    }

    /**
     * @return string[]
     */
    public function channelIds(): array
    {
        return [
            self::CHANNEL_ID_SYSOTEL_CMS_OPEN_API,
            self::CHANNEL_ID_AGGREGATE_INTELLIGENCE,
        ];
    }
}
