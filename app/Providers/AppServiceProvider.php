<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ShowUserProfile;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
public function boot()
{
    View::composer('your.header.view', function ($view) {
        $ShowUserProfile = ShowUserProfile::find(1); // Fetch the user profile from the database
        $view->with('ShowUserProfile', $ShowUserProfile);
    });
}
}
