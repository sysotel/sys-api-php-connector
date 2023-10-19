<?php

namespace SYSOTEL\APP\ApiConnector\ApiServices;

abstract class ApiCall
{
    public abstract function execute(): ApiResponseContext;
}
