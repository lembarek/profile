<?php

namespace Lembarek\Profile\Providers;

class ProfileServiceProvider extends ServiceProvider
{


    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->fullBoot('profile', __DIR__.'/../');
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
