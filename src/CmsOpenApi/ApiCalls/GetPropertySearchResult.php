<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls;

use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApi;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApiResponse;
use GuzzleHttp\Psr7\Request;

class GetPropertySearchResult extends CmsOpenApiCall
{
    private string|null $searchTerm;

    /**
     * @param CmsOpenApi $api
     * @param string|null $searchTerm
     */
    public function __construct(CmsOpenApi $api, ?string $searchTerm = null)
    {
        parent::__construct($api);
        $this->searchTerm = $searchTerm;
    }

    /**
     * @return CmsOpenApiResponse
     */
    public function execute(): CmsOpenApiResponse
    {
        $request = new Request(
            method: 'GET',
            uri: $this->api->getUrl("helpers/search-property?searchTerm=$this->searchTerm"),
            headers: $this->api->prepareHeaders(),
        );

        return $this->makeApiCall($request);
    }
}
