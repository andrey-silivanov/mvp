<?php
declare(strict_types=1);


namespace App\Http\Services\PersonalDetails\Data;


/**
 * Class Ethnicity
 *
 * @package App\Http\Services\PersonalDetails\Data
 */
class Ethnicity implements PersonalDetailInterface
{
    public const FIELD_NAME = 'ethnicity';

    /**
     * @var array
     */
    private $value
        = [
            'arabian'  => 'Arabian',
            'asian'    => 'Asian',
            'ebony'    => 'Ebony (black)',
            'european' => 'European (white)',
            'indian'   => 'Indian',
            'latin'    => 'Latin',
            'mongolia' => 'Mongolia',
            'mixed'    => 'Mixed',
        ];

    /**
     * @return array
     */
    public function getValue(): array
    {
        return $this->value;
    }
}
