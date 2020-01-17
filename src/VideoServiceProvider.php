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
        \Blade::directive('aparat', function ($expression) {
            $expression = str_replace("'", "", $expression);
            $expression = explode("/", $expression);
            $id = end($expression);
            $url = "https://www.aparat.com/video/video/embed/videohash/{$id}/vt/frame";
//            return "<iframe src='$url' allowFullScreen='true' webkitallowfullscreen='true' mozallowfullscreen='true'></iframe>";
            return "<style>.h_iframe-aparat_embed_frame{position:relative;}
.h_iframe-aparat_embed_frame 
.ratio{display:block;width:100%;height:auto;}
.h_iframe-aparat_embed_frame iframe{position:absolute;top:0;left:0;width:100%;height:100%;}</style>
<div class=\"h_iframe-aparat_embed_frame\">
<span style=\"display: block;\"></span>
<iframe src=\"$url\" allowFullScreen=\"true\" webkitallowfullscreen=\"true\" mozallowfullscreen=\"true\"></iframe>
</div>";
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
