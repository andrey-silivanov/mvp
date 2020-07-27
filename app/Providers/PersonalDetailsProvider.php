<?php
declare(strict_types=1);

namespace App\Providers;


use App\Http\Services\PersonalDetails\Data\PersonalDetailInterface;
use App\Http\Services\PersonalDetails\PersonalDetailsAggregator;
use App\Http\Services\PersonalDetails\PersonalDetailsAggregatorInterface;
use App\View\Components\PersonalDetailSelectComponent;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class PersonalDetailsProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->tag(PersonalDetailsAggregator::ALLOWED_DETAILS, [PersonalDetailInterface::TAG_NAME]);

        $this->app->bind(PersonalDetailsAggregatorInterface::class, PersonalDetailsAggregator::class);

        $this->app->when(PersonalDetailsAggregator::class)
            ->needs(PersonalDetailInterface::class)
            ->giveTagged(PersonalDetailInterface::TAG_NAME);

        Blade::component('personal-detail-select', PersonalDetailSelectComponent::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
