<?php

    namespace Shiroaky\Dogle\Interfaces;

    interface Assets_interface
    {

        /**
         * @param string $asset The assets element.
         * @return string $asset_path The asset include path.
         */
        public static function import(string $asset);

    }