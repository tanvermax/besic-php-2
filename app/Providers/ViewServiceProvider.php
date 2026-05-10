<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        //

        View::composer(["another.*","another.*"], function ($view) {
            $view->with(
                [
                    "globaltile" => "this is global variabe of 9",
                    "global" => "this is global variabe of 10"
                ]
            );
            $view->with("users",User::all());
        });
    }
}
