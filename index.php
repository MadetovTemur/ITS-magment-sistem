<?php

define("APP_PATH", __DIR__); // "E:\xampp\htdocs"

require_once APP_PATH . "/vendor/autoload.php";



use App\App;



// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
// generate data by calling methods

echo $faker->name() . '<br>';
// 'Vince Sporer'
echo $faker->email() . '<br>';
// 'walter.sophia@hotmail.com'
echo $faker->text() . '<br>';
// 'Numquam ut mollitia at consequuntur inventore dolorem.'
echo $faker->address()  . '<br>';

echo $faker->phoneNumber()  . '<br>';

echo $faker->date('Y_m_d');

echo $faker->time();

$faker->userName();






// $app = new App();
// $app->run();
