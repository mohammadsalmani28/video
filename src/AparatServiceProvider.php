<?php

namespace Mohammadsalmani28\Aparat;

use Illuminate\Support\ServiceProvider;

class AparatServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Blade::directive('directive_name', function ($expression) {
            return $expression;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Aparat' , function(){
            return new Aparat();
        });
    }

}
