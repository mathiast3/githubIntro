<?php

require "vendor/autoload.php";

//create an instance of the base class
$f3 = Base::instance();

//define default route
$f3->route('GET /', function(){
    echo '<h1>Hello, World</h1>';
});

//run fat-free
$f3->run;
?>
<h1>Hi</h1>
<h2>Hello, world</h2>