<?php

    namespace Shiroaky\Dogle\Core;

    use Shiroaky\Dogle\Core\Router;
    use Shiroaky\Dogle\Core\AutoloadInterfaces;

    require_once('./app/core/Autoload_Interfaces.php');

    class Application
    {

        /**
         * @return void Run application.
         */
        public static function run()
        {
            session_start();
            AutoloadInterfaces::load_Interfaces();
            require_once('./routes/web.php');
            Router::resolve();
        }

    }