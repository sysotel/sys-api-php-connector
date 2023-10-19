<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls;


use GuzzleHttp\Psr7\Request;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApi;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApiResponse;

abstract class CmsOpenApiCall
{
    protected CmsOpenApi $api;

    /**
     * @param CmsOpenApi $api
     */
    public function __construct(CmsOpenApi $api)
    {
        $this->api = $api;
    }

    public abstract function execute(): CmsOpenApiResponse;

    /**
     * @param Request $request
     * @return CmsOpenApiResponse
     */
    protected function makeApiCall(Request $request): CmsOpenApiResponse
    {
        return (new CmsOpenApiResponse($request))->execute();
    }
}
