<?php 

$factory('App\Lesson', [

	'title' 		=> $faker->sentence,
	'body'  		=> $faker->paragraph,
	'some_bool'     => $faker->boolean($chanceOfGettingTrue = 50)

]);

// $factory('App\User', [

// 	'email' 		=> $faker->sentence,
// 	'password'  		=> $faker->paragraph

// ]);
