<?php
declare(strict_types=1);


namespace App\Http\Services\PersonalDetails\Data;


/**
 * Class Smoker
 *
 * @package App\Http\Services\PersonalDetails\Data
 */
class Smoker implements PersonalDetailInterface
{
    public const FIELD_NAME = 'smoker';

    /**
     * @var array
     */
    private $value
        = [
            'yes'       => 'yes',
            'no'        => 'no',
            'sometimes' => 'sometimes',
        ];

    /**
     * @return array
     */
    public function getValue(): array
    {
        return $this->value;
    }
}
