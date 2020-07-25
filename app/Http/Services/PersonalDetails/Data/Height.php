<?php
declare(strict_types=1);


namespace App\Http\Services\PersonalDetails\Data;


/**
 * Class Height
 *
 * @package App\Http\Services\PersonalDetails\Data
 */
class Height implements PersonalDetailInterface
{
    public const FIELD_NAME = 'height';

    /**
     * @var array
     */
    private $value
        = [
           130 => "130 cm / 4'3''",
            "131 cm / 4'4''",
            "132 cm / 4'4''",
            "133 cm / 4'4''",
            "134 cm / 4'5''",
            "135 cm / 4'5''",
            "136 cm / 4'6''",
            "137 cm / 4'6''",
            "138 cm / 4'6''",
            "139 cm / 4'7''",
            "140 cm / 4'7''",
            "141 cm / 4'8''",
            "142 cm / 4'8''",
            "143 cm / 4'8''",
            "144 cm / 4'9''",
            "145 cm / 4'9''",
            "146 cm / 4'9''",
            "147 cm / 4'10''",
            "148 cm / 4'10''",
            "149 cm / 4'11''",
            "150 cm / 4'11''",
            "151 cm / 4'11''",
            "152 cm / 4'12''",
            "153 cm / 5'0''",
            "154 cm / 5'1''",
            "155 cm / 5'1''",
            "156 cm / 5'1''",
            "157 cm / 5'2''",
            "158 cm / 5'2''",
            "159 cm / 5'3''",
            "160 cm / 5'3''",
            "161 cm / 5'3''",
            "162 cm / 5'4''",
            "163 cm / 5'4''",
            "164 cm / 5'5''",
            "165 cm / 5'5''",
            "166 cm / 5'5''",
            "167 cm / 5'6''",
            "168 cm / 5'6''",
            "169 cm / 5'7''",
            "170 cm / 5'7''",
            "171 cm / 5'7''",
            "172 cm / 5'8''",
            "173 cm / 5'8''",
            "174 cm / 5'9''",
            "175 cm / 5'9''",
            "176 cm / 5'9''",
            "177 cm / 5'10''",
            "178 cm / 5'10''",
            "179 cm / 5'10''",
            "180 cm / 5'11''",
            "181 cm / 5'11''",
            "182 cm / 5'12''",
            "183 cm / 6'0''",
            "184 cm / 6'0''",
            "185 cm / 6'1''",
            "186 cm / 6'1''",
            "187 cm / 6'2''",
            "188 cm / 6'2''",
            "189 cm / 6'2''",
            "190 cm / 6'3''",
            "191 cm / 6'3''",
            "192 cm / 6'4''",
            "193 cm / 6'4''",
            "194 cm / 6'4''",
            "195 cm / 6'5''",
            "196 cm / 6'5''",
            "197 cm / 6'6''",
            "198 cm / 6'6''",
            "199 cm / 6'6''",
            "200 cm / 6'7''",
        ];

    /**
     * @return array
     */
    public function getValue(): array
    {
        return $this->value;
    }
}
