<?php
require_once 'Routes.php';
require_once '../utils/Debug.php';


class Route extends Routes
{
    public static function parseURL($url)
    {

        if (!str_starts_with($url, '/')) {
            $url =  substr_replace($url, '/', 0, 0);
        }
        if (str_ends_with($url, '/')) {
            $url = substr($url, 0, -1);
        }
        if ($url == '') {
            $url = '/';
        }
        return $url;
    }
    public static function Get($url)
    {
        $url = self::parseURL($url);
        $route_get = self::$routes['get'];
        $class =  $route_get[$url][0];
        $method =  $route_get[$url][1];
        $params = $_GET ?? null;

        // call the controller Class-Method
        $class::$method($params);
    }
    public static function Post($url)
    {
        $url = self::parseURL($url);
        $route_post = self::$routes['post'];

        $class = $route_post[$url][0];
        $method = $route_post[$url][1];
        $request_body = $_POST ?? null;
        $request_file = $_FILES ?? null;

        // call the controller Class-Method
        $class::$method($request_body, $request_file);
    }
    public static function redirect($url)
    {
        $root_url = 'http://localhost/tugas%20smk/project_php_maret/public';
        header('Location: ' . $root_url . $url);
    }
    public static function to($url)
    {
        $root_url = 'http://localhost/tugas%20smk/project_php_maret/public';
        return $root_url . $url;
    }
}
