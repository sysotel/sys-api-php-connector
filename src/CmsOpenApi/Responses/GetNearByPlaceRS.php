<?php

namespace SYSOTEL\APP\ApiConnector\CmsOpenApi\Responses;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Collection;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\CmsOpenApiResponse;
use SYSOTEL\APP\ApiConnector\CmsOpenApi\Data\Place\Place;

class GetNearByPlaceRS extends CmsOpenApiResponse
{
    /**
     * @var Collection<Place>
     */
    protected Collection $neaByPlaces;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->neaByPlaces = collect();

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

        $this->neaByPlaces = collect($responseData['nearByPlaces'] ?? [])->map(function (array $nearByPlaceData) {
            return Place::from($nearByPlaceData);
        });

        return $this;
    }

    /**
     * @return Collection<Place>
     */
    public function getNearByPlaces(): Collection
    {
        return $this->neaByPlaces;
    }
}
