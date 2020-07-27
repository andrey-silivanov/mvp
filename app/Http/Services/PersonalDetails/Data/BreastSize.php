<?php
declare(strict_types=1);


namespace App\Http\Services\PersonalDetails\Data;


/**
 * Class BreastSize
 *
 * @package App\Http\Services\PersonalDetails\Data
 */
class BreastSize implements PersonalDetailInterface
{
    public const FIELD_NAME = 'breast_size';

    /**
     * @var array
     */
    private $value
        = [
            'A' => 'A',
            'B' => 'B',
            'C' => 'C',
            'D' => 'D',
            'E' => 'E',
            'F' => 'F',
            'G' => 'G',
        ];

    /**
     * @return array
     */
    public function getValue(): array
    {
        return $this->value;
    }
}
