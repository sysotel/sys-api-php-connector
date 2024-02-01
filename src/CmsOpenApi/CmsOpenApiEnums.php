<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi;

enum CmsOpenApiEnums: string
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

    const PROPERTY_POLICY_STATUS_ACTIVE = 'ACTIVE';
    const PROPERTY_POLICY_STATUS_INACTIVE = 'INACTIVE';

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


    const PROPERTY_POLICY_SHOWCASE_TYPE_PARAGRAPH = 'PARAGRAPH';
    const PROPERTY_POLICY_SHOWCASE_TYPE_MULTILINE = 'MULTILINE';

    const EARLY_CHECK_IN_STATUS_ALLOWED = 'ALLOWED';
    const EARLY_CHECK_IN_STATUS_NOT_ALLOWED = 'NOT_ALLOWED';
    const EARLY_CHECK_IN_STATUS_AS_PER_AVAILABILITY = 'AS_PER_AVAILABILITY';

    const LATE_CHECK_OUT_STATUS_ALLOWED = 'ALLOWED';
    const LATE_CHECK_OUT_STATUS_NOT_ALLOWED = 'NOT_ALLOWED';
    const LATE_CHECK_OUT_STATUS_AS_PER_AVAILABILITY = 'AS_PER_AVAILABILITY';


    const PENALTY_TYPE_PERC = 'PERC';
    const PENALTY_TYPE_FLAT = 'FLAT';

    const CANCELLATION_POLICY_STATUS_ACTIVE = 'ACTIVE';
    const CANCELLATION_POLICY_STATUS_INACTIVE = 'INACTIVE';

    const PROMOTION_CATEGORY_PROMOTION = 'PROMOTION';
    const PROMOTION_CATEGORY_PROMO_CODE = 'PROMO_CODE';

    const PROMOTION_DISCOUNT_TYPE_PERCENTAGE = 'PERCENTAGE';
    const PROMOTION_DISCOUNT_TYPE_FLAT = 'FLAT';

    const PROMOTION_TYPE_BASIC = 'BASIC';
    const PROMOTION_TYPE_EARLY_BIRD = 'EARLY_BIRD';
    const PROMOTION_TYPE_LAST_MINUTE = 'LAST_MINUTE';

    const PROMOTION_DATE_RESTRICTION_TYPE_STAY_DATE = 'STAY_DATE';
    const PROMOTION_DATE_RESTRICTION_TYPE_STAY_DATE_BOOKING_DATE = 'STAY_DATE_BOOKING_DATE';

    const PROMOTION_STATUS_ACTIVE = 'ACTIVE';
    const PROMOTION_STATUS_INACTIVE = 'ACTIVE';

    const PROMOTION_APPLICABLE_ON_SPACE_BASE_AMOUNT = 'SPACE_BASE_AMOUNT';
    const PROMOTION_APPLICABLE_ON_SPACE_TOTAL_AMOUNT = 'SPACE_TOTAL_AMOUNT';

    const CURRENCY_AED = 'AED';
    const CURRENCY_AFN = 'AFN';
    const CURRENCY_ALL = 'ALL';
    const CURRENCY_AMD = 'AMD';
    const CURRENCY_ANG = 'ANG';
    const CURRENCY_AOA = 'AOA';
    const CURRENCY_ARS = 'ARS';
    const CURRENCY_AUD = 'AUD';
    const CURRENCY_AWG = 'AWG';
    const CURRENCY_AZN = 'AZN';
    const CURRENCY_BAM = 'BAM';
    const CURRENCY_BBD = 'BBD';
    const CURRENCY_BDT = 'BDT';
    const CURRENCY_BGN = 'BGN';
    const CURRENCY_BHD = 'BHD';
    const CURRENCY_BIF = 'BIF';
    const CURRENCY_BMD = 'BMD';
    const CURRENCY_BND = 'BND';
    const CURRENCY_BOB = 'BOB';
    const CURRENCY_BOV = 'BOV';
    const CURRENCY_BRL = 'BRL';
    const CURRENCY_BSD = 'BSD';
    const CURRENCY_BTN = 'BTN';
    const CURRENCY_BWP = 'BWP';
    const CURRENCY_BYN = 'BYN';
    const CURRENCY_BZD = 'BZD';
    const CURRENCY_CAD = 'CAD';
    const CURRENCY_CDF = 'CDF';
    const CURRENCY_CHE = 'CHE';
    const CURRENCY_CHF = 'CHF';
    const CURRENCY_CHW = 'CHW';
    const CURRENCY_CLF = 'CLF';
    const CURRENCY_CLP = 'CLP';
    const CURRENCY_COP = 'COP';
    const CURRENCY_COU = 'COU';
    const CURRENCY_CRC = 'CRC';
    const CURRENCY_CUP = 'CUP';
    const CURRENCY_CVE = 'CVE';
    const CURRENCY_CZK = 'CZK';
    const CURRENCY_DJF = 'DJF';
    const CURRENCY_DKK = 'DKK';
    const CURRENCY_DOP = 'DOP';
    const CURRENCY_DZD = 'DZD';
    const CURRENCY_EGP = 'EGP';
    const CURRENCY_ERN = 'ERN';
    const CURRENCY_ETB = 'ETB';
    const CURRENCY_EUR = 'EUR';
    const CURRENCY_FJD = 'FJD';
    const CURRENCY_FKP = 'FKP';
    const CURRENCY_GBP = 'GBP';
    const CURRENCY_GEL = 'GEL';
    const CURRENCY_GHS = 'GHS';
    const CURRENCY_GIP = 'GIP';
    const CURRENCY_GMD = 'GMD';
    const CURRENCY_GNF = 'GNF';
    const CURRENCY_GTQ = 'GTQ';
    const CURRENCY_GYD = 'GYD';
    const CURRENCY_HKD = 'HKD';
    const CURRENCY_HNL = 'HNL';
    const CURRENCY_HTG = 'HTG';
    const CURRENCY_HUF = 'HUF';
    const CURRENCY_IDR = 'IDR';
    const CURRENCY_ILS = 'ILS';
    const CURRENCY_INR = 'INR';
    const CURRENCY_IQD = 'IQD';
    const CURRENCY_IRR = 'IRR';
    const CURRENCY_ISK = 'ISK';
    const CURRENCY_JMD = 'JMD';
    const CURRENCY_JOD = 'JOD';
    const CURRENCY_JPY = 'JPY';
    const CURRENCY_KES = 'KES';
    const CURRENCY_KGS = 'KGS';
    const CURRENCY_KHR = 'KHR';
    const CURRENCY_KMF = 'KMF';
    const CURRENCY_KPW = 'KPW';
    const CURRENCY_KRW = 'KRW';
    const CURRENCY_KWD = 'KWD';
    const CURRENCY_KYD = 'KYD';
    const CURRENCY_KZT = 'KZT';
    const CURRENCY_LAK = 'LAK';
    const CURRENCY_LBP = 'LBP';
    const CURRENCY_LKR = 'LKR';
    const CURRENCY_LRD = 'LRD';
    const CURRENCY_LSL = 'LSL';
    const CURRENCY_LYD = 'LYD';
    const CURRENCY_MAD = 'MAD';
    const CURRENCY_MDL = 'MDL';
    const CURRENCY_MGA = 'MGA';
    const CURRENCY_MKD = 'MKD';
    const CURRENCY_MMK = 'MMK';
    const CURRENCY_MNT = 'MNT';
    const CURRENCY_MOP = 'MOP';
    const CURRENCY_MRU = 'MRU';
    const CURRENCY_MUR = 'MUR';
    const CURRENCY_MVR = 'MVR';
    const CURRENCY_MWK = 'MWK';
    const CURRENCY_MXN = 'MXN';
    const CURRENCY_MXV = 'MXV';
    const CURRENCY_MYR = 'MYR';
    const CURRENCY_MZN = 'MZN';
    const CURRENCY_NAD = 'NAD';
    const CURRENCY_NGN = 'NGN';
    const CURRENCY_NIO = 'NIO';
    const CURRENCY_NOK = 'NOK';
    const CURRENCY_NPR = 'NPR';
    const CURRENCY_NZD = 'NZD';
    const CURRENCY_OMR = 'OMR';
    const CURRENCY_PAB = 'PAB';
    const CURRENCY_PEN = 'PEN';
    const CURRENCY_PGK = 'PGK';
    const CURRENCY_PHP = 'PHP';
    const CURRENCY_PKR = 'PKR';
    const CURRENCY_PLN = 'PLN';
    const CURRENCY_PYG = 'PYG';
    const CURRENCY_QAR = 'QAR';
    const CURRENCY_RON = 'RON';
    const CURRENCY_RSD = 'RSD';
    const CURRENCY_CNY = 'CNY';
    const CURRENCY_RUB = 'RUB';
    const CURRENCY_RWF = 'RWF';
    const CURRENCY_SAR = 'SAR';
    const CURRENCY_SBD = 'SBD';
    const CURRENCY_SCR = 'SCR';
    const CURRENCY_SDG = 'SDG';
    const CURRENCY_SEK = 'SEK';
    const CURRENCY_SGD = 'SGD';
    const CURRENCY_SHP = 'SHP';
    const CURRENCY_SLE = 'SLE';
    const CURRENCY_SLL = 'SLL';
    const CURRENCY_SOS = 'SOS';
    const CURRENCY_SRD = 'SRD';
    const CURRENCY_SSP = 'SSP';
    const CURRENCY_STN = 'STN';
    const CURRENCY_SVC = 'SVC';
    const CURRENCY_SYP = 'SYP';
    const CURRENCY_SZL = 'SZL';
    const CURRENCY_THB = 'THB';
    const CURRENCY_TJS = 'TJS';
    const CURRENCY_TMT = 'TMT';
    const CURRENCY_TND = 'TND';
    const CURRENCY_TOP = 'TOP';
    const CURRENCY_TRY = 'TRY';
    const CURRENCY_TTD = 'TTD';
    const CURRENCY_TWD = 'TWD';
    const CURRENCY_TZS = 'TZS';
    const CURRENCY_UAH = 'UAH';
    const CURRENCY_UGX = 'UGX';
    const CURRENCY_USD = 'USD';
    const CURRENCY_USN = 'USN';
    const CURRENCY_UYI = 'UYI';
    const CURRENCY_UYU = 'UYU';
    const CURRENCY_UYW = 'UYW';
    const CURRENCY_UZS = 'UZS';
    const CURRENCY_VED = 'VED';
    const CURRENCY_VES = 'VES';
    const CURRENCY_VND = 'VND';
    const CURRENCY_VUV = 'VUV';
    const CURRENCY_WST = 'WST';
    const CURRENCY_XAF = 'XAF';
    const CURRENCY_XAG = 'XAG';
    const CURRENCY_XAU = 'XAU';
    const CURRENCY_XBA = 'XBA';
    const CURRENCY_XBB = 'XBB';
    const CURRENCY_XBC = 'XBC';
    const CURRENCY_XBD = 'XBD';
    const CURRENCY_XCD = 'XCD';
    const CURRENCY_XDR = 'XDR';
    const CURRENCY_XOF = 'XOF';
    const CURRENCY_XPD = 'XPD';
    const CURRENCY_XPF = 'XPF';
    const CURRENCY_XPT = 'XPT';
    const CURRENCY_XSU = 'XSU';
    const CURRENCY_XTS = 'XTS';
    const CURRENCY_XUA = 'XUA';
    const CURRENCY_XXX = 'XXX';
    const CURRENCY_YER = 'YER';
    const CURRENCY_ZAR = 'ZAR';
    const CURRENCY_ZMW = 'ZMW';
    const CURRENCY_ZWL = 'ZWL';


    const PROPERTY_AMENITY_BASIC_FACILITIES = 'BASIC_FACILITIES';
    const PROPERTY_AMENITY_GENERAL_SERVICES = 'GENERAL_SERVICES';
    const PROPERTY_AMENITY_OUTDOOR_ACTIVITIES_AND_SPORTS = 'OUTDOOR_ACTIVITIES_AND_SPORTS';
    const PROPERTY_AMENITY_COMMON_AREA = 'COMMON_AREA';
    const PROPERTY_AMENITY_FOOD_DRINKS = 'FOOD_DRINKS';
    const PROPERTY_AMENITY_HEALTH_WELLNESS = 'HEALTH_WELLNESS';
    const PROPERTY_AMENITY_BUSINESS = 'BUSINESS';
    const PROPERTY_AMENITY_BEAUTY_AND_SPA = 'BEAUTY_AND_SPA';
    const PROPERTY_AMENITY_SECURITY = 'SECURITY';
    const PROPERTY_AMENITY_TRANSFERS = 'TRANSFERS';
    const PROPERTY_AMENITY_SHOPPING = 'SHOPPING';
    const PROPERTY_AMENITY_ENTERTAINMENT = 'ENTERTAINMENT';
    const PROPERTY_AMENITY_MEDIA_TECHNOLOGY = 'MEDIA_TECHNOLOGY';
    const PROPERTY_AMENITY_PAYMENT_SERVICES = 'PAYMENT_SERVICES';
    const PROPERTY_AMENITY_INDOOR_ACTIVITIES_AND_SPORTS = 'INDOOR_ACTIVITIES_AND_SPORTS';
    const PROPERTY_AMENITY_FAMILY_AND_KIDS = 'FAMILY_AND_KIDS';
    const PROPERTY_AMENITY_SAFETY_HYGIENE = 'SAFETY_HYGIENE';
    const PROPERTY_AMENITY_PET_ESSENTIALS = 'PET_ESSENTIALS';

    const SPACE_AMENITY_POPULAR_WITH_GUESTS = 'POPULAR_WITH_GUESTS';
    const SPACE_AMENITY_BATHROOM = 'BATHROOM';
    const SPACE_AMENITY_SPACE_FEATURES = 'SPACE_FEATURES';
    const SPACE_AMENITY_MEDIA_ENTERTAINMENT = 'MEDIA_ENTERTAINMENT';
    const SPACE_AMENITY_FOOD_AND_DRINKS = 'FOOD_AND_DRINKS';
    const SPACE_AMENITY_KITCHEN_AND_APPLIANCES = 'KITCHEN_AND_APPLIANCES';
    const SPACE_AMENITY_BEDS_AND_BLANKET = 'BEDS_AND_BLANKET';
    const SPACE_AMENITY_SAFETY_AND_SECURITY = 'SAFETY_AND_SECURITY';
    const SPACE_AMENITY_CHILDCARE = 'CHILDCARE';
    const SPACE_AMENITY_OTHER = 'OTHER';

    const PLACE_BUSINESS_STATUS_CLOSED_PERMANENTLY = 'CLOSED_PERMANENTLY';
    const PLACE_BUSINESS_STATUS_OPERATIONAL = 'OPERATIONAL';
    const PLACE_BUSINESS_STATUS_BUSINESS_STATUS_UNSPECIFIED = 'BUSINESS_STATUS_UNSPECIFIED    ';
    const PLACE_BUSINESS_STATUS_CLOSED_TEMPORARILY = 'CLOSED_TEMPORARILY    ';
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

    /**
     * @return string[]
     */
    public function currencies(): array
    {
        return [
            self::CURRENCY_AED,
            self::CURRENCY_AFN,
            self::CURRENCY_ALL,
            self::CURRENCY_AMD,
            self::CURRENCY_ANG,
            self::CURRENCY_AOA,
            self::CURRENCY_ARS,
            self::CURRENCY_AUD,
            self::CURRENCY_AWG,
            self::CURRENCY_AZN,
            self::CURRENCY_BAM,
            self::CURRENCY_BBD,
            self::CURRENCY_BDT,
            self::CURRENCY_BGN,
            self::CURRENCY_BHD,
            self::CURRENCY_BIF,
            self::CURRENCY_BMD,
            self::CURRENCY_BND,
            self::CURRENCY_BOB,
            self::CURRENCY_BOV,
            self::CURRENCY_BRL,
            self::CURRENCY_BSD,
            self::CURRENCY_BTN,
            self::CURRENCY_BWP,
            self::CURRENCY_BYN,
            self::CURRENCY_BZD,
            self::CURRENCY_CAD,
            self::CURRENCY_CDF,
            self::CURRENCY_CHE,
            self::CURRENCY_CHF,
            self::CURRENCY_CHW,
            self::CURRENCY_CLF,
            self::CURRENCY_CLP,
            self::CURRENCY_COP,
            self::CURRENCY_COU,
            self::CURRENCY_CRC,
            self::CURRENCY_CUP,
            self::CURRENCY_CVE,
            self::CURRENCY_CZK,
            self::CURRENCY_DJF,
            self::CURRENCY_DKK,
            self::CURRENCY_DOP,
            self::CURRENCY_DZD,
            self::CURRENCY_EGP,
            self::CURRENCY_ERN,
            self::CURRENCY_ETB,
            self::CURRENCY_EUR,
            self::CURRENCY_FJD,
            self::CURRENCY_FKP,
            self::CURRENCY_GBP,
            self::CURRENCY_GEL,
            self::CURRENCY_GHS,
            self::CURRENCY_GIP,
            self::CURRENCY_GMD,
            self::CURRENCY_GNF,
            self::CURRENCY_GTQ,
            self::CURRENCY_GYD,
            self::CURRENCY_HKD,
            self::CURRENCY_HNL,
            self::CURRENCY_HTG,
            self::CURRENCY_HUF,
            self::CURRENCY_IDR,
            self::CURRENCY_ILS,
            self::CURRENCY_INR,
            self::CURRENCY_IQD,
            self::CURRENCY_IRR,
            self::CURRENCY_ISK,
            self::CURRENCY_JMD,
            self::CURRENCY_JOD,
            self::CURRENCY_JPY,
            self::CURRENCY_KES,
            self::CURRENCY_KGS,
            self::CURRENCY_KHR,
            self::CURRENCY_KMF,
            self::CURRENCY_KPW,
            self::CURRENCY_KRW,
            self::CURRENCY_KWD,
            self::CURRENCY_KYD,
            self::CURRENCY_KZT,
            self::CURRENCY_LAK,
            self::CURRENCY_LBP,
            self::CURRENCY_LKR,
            self::CURRENCY_LRD,
            self::CURRENCY_LSL,
            self::CURRENCY_LYD,
            self::CURRENCY_MAD,
            self::CURRENCY_MDL,
            self::CURRENCY_MGA,
            self::CURRENCY_MKD,
            self::CURRENCY_MMK,
            self::CURRENCY_MNT,
            self::CURRENCY_MOP,
            self::CURRENCY_MRU,
            self::CURRENCY_MUR,
            self::CURRENCY_MVR,
            self::CURRENCY_MWK,
            self::CURRENCY_MXN,
            self::CURRENCY_MXV,
            self::CURRENCY_MYR,
            self::CURRENCY_MZN,
            self::CURRENCY_NAD,
            self::CURRENCY_NGN,
            self::CURRENCY_NIO,
            self::CURRENCY_NOK,
            self::CURRENCY_NPR,
            self::CURRENCY_NZD,
            self::CURRENCY_OMR,
            self::CURRENCY_PAB,
            self::CURRENCY_PEN,
            self::CURRENCY_PGK,
            self::CURRENCY_PHP,
            self::CURRENCY_PKR,
            self::CURRENCY_PLN,
            self::CURRENCY_PYG,
            self::CURRENCY_QAR,
            self::CURRENCY_RON,
            self::CURRENCY_RSD,
            self::CURRENCY_CNY,
            self::CURRENCY_RUB,
            self::CURRENCY_RWF,
            self::CURRENCY_SAR,
            self::CURRENCY_SBD,
            self::CURRENCY_SCR,
            self::CURRENCY_SDG,
            self::CURRENCY_SEK,
            self::CURRENCY_SGD,
            self::CURRENCY_SHP,
            self::CURRENCY_SLE,
            self::CURRENCY_SLL,
            self::CURRENCY_SOS,
            self::CURRENCY_SRD,
            self::CURRENCY_SSP,
            self::CURRENCY_STN,
            self::CURRENCY_SVC,
            self::CURRENCY_SYP,
            self::CURRENCY_SZL,
            self::CURRENCY_THB,
            self::CURRENCY_TJS,
            self::CURRENCY_TMT,
            self::CURRENCY_TND,
            self::CURRENCY_TOP,
            self::CURRENCY_TRY,
            self::CURRENCY_TTD,
            self::CURRENCY_TWD,
            self::CURRENCY_TZS,
            self::CURRENCY_UAH,
            self::CURRENCY_UGX,
            self::CURRENCY_USD,
            self::CURRENCY_USN,
            self::CURRENCY_UYI,
            self::CURRENCY_UYU,
            self::CURRENCY_UYW,
            self::CURRENCY_UZS,
            self::CURRENCY_VED,
            self::CURRENCY_VES,
            self::CURRENCY_VND,
            self::CURRENCY_VUV,
            self::CURRENCY_WST,
            self::CURRENCY_XAF,
            self::CURRENCY_XAG,
            self::CURRENCY_XAU,
            self::CURRENCY_XBA,
            self::CURRENCY_XBB,
            self::CURRENCY_XBC,
            self::CURRENCY_XBD,
            self::CURRENCY_XCD,
            self::CURRENCY_XDR,
            self::CURRENCY_XOF,
            self::CURRENCY_XPD,
            self::CURRENCY_XPF,
            self::CURRENCY_XPT,
            self::CURRENCY_XSU,
            self::CURRENCY_XTS,
            self::CURRENCY_XUA,
            self::CURRENCY_XXX,
            self::CURRENCY_YER,
            self::CURRENCY_ZAR,
            self::CURRENCY_ZMW,
            self::CURRENCY_ZWL,
        ];
    }

    /**
     * @return string[]
     */
    public function promotionCategories(): array
    {
        return [
            self::PROMOTION_CATEGORY_PROMOTION,
            self::PROMOTION_CATEGORY_PROMO_CODE,
        ];
    }

    /**
     * @return string[]
     */
    public function promotionTypes(): array
    {
        return [
            self::PROMOTION_TYPE_BASIC,
            self::PROMOTION_TYPE_LAST_MINUTE,
            self::PROMOTION_TYPE_EARLY_BIRD,
        ];
    }

    /**
     * @return string[]
     */
    public function promotionStatuses(): array
    {
        return [
            self::PROMOTION_STATUS_ACTIVE,
            self::PROMOTION_STATUS_INACTIVE,
        ];
    }

    /**
     * @return string[]
     */
    public function promotionDiscountTypes(): array
    {
        return [
            self::PROMOTION_DISCOUNT_TYPE_PERCENTAGE,
            self::PROMOTION_DISCOUNT_TYPE_FLAT,
        ];
    }

    /**
     * @return string[]
     */
    public function promotionApplicableOnOptions(): array
    {
        return [
            self::PROMOTION_APPLICABLE_ON_SPACE_BASE_AMOUNT,
            self::PROMOTION_APPLICABLE_ON_SPACE_TOTAL_AMOUNT,
        ];
    }

    /**
     * @return string[]
     */
    public function promotionDateRestrictionTypes(): array
    {
        return [
            self::PROMOTION_DATE_RESTRICTION_TYPE_STAY_DATE,
            self::PROMOTION_DATE_RESTRICTION_TYPE_STAY_DATE_BOOKING_DATE,
        ];
    }

    /**
     * @return string[]
     */
    public static function propertyAmenityCategories(): array
    {
        return [
            self::PROPERTY_AMENITY_BASIC_FACILITIES,
            self::PROPERTY_AMENITY_GENERAL_SERVICES,
            self::PROPERTY_AMENITY_OUTDOOR_ACTIVITIES_AND_SPORTS,
            self::PROPERTY_AMENITY_COMMON_AREA,
            self::PROPERTY_AMENITY_FOOD_DRINKS,
            self::PROPERTY_AMENITY_BEAUTY_AND_SPA,
            self::PROPERTY_AMENITY_BUSINESS,
            self::PROPERTY_AMENITY_HEALTH_WELLNESS,
            self::PROPERTY_AMENITY_SECURITY,
            self::PROPERTY_AMENITY_TRANSFERS,
            self::PROPERTY_AMENITY_SHOPPING,
            self::PROPERTY_AMENITY_ENTERTAINMENT,
            self::PROPERTY_AMENITY_MEDIA_TECHNOLOGY,
            self::PROPERTY_AMENITY_PAYMENT_SERVICES,
            self::PROPERTY_AMENITY_INDOOR_ACTIVITIES_AND_SPORTS,
            self::PROPERTY_AMENITY_FAMILY_AND_KIDS,
            self::PROPERTY_AMENITY_SAFETY_HYGIENE,
            self::PROPERTY_AMENITY_PET_ESSENTIALS
        ];
    }

    /**
     * @return string[]
     */
    public static function spaceAmenityCategories(): array
    {
        return [
            self::SPACE_AMENITY_POPULAR_WITH_GUESTS,
            self::SPACE_AMENITY_BATHROOM,
            self::SPACE_AMENITY_SPACE_FEATURES,
            self::SPACE_AMENITY_MEDIA_ENTERTAINMENT,
            self::SPACE_AMENITY_FOOD_AND_DRINKS,
            self::SPACE_AMENITY_KITCHEN_AND_APPLIANCES,
            self::SPACE_AMENITY_BEDS_AND_BLANKET,
            self::SPACE_AMENITY_SAFETY_AND_SECURITY,
            self::SPACE_AMENITY_CHILDCARE,
            self::SPACE_AMENITY_OTHER,
        ];
    }

    /**
     * @return string[]
     */
    public static function placeBusinessStatuses(): array
    {
        return [
            self::PLACE_BUSINESS_STATUS_CLOSED_PERMANENTLY,
            self::PLACE_BUSINESS_STATUS_OPERATIONAL,
            self::PLACE_BUSINESS_STATUS_BUSINESS_STATUS_UNSPECIFIED,
            self::PLACE_BUSINESS_STATUS_CLOSED_TEMPORARILY,
        ];
    }
}
