<?php

namespace App\Providers;

use App\Profile;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
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
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        if(Schema::hasTable('profiles'))
        {
            $profile = $profile = Profile::first();
             View::share('profile', $profile);
        }
    }
}
