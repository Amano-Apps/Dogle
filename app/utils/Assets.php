<?php

    namespace Shiroaky\Dogle\Utils;

    use Shiroaky\Dogle\Interfaces\Assets_interface;
    use Shiroaky\Dogle\Utils\Url;

    class Assets implements Assets_interface
    {

        private static string $base_path = '../../public/';

        public static function import(string $asset)
        {
            // echo self::$base_path . $asset;
            // echo Url::get_assets_path();
        }

    }