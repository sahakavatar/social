<?php
/**
 * Copyright (c) 2017.
 * *
 *  * Created by PhpStorm.
 *  * User: Edo
 *  * Date: 10/3/2016
 *  * Time: 10:44 PM
 *
 */

namespace Sahak\Social\Providers;

use Btybug\btybug\Models\Routes;
use Illuminate\Support\ServiceProvider;


class ModuleServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../views', 'social');
        $this->loadViewsFrom(__DIR__ . '/../views', 'social');
        \Eventy::action('admin.menus', [
            "title" => "Social",
            "custom-link" => "#",
            "icon" => "fa fa-gavel",
            "is_core" => "yes",
            "children" => [
                [
                    "title" => "Social",
                    "custom-link" => "/admin/social",
                    "icon" => "fa fa-angle-right",
                    "is_core" => "yes"
                ]
            ]]);
        Routes::registerPages('sahak.avatar/social');
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);

    }

}

