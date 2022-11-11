<?php

    // Namespaces:
    use Shiroaky\Dogle\Core\Router;
    use Shiroaky\Dogle\Core\Render;


    // Controllers:


    // Routes:
    Router::get('/', function () {
        return Render::view('example');
    });