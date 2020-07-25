<?php
declare(strict_types=1);

namespace App\Http\Services;

use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Eloquent\Collection;


/**
 * Class LocationService
 *
 * @package App\Http\Services
 */
class LocationService
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getCountries(): Collection
    {
        return Country::all();
    }

    /**
     * @param int $countryId
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getStates(int $countryId): Collection
    {
        /** @var Country $country */
        $country = Country::find($countryId);

        if ($country) {
            return $country->states()->get();
        }

        return new Collection();
    }

    /**
     * @param int $stateId
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getCities(int $stateId): Collection
    {
        /** @var State $state */
        $state = State::find($stateId);

        if ($state) {
            return $state->cities()->get();
        }

        return new Collection();
    }
}
