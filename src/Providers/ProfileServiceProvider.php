<?php

namespace Lembarek\Profile\Providers;

use \Illuminate\Contracts\Events\Dispatcher as EventDispatcher;

class ProfileServiceProvider extends ServiceProvider
{


    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(EventDispatcher $event)
    {
        $this->fullBoot('profile', __DIR__.'/../');
        $event->listen('Lembarek\Auth\Events\UserHasCreated', 'Lembarek\Profile\Listeners\CreateDefaultProfile');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Lembarek\Profile\Repositories\ProfileRepositoryInterface',
            'Lembarek\Profile\Repositories\ProfileRepository'
        );

    }
}
