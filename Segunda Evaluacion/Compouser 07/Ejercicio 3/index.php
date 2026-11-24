<?php

require 'vendor/autoload.php';
require "view/index.view.php";

use UserRegular\Model\UserRegularModel;
use Admin\Model\AdminModel;

$faker = Faker\Factory::create();
$user=array();
$admin=array();

for($i=0; $i<=5 ; $i++){
    $username=$faker->username();
    $nombre=$faker->name();
    $apellidos=$faker->apellidos();
    $email=$faker->email();
    $password=$faker->password();
    

    $admin1= new AdminModel();
    $admin.array_push($admin1);

}

echo $admin[0]->$username;





?>