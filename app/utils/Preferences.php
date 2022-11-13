<?php

    namespace Shiroaky\Dogle\Utils;

    class preferences
    {
    
        public static function getLocate()
        {
            return $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        }

    }