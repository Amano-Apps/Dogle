<?php

    namespace Shiroaky\Dogle\Utils;

    class Url
    {

        private static string $http_mode = 'https://';

        public static function get_assets_path()
        {
            if (!isset($_SERVER['HTTPS'])) self::$http_mode = 'http://';
            return self::$http_mode . $_SERVER['HTTP_HOST'] . '/public/';
        }

    }