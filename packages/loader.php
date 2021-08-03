<?php


// header("Content-Type: application/xml; charset=utf-8");

// session_set_cookie_params(["SameSite" => "Strict"]); //none, lax, strict
// session_set_cookie_params(["Secure" => "true"]); //false, true
// session_set_cookie_params(["HttpOnly" => "true"]); //false, true
session_start();


require_once("gmail.php");
require_once("db.php");

require_once 'form/Validator.php';


require_once('Twig/Autoloader.php');
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('views');

$twig = new Twig_Environment($loader, array(
    'cache' => 'cache',
    //   'strict_variables' => false,
    'debug' => true,
));


// tamplate


function view($file_name, $params = [])
{
    global $twig;
    $params['session'] = $_SESSION;
    $params['post'] = $_POST;
    $params['get'] = $_GET;

    echo $twig->render($file_name, $params);
}

