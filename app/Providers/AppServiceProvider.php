<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;


use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->customBlade();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }



    /**
     * Define the custom blade template engine
     *
     * @return void
     */
    protected function customBlade()
    {
        // return the authentiated user name
        Blade::directive('admin', function () {
            return "<?php echo Auth::user()->name ?>";
        });
    }
}
