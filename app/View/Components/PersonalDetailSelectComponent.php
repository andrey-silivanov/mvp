<?php
declare(strict_types=1);

namespace App\View\Components;

use App\Http\Services\PersonalDetails\PersonalDetailsAggregator;
use App\Http\Services\PersonalDetails\PersonalDetailsAggregatorInterface;
use Illuminate\View\Component;

/**
 * Class PersonalDetailSelectComponent
 *
 * @package App\View\Components
 */
class PersonalDetailSelectComponent extends Component
{
    /**
     * @var PersonalDetailsAggregator
     */
    private $personalDetailsAggregator;

    /**
     * @var string
     */
    public $selectType;

    /**
     * Create a new component instance.
     *
     * @param PersonalDetailsAggregatorInterface $personalDetailsAggregator
     * @param string                             $selectType
     *
     * @return void
     */
    public function __construct(PersonalDetailsAggregatorInterface $personalDetailsAggregator, string $selectType)
    {
        $this->personalDetailsAggregator = $personalDetailsAggregator;
        $this->selectType                = $selectType;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.personal-detail-select');
    }

    /**
     * @return array
     * @throws \App\Exceptions\Web\PersonalDetailException
     */
    public function getOptions(): array
    {
        return $this->personalDetailsAggregator->getItem($this->selectType)->getValue();
    }
}
