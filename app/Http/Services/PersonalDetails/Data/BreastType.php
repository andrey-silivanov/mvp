<?php
declare(strict_types=1);


namespace App\Http\Services\PersonalDetails\Data;


/**
 * Class BreastType
 *
 * @package App\Http\Services\PersonalDetails\Data
 */
class BreastType implements PersonalDetailInterface
{
    public const FIELD_NAME = 'breast_type';

    /**
     * @var array
     */
    private $value
        = [
            'natural' => 'Natural',
            'silicon' => 'Silicon',
        ];

    /**
     * @return array
     */
    public function getValue(): array
    {
        return $this->value;
    }
}
