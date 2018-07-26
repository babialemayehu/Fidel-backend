<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    static $gender = ['M','F'];
    static $role = ['Teacher','Student'];
    return [
        'regId' => str_random(3).'_'.ran(1000,9999).'_'.'10',
        'email' => $faker->unique()->safeEmail,
        'phone' => '0900000000',
        'password' => bcrypt('111111'),
        'fitstName' => $faker->name,
        'middleName' => $faker->name,
        'lastName' => $faker->name,     
        'birthDate' => $faker->date,
        'nationality' => str_random(10),
        'gender' => $gender[rand(0,1)],
        'college' => str_random(11),
        'department' => str_random(11),
        'role' => $role[rand(0,1)],
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Notification::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->title,
        'content' => $faker->paragraph,
        'date' => $faker->date,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});