<?php

    namespace Shiroaky\Dogle\Utils;

    class Preferences
    {
    
        /**
         * @return string $lang Return the lang format.
         */
        public static function getLocate()
        {
            $lang_format = explode(';', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
            $lang = explode(',', $lang_format[0]);
            echo $lang[1];
        }

    }