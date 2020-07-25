<?php
declare(strict_types=1);


namespace App\Http\Services\PersonalDetails\Data;


/**
 * Class Weight
 *
 * @package App\Http\Services\PersonalDetails\Data
 */
class Weight implements PersonalDetailInterface
{
    public const FIELD_NAME = 'weight';

    /**
     * @var array
     */
    private $value
        = [
            1 => '40 kg / 88 lbs',
            2  => '41 kg / 90 lbs',
            3  => '42 kg / 93 lbs',
            4  => '43 kg / 95 lbs',
            5  => '44 kg / 97 lbs',
            6  => '45 kg / 99 lbs',
            7  => '46 kg / 101 lbs',
            8  => '47 kg / 104 lbs',
            9  => '48 kg / 106 lbs',
            10 => '49 kg / 108 lbs',
            11 => '50 kg / 110 lbs',
            12 => '51 kg / 112 lbs',
            13 => '52 kg / 115 lbs',
            14 => '53 kg / 117 lbs',
            15 => '54 kg / 119 lbs',
            16 => '55 kg / 121 lbs',
            17 => '56 kg / 123 lbs',
            18 => '57 kg / 126 lbs',
            19 => '58 kg / 128 lbs',
            20 => '59 kg / 130 lbs',
            21 => '60 kg / 132 lbs',
            22 => '61 kg / 134 lbs',
            23 => '62 kg / 137 lbs',
            24 => '63 kg / 139 lbs',
            25 => '64 kg / 141 lbs',
            26 => '65 kg / 143 lbs',
            27 => '66 kg / 146 lbs',
            28 => '67 kg / 148 lbs',
            29 => '68 kg / 150 lbs',
            30 => '69 kg / 152 lbs',
            31 => '70 kg / 154 lbs',
            32 => '71 kg / 157 lbs',
            33 => '72 kg / 159 lbs',
            34 => '73 kg / 161 lbs',
            35 => '74 kg / 163 lbs',
            36 => '75 kg / 165 lbs',
            37 => '76 kg / 168 lbs',
            38 => '77 kg / 170 lbs',
            39 => '78 kg / 172 lbs',
            40 => '79 kg / 174 lbs',
            41 => '80 kg / 176 lbs',
            42 => '81 kg / 179 lbs',
            43 => '82 kg / 181 lbs',
            44 => '83 kg / 183 lbs',
            45 => '84 kg / 185 lbs',
            46 => '85 kg / 187 lbs',
            47 => '86 kg / 190 lbs',
            48 => '87 kg / 192 lbs',
            49 => '88 kg / 194 lbs',
            50 => '89 kg / 196 lbs',
            51 => '90 kg / 198 lbs',
            52 => '91 kg / 201 lbs',
            53 => '92 kg / 203 lbs',
            54 => '93 kg / 205 lbs',
            55 => '94 kg / 207 lbs',
            56 => '95 kg / 209 lbs',
        ];

    /**
     * @return array
     */
    public function getValue(): array
    {
        return $this->value;
    }
}
