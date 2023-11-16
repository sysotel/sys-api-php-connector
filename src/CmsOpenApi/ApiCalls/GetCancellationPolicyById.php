<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls;

use GuzzleHttp\Psr7\Request;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApi;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetPoliciesRS;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetPropertyDetailsRS;

class GetCancellationPolicyById extends CmsOpenApiCall
{
    private array $query;
    private int $propertyId;

    /**
     * @param CmsOpenApi $api
     * @param int $propertyId
     * @param array $query
     */
    public function __construct(CmsOpenApi $api, int $propertyId, array $query)
    {
        parent::__construct($api);
        $this->query = $query;
        $this->propertyId = $propertyId;
    }

    /**
     * @return GetPoliciesRS
     */
    public function execute(): GetPoliciesRS
    {
        $request = new Request(
            method: 'GET',
            uri: $this->api->getUrl("properties/{$this->propertyId}/cancellation-policies/?" . http_build_query($this->query)),
            headers: $this->api->prepareHeaders(),
        );

        return (new GetPoliciesRS($request))->execute();
    }
}
