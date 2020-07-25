<?php
declare(strict_types=1);


namespace App\Http\Services\PersonalDetails\Data;


/**
 * Interface PersonalDetailInterface
 *
 * @package App\Http\Services\PersonalDetails
 */
interface PersonalDetailInterface
{
    public const TAG_NAME = 'personalDetail';

    /**
     * @return array
     */
    public function getValue(): array;
}
