<?php

// redirect("/");

$validator = new Validator($_POST);

$validator
    ->required('email is required')
    ->email("enter a valid email")
    ->validate('email');


$validator
    ->required('password is required')
    ->minLength(6, 'password must be 6 or more')
    ->callback(function ($val) {
        return substr_count($val, ' ') != true;
    }, 'password must contain no spaces')
    ->validate('password');

$len = $validator->getAllErrors();


$state = [];
header('Content-Type: application/json');

// validation error
if (sizeof($len) > 0) {
    $state["error"] = $len;
    echo json_encode($state);
    exit;
}

$email = $_POST["email"];
$password = $_POST["password"];


$res = db::Select("SELECT * FROM users WHERE email=? AND password=?  LIMIT 1", [$email, $password]);
// checking account
if (sizeof($res) == 0) {
    $len["program"] = "invalid email or password";
    $state["error"] = $len;
    echo json_encode($state);
    exit;
}

// user logged in
$len["status"] = 200;
$state["success"] = $len;
echo json_encode($state);
