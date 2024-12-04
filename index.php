<?php

session_start();

error_reporting(E_ERROR);
ini_set('display_errors', 1);

require_once 'config/config.php';
require_once 'vendor/autoload.php';

require_once __DIR__."/src/Core/Router.php";