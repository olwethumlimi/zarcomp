<?php

header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");

// Kickstart the framework
require('packages/loader.php');

// Kickstart the framework
$f3=require('packages/lib/base.php');




// // connect to the db
// $res = db::connect("localhost", "root", "");
// print_r($res);

// select the db name
// $res = db::set_db_name("zarcomp");
// print_r($res);

// $res=db::Insert("INSERT INTO MyGuests (firstname) VALUES (?,?)",["olwethu' \"mlimi",12255]);
// print_r($res);

// $res=db::Select("SELECT id, firstname FROM MyGuests WHERE lastname=? ",["olwethu'mlimi"]);
// print_r($res);


// $res=db::Update("UPDATE MyGuests SET lastname='?' WHERE id=?",["mlimi",2]);
// print_r($res);



// confiGmail("suprise.mlimi97@gmail.com","","busy app");
// sendGmail("suprise.mlimi97@gmail.com","app","coo;");


// // Load configuration
$f3->config('config.ini');

$f3->route('GET /',function(){
    view("index.html",[]);
    //  include 'controller/loginController.php';
});


$f3->route('POST /login',function(){
     include 'controller/loginController.php';
});



// $f3->set('ONERROR',function($f3){
//     print_r("page not found");
// });


$f3->run();
