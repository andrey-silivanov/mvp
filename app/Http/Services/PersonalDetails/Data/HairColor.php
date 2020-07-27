<?php
declare(strict_types=1);


namespace App\Http\Services\PersonalDetails\Data;


/**
 * Class HairColor
 *
 * @package App\Http\Services\PersonalDetails\Data
 */
class HairColor implements PersonalDetailInterface
{
    public const FIELD_NAME = 'hair_color';

    /**
     * @var array
     */
    private $value
        = [
            'blonde' => 'blonde',
            'brown'  => 'brown',
            'black'  => 'black',
            'red'    => 'red',
        ];

    /**
     * @return array
     */
    public function getValue(): array
    {
        return $this->value;
    }
}
