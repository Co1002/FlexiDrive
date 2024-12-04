<?php

$router = new \Bramus\Router\Router();

/* Main service */

$router->get("/", "App\Controller\MainController@home");
$router->post("/", "App\Controller\MainController@applyFilter");

$router->get("/list", "App\Controller\CarController@list");
$router->get("/list/(\d+)", "App\Controller\CarController@car");

$router->get("/list/(\d+)/booking", "App\Controller\BookingController@viewBooking");
$router->post("/list/(\d+)/booking", "App\Controller\BookingController@booking");

/* User */

$router->get("/user/register", "App\Controller\UserController@viewRegister");
$router->post("/user/register", "App\Controller\UserController@register");

$router->get("/user/login", "App\Controller\UserController@viewLogin");
$router->post("/user/login", "App\Controller\UserController@login");

$router->get("/user/logout", "App\Controller\UserController@logout");

$router->get("/user/dashboard", "App\Controller\UserController@dashboard");
$router->post("/user/dashboard", "App\Controller\UserController@removeBooking");

/* Administration */

$router->get("/admin", "App\Controller\AdminController@viewAdmin");

$router->get("/admin/createCar","App\Controller\AdminController@createCar");
$router->post("/admin/createCar", "App\Controller\AdminController@insertCar");

$router->get("/admin/(\d+)", "App\Controller\AdminController@editCar");
$router->post("/admin/(\d+)", "App\Controller\AdminController@updateCar");

/* General */

$router->get("/faq", "App\Controller\MainController@faq");
$router->get("/aboutUs", "App\Controller\MainController@aboutUs");
$router->get("/imprint", "App\Controller\MainController@imprint");

$router->get("/500", "App\Controller\MainController@http500");

$router->set404("App\Controller\MainController@http404");

$router->setBasePath(ROUTE_BASE);

$router->run();