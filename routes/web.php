<?php

/** @var \Laravel\Lumen\Routing\Router $router */
$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/', ["uses" => "HomeController@Home"]);
$router->get('/about',["uses"=>"HomeController@about"]);
$router->get('/services',["uses"=>"HomeController@services"]);
$router->get('/contact',["uses"=>"HomeController@contact"]);
$router->post('/ContactCreates',["uses"=>"HomeController@ContactCreates"]);
