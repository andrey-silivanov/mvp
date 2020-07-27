<?php
declare(strict_types=1);

namespace App\Http\Requests\Profile;

use App\Http\Services\PersonalDetails\PersonalDetailsAggregatorInterface;
use App\Rules\PersonalDetailRule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ProfileCreateRequest
 *
 * @package App\Http\Requests\Profile
 */
class ProfileCreateRequest extends FormRequest
{
    /**
     * @var PersonalDetailsAggregatorInterface
     */
    private $personalDetailsAggregator;

    /**
     * ProfileCreateRequest constructor.
     *
     * @param array                              $query
     * @param array                              $request
     * @param array                              $attributes
     * @param array                              $cookies
     * @param array                              $files
     * @param array                              $server
     * @param null                               $content
     * @param PersonalDetailsAggregatorInterface $personalDetailsAggregator
     */
    public function __construct(
        array $query = [],
        array $request = [],
        array $attributes = [],
        array $cookies = [],
        array $files = [],
        array $server = [],
        $content = null,
        PersonalDetailsAggregatorInterface $personalDetailsAggregator
    ) {
        parent::__construct($query, $request, $attributes, $cookies, $files, $server, $content);
        $this->personalDetailsAggregator = $personalDetailsAggregator;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'        => 'required',
            ///////
            'weight'      => 'required',
            'hair_length' => ['required', new PersonalDetailRule($this->personalDetailsAggregator)],
        ];
    }
}
