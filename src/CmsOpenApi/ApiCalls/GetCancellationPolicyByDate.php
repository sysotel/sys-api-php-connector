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
    private  ?Carbon $cancellationDate;
    private int $propertyId;

    /**
     * @param CmsOpenApi $api
     * @param int $propertyId
     * @param Carbon $checkInDate
     * @param Carbon|null $cancellationDate
     */
    public function __construct(CmsOpenApi $api, int $propertyId, Carbon $checkInDate, ?Carbon $cancellationDate = null)
    {
        parent::__construct($api);
        $this->propertyId = $propertyId;
        $this->checkInDate = $checkInDate;
        $this->cancellationDate = $cancellationDate;
    }

    /**
     * @return GetPoliciesRS
     */
    public function execute(): GetPoliciesRS
    {

        $url = "properties/{$this->propertyId}/cancellation-policies/scenario?checkInDate=" . urlencode($this->checkInDate->toDateString());

        if ($this->cancellationDate) {
            $url .= "&cancellationDate=" . urlencode($this->cancellationDate->toDateString());
        }

        $fullUrl = $this->api->getUrl($url);

        $request = new Request(
            method: 'GET',
            uri: $fullUrl,
            headers: $this->api->prepareHeaders(),
        );

        return (new GetPoliciesRS($request))->execute();
    }
}
