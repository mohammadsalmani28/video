<?php
/**
 * Mohammadsalmani28/Video package
 */

namespace Mohammadsalmani28\Video;

class Video
{

    public function __construct()
    {
        // custom helper include
        $this->object = require 'helper.php';
    }

    public static function receiver($service, $url)
    {
        switch ($service) {
            case 'aparat' :
                return self::aparat($url);
                break;
            case 'youtube' :
                return self::youtube($url);
                break;
            case 'tamasha' :
                return self::tamasha($url);
                break;
            case 'namasha' :
                return self::namasha($url);
                break;
            case 'vimeo' :
                return self::vimeo($url);
                break;
            default:
                return 'your service name is wrong!';
        }
    }

    private static function aparat($url)
    {
        $url = explode("/", $url);
        $id = end($url);
        $url = "https://www.aparat.com/video/video/embed/videohash/{$id}/vt/frame";
        return "<div class=\"embed-responsive embed-responsive-16by9\">
                <iframe class=\"embed-responsive-item\" src=\"$url\" allowFullScreen=\"true\" 
                webkitallowfullscreen=\"true\" mozallowfullscreen=\"true\"></iframe>
                </div>";
    }

    private static function youtube($url)
    {
        $url = explode("?v=", $url);
        $id = end($url);
        $url = "https://www.youtube.com/embed/{$id}";
        return "<div class=\"embed-responsive embed-responsive-16by9\">
                <iframe class=\"embed-responsive-item\"  src=\"$url\" 
                frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" 
                allowfullscreen>
                </iframe></div>";
    }

    private static function tamasha($url)
    {
        $url = explode("/", $url);
        $id = end($url);
        $url = "https://tamasha.com/embed/{$id}";
        return "<div class=\"embed-responsive embed-responsive-16by9\">
                <iframe class=\"embed-responsive-item\" src=\"$url\"
                allowFullScreen=\"true\" webkitallowfullscreen=\"true\" mozallowfullscreen=\"true\">
                </iframe></div>";
    }

    private static function namasha($url)
    {
        $url = explode("/", $url);
        $id = end($url);
        $url = "https://www.namasha.com/embed/{$id}";
        return "<div class=\"embed-responsive embed-responsive-16by9\">
                <iframe class=\"embed-responsive-item\" src=\"$url\"
                frameborder=\"0\" scrolling=\"no\" allowfullscreen=\"true\"
                mozallowfullscreen=\"true\" webkitallowfullscreen=\"true\"></iframe></div>";
    }

    private static function vimeo($url)
    {
        $url = explode("/", $url);
        $id = end($url);
        $url = "https://player.vimeo.com/video/{$id}";
        return "<div class=\"embed-responsive embed-responsive-16by9\">
                <iframe class=\"embed-responsive-item\" src=\"$url\" 
                frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen>
                </iframe></div>";
    }
}
