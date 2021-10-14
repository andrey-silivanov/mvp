<?php
declare(strict_types=1);


namespace App\Http\Services\PersonalDetails;


use App\Exceptions\Web\PersonalDetailException;
use App\Http\Services\PersonalDetails\Data\BreastSize;
use App\Http\Services\PersonalDetails\Data\BreastType;
use App\Http\Services\PersonalDetails\Data\Ethnicity;
use App\Http\Services\PersonalDetails\Data\HairColor;
use App\Http\Services\PersonalDetails\Data\HairLength;
use App\Http\Services\PersonalDetails\Data\Height;
use App\Http\Services\PersonalDetails\Data\PersonalDetailInterface;
use App\Http\Services\PersonalDetails\Data\Smoker;
use App\Http\Services\PersonalDetails\Data\Weight;
use Illuminate\Support\Collection;


/**
 * Class PersonalDetailsAggregator
 *
 * @package App\Http\Services\PersonalDetails
 */
class PersonalDetailsAggregator implements PersonalDetailsAggregatorInterface
{
    public const ALLOWED_DETAILS
        = [
            Weight::FIELD_NAME     => Weight::class,
            Height::FIELD_NAME     => Height::class,
            Ethnicity::FIELD_NAME  => Ethnicity::class,
            HairColor::FIELD_NAME  => HairColor::class,
            HairLength::FIELD_NAME => HairLength::class,
            BreastSize::FIELD_NAME => BreastSize::class,
            BreastType::FIELD_NAME => BreastType::class,
            Smoker::FIELD_NAME     => Smoker::class,
        ];

    /**
     * @var \Illuminate\Support\Collection
     */
    private $personalDetails;

    /**
     * PersonalDetailsAggregator constructor.
     *
     * @param \App\Http\Services\PersonalDetails\Data\PersonalDetailInterface ...$personalDetail
     */
    public function __construct(PersonalDetailInterface ...$personalDetail)
    {
        $this->personalDetails = new Collection($personalDetail);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getPersonalDetails(): Collection
    {
        return $this->personalDetails;
    }

    /**
     * @param string $fieldName
     *
     * @return \App\Http\Services\PersonalDetails\Data\PersonalDetailInterface
     * @throws \App\Exceptions\Web\PersonalDetailException
     */
    public function getItem(string $fieldName): PersonalDetailInterface
    {
        $className = $this->getClassNameByFieldName($fieldName);

        $personalDetail = $this->personalDetails->filter(static function ($item) use ($className) {
            if ($item instanceof $className) {
                return $item;
            }
        })->first();

        if (!$personalDetail) {
            throw new PersonalDetailException("Class {$className} is missed in PersonalDetailsProvider");
        }

        return $personalDetail;
    }

    /**
     * @param string $fieldName
     *
     * @throws \App\Exceptions\Web\PersonalDetailException
     */
    private function isAllowedType(string $fieldName): void
    {
        if (!array_key_exists($fieldName, self::ALLOWED_DETAILS)) {
            throw new PersonalDetailException("{$fieldName} is not allowed");
        }
    }

    /**
     * @param string $fieldName
     *
     * @return string
     * @throws \App\Exceptions\Web\PersonalDetailException
     */
    private function getClassNameByFieldName(string $fieldName): string
    {
        $this->isAllowedType($fieldName);

        return self::ALLOWED_DETAILS[$fieldName];
    }
}
