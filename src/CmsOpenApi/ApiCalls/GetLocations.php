<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls;

use GuzzleHttp\Psr7\Request;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApi;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApiResponse;

class GetLocations extends CmsOpenApiCall
{
    private array $query;

    /**
     * @param CmsOpenApi $api
     * @param array $query
     */
    public function __construct(CmsOpenApi $api, array $query = [])
    {
        parent::__construct($api);

        $this->query = $query;
    }

    /**
     * @return CmsOpenApiResponse
     */
    public function execute(): CmsOpenApiResponse
    {
        $request = new Request(
            method: 'GET',
            uri: $this->api->getUrl("helpers/locations?" . http_build_query($this->query)),
            headers: $this->api->prepareHeaders(),
        );

        return $this->makeApiCall($request);
    }
}
