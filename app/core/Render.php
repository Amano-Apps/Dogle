<?php

    namespace Shiroaky\Dogle\Core;

    class Render
    {

        /**
         * @param string $view It is the parameter in charge of storing the given route for its later execution.
         * @param array $data It is the parameter in charge of storing all the information given for later use. 
         * @return void view
         */
        public static function view(string $view, $data = [])
        {
            require_once "./views/$view.php";
        }

        /**
         * @param string $module It is the parameter in charge of storing the given module name for its later inclusion.
         * @param array $data It is the parameter in charge of storing all the information given for later use. 
         * @return void module
         */
        public static function module(string $module, $data = [])
        {
            require_once "./views/modules/$module.php";
        }

        /**
         * @param any $json It is the parameter that stores the information that will be rendered as json
         * @return json json result
         */
        public static function json($json)
        {
            echo json_encode($json);
        }

    }