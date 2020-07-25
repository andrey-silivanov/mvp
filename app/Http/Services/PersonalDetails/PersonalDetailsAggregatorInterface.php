<?php
declare(strict_types=1);

namespace App\Http\Services\PersonalDetails;

use App\Http\Services\PersonalDetails\Data\PersonalDetailInterface;
use Illuminate\Support\Collection;

/**
 * Interface PersonalDetailsAggregatorInterface
 *
 * @package App\Http\Services\PersonalDetails
 */
interface PersonalDetailsAggregatorInterface
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function getPersonalDetails(): Collection;

    /**
     * @param string $className
     *
     * @return \App\Http\Services\PersonalDetails\Data\PersonalDetailInterface
     */
    public function getItem(string $className): PersonalDetailInterface;
}
