<?php

namespace Mohammadsalmani28\Video;

use Illuminate\Support\ServiceProvider;

class VideoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->defineDirectives();
    }

    private function defineDirectives(){
        \Blade::directive('video', function ($expression) {
            list($service,$url) = explode(',', $expression);
            $url = str_replace("'", "", $url);
            $url = str_replace(" ", "", $url);
            $service = str_replace("'", "", $service);
            $service = str_replace(" ", "", $service);
            return Video::receiver($service,$url);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Video', function () {
            return new Video();
        });
    }

}
