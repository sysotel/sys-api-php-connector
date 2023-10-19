<?php

namespace SYSOTEL\APP\ApiConnector\ApiServices;

class ApiHelpers
{
    public static function isJson(string $string): bool
    {
        json_decode($string);

        return json_last_error() === JSON_ERROR_NONE;
    }
}
