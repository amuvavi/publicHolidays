<?php

namespace App\Providers;

use App\Repositories\Contracts\HolidayRepository;
use App\Repositories\Eloquent\EloquentHolidayRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(HolidayRepository::class, EloquentHolidayRepository::class);
    }
}
