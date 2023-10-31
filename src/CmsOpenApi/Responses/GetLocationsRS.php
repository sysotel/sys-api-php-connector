<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Collection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApiResponse;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Location\Location;

class GetLocationsRS extends CmsOpenApiResponse
{
    /**
     * @var Collection<Location>
     */
    protected Collection $locations;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->locations = collect();

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

        $this->locations = collect($responseData['locations'] ?? [])->map(function (array $locationData) {
            return Location::from($locationData);
        });

        return $this;
    }

    /**
     * @return Collection<Location>
     */
    public function getLocations(): Collection
    {
        return $this->locations;
    }
}
