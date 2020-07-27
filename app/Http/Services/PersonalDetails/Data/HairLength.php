<?php
declare(strict_types=1);


namespace App\Http\Services\PersonalDetails\Data;


/**
 * Class HairLength
 *
 * @package App\Http\Services\PersonalDetails\Data
 */
class HairLength implements PersonalDetailInterface
{
    public const FIELD_NAME = 'hair_length';

    /**
     * @var array
     */
    private $value
        = [
            'short'       => 'short',
            'medium-long' => 'medium long',
            'long'        => 'long',
        ];

    /**
     * @return array
     */
    public function getValue(): array
    {
        return $this->value;
    }
}
