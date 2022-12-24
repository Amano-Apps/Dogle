<?php 

    namespace Shiroaky\Dogle\Core;


    class Assets
    {

        private static string $assets_path = '../public/';

        public static function import(string $asset)
        {
            echo self::$assets_path . $asset;
        }

    }