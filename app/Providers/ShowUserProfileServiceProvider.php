<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ShowUserProfile;

class ShowUserProfileServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['header', 'other-view'], function ($view) {
            $ShowUserProfile = ShowUserProfile::find(Auth::id()); // Replace with your logic to retrieve the user profile
            $view->with('ShowUserProfile', $ShowUserProfile);
        });
    }
}
