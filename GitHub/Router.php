<?php

$router = new \Bramus\Router\Router();

$router->get("/", "App\Controller\MainController@home");
$router->post("/", "App\Controller\MainController@applyFilter");

$router->get("/list", "App\Controller\CarController@list");
$router->get("/list/(\d+)", "App\Controller\CarController@car");

$router->get("/list/(\d+)/booking", "App\Controller\BookingController@viewBooking");
$router->post("/list/(\d+)/booking", "App\Controller\BookingController@booking");

$router->get("/user/register", "App\Controller\UserController@viewRegister");
$router->post("/user/register", "App\Controller\UserController@register");

$router->get("/user/login", "App\Controller\UserController@viewLogin");
$router->post("/user/login", "App\Controller\UserController@login");

$router->get("/user/logout", "App\Controller\UserController@logout");

$router->get("/user/dashboard", "App\Controller\UserController@dashboard");

$router->get("/admin", "App\Controller\AdminController@viewAdmin");

$router->get("/imprint", "App\Controller\MainController@imprint");

$router->get("/500", "App\Controller\MainController@http500");
$router->set404("App\Controller\MainController@http404");

$router->setBasePath(ROUTE_BASE);

$router->run();