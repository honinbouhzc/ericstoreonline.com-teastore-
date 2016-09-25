<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

define("PROJECT",'/teastore/');
define("PROJECT_URL",'http://' . $_SERVER['HTTP_HOST'] . PROJECT);

define("IMAGE_URL", PROJECT_URL . "img/");
define("CSS_URL", PROJECT_URL . "css/");
define("JS_URL", PROJECT_URL . "js/");
//server side path
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("INCLUDES",ROOT . PROJECT . "php/includes/");
define("NEWSLETTER",ROOT . PROJECT . "public/newsletter/");

define("PAGE_NOT_FOUND","page-not-found");

require_once("includes/autoloader.php");
// register the our  __autoload function with the autoload registry
spl_autoload_register('__autoload');
// load the Composer autoloader
require_once(ROOT . PROJECT . "vendor/autoload.php");

// create the cart
teastore\model\cart\Cart::createCart();

$url = $_GET['url'];
// explode the url values into an array
$controllerData = explode('/',$url);

$url  = $controllerData[0];

// get the class map
$map = require ROOT . PROJECT . "php/class_map.php";
// use the class map to get the class name to instantiate
$url = (isset($map[$url])) ? $url: PAGE_NOT_FOUND;

$className = $map[$url];
// add the namespace to the class name
$className = "\\teastore\\controller\\" . $className;


// instantiate the controller class
$controller = new $className($controllerData);
// execute the generateOutput to send data to the browser
$controller->generateOutput();

