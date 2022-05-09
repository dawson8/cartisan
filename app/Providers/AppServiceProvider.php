<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
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
        View::share([
            'categories' => Category::tree()->get()->toTree()
        ]);

        Gate::define('admin', function (User $user) {
            return $user->admin === 1;
        });

        Blade::if('admin', function () {
            return request()->user()?->can('admin');
        });
    }
}
