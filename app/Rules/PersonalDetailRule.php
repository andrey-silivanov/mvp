<?php
declare(strict_types=1);

namespace App\Rules;

use App\Http\Services\PersonalDetails\PersonalDetailsAggregatorInterface;
use Illuminate\Contracts\Validation\Rule;

/**
 * Class PersonalDetailRule
 *
 * @package App\Rules
 */
class PersonalDetailRule implements Rule
{
    /**
     * @var \App\Http\Services\PersonalDetails\PersonalDetailsAggregatorInterface
     */
    private $personalDetailsAggregator;

    /**
     * Create a new rule instance.
     *
     * @param PersonalDetailsAggregatorInterface $personalDetailsAggregator
     *
     * @return void
     */
    public function __construct(PersonalDetailsAggregatorInterface $personalDetailsAggregator)
    {
        $this->personalDetailsAggregator = $personalDetailsAggregator;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        return in_array($value, $this->personalDetailsAggregator->getItem($attribute)->getValue(), true);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return trans('The :attribute is not valid.');
    }
}
