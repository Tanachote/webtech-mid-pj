<?php

 //   require 'core/connection.php';

 //   $pdo = Connection::make();
session_start();
 require 'vendor/autoload.php';
 use \Controller\Home;
 use \Model\Country;


 $home = new Home();
 $home->showCity();
 $country = new Country();
 $countries = $country ->findAll();
 var_dump($countries);

 require 'views/home/index.view.php';


?>