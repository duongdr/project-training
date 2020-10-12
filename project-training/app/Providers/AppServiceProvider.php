<?php

namespace App\Providers;

use App\Http\Services\Interfaces\PostInterface;
use App\Http\Services\Interfaces\UserInterface;
use App\Http\Services\PostService;
use App\Http\Services\UserService;
use App\Models\User;
use App\Observers\UserObserver;
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
        $this->app->bind(PostInterface::class, PostService::class);
        $this->app->bind(UserInterface::class, UserService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class) ;
    }
}
