<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ProjectServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->useRepositories();
    }


    /**
     * Map the contact and repositories
     *
     * @return void
     */
    protected function useRepositories()
    {
        $services  = [
        'App\Contract\Repositories\User\UserRepository' =>  'App\Repositories\User\UserRepository'
        ];

        foreach ($services as $key => $value) {
            $this->app->singleton($key, $value);
        }
    }
}
