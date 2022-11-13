<?php

    namespace Shiroaky\Dogle\Utils;

    use Shiroaky\Dogle\Utils\Url;

    class Assets
    {

        /**
         * @param string $asset The assets element.
         * @return string $asset_path The asset include path.
         */
        public static function import(string $asset)
        {
            echo Url::get_assets_path() . $asset;
        }

    }