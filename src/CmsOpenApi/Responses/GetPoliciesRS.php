<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Collection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApiResponse;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\PropertyPolicy\PropertyPolicy;

class GetPoliciesRS  extends CmsOpenApiResponse
{
    /**
     * @var Collection<PropertyPolicy>
     */
    protected Collection $policies;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->policies = collect();

        parent::__construct($request);
    }

    /**
     * @return $this
     */
    public function execute(): static
    {
        parent::execute();

        if (!$responseData = $this->getJsonArrayResponse()) {
            return $this;
        }

        $this->policies = collect([$responseData['policies']] ?? [])->map(function (array $policyData) {
            return PropertyPolicy::from($policyData);
        });

        return $this;
    }

    /**
     * @return Collection<PropertyPolicy>
     */
    public function getPolicies(): Collection
    {
        return $this->policies;
    }
}
