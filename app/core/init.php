<?php 

spl_autoload_register(function($classname){

	$model = "../app/models/".ucfirst($classname).".php";
    $lib = "../app/libraries/" . ucfirst($classname) . ".php";

	if (file_exists($model)) {
        require $model;
    } elseif (file_exists($lib)) {
        require $lib;
    }
});

require 'config.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'App.php';