<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\ApiCalls;

use Carbon\Carbon;
use GuzzleHttp\Psr7\Request;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApi;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetPoliciesRS;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses\GetPropertyDetailsRS;

class GetCancellationPolicyByDate extends CmsOpenApiCall
{
    private Carbon $checkInDate;
    private int $propertyId;

    /**
     * @param CmsOpenApi $api
     * @param int $propertyId
     * @param ?Carbon $checkInDate
     */
    public function __construct(CmsOpenApi $api, int $propertyId, ?Carbon $checkInDate)
    {
        parent::__construct($api);
        $this->propertyId = $propertyId;
        $this->checkInDate = $checkInDate;
    }

    /**
     * @return GetPoliciesRS
     */
    public function execute(): GetPoliciesRS
    {
        $request = new Request(
            method: 'GET',
            uri: $this->api->getUrl("properties/{$this->propertyId}/cancellation-policies/scenario?checkInDate=" . urlencode($this->checkInDate->toDateString())),
            headers: $this->api->prepareHeaders(),
        );

        return (new GetPoliciesRS($request))->execute();
    }
}
