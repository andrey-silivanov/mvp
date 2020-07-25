<?php
declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LocationResource;
use App\Http\Services\LocationService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Khsing\World\Models\Country;
use Khsing\World\World;

/**
 * Class LocationController
 *
 * @package App\Http\Controllers\Api
 */
class LocationController extends Controller
{
    /**
     * @var \App\Http\Services\LocationService
     */
    private $locationService;

    /**
     * LocationController constructor.
     *
     * @param \App\Http\Services\LocationService $locationService
     */
    public function __construct(LocationService $locationService)
    {
        $this->locationService = $locationService;
    }

    /**
     * @return AnonymousResourceCollection
     */
    public function getCountries(): AnonymousResourceCollection
    {
        return LocationResource::collection($this->locationService->getCountries());
    }

    /**
     * @param int $countryId
     *
     * @return AnonymousResourceCollection
     */
    public function getStates(int $countryId): AnonymousResourceCollection
    {
        return LocationResource::collection($this->locationService->getStates($countryId));
    }

    /**
     * @param int $stateId
     *
     * @return AnonymousResourceCollection
     */
    public function getCities(int $stateId): AnonymousResourceCollection
    {
        return LocationResource::collection($this->locationService->getCities($stateId));
    }
}
