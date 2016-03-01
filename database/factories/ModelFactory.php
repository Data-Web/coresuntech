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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'phone' => str_random(11),
        'profile_photo' => str_random(32). '.jpg',
        'gender' => config('users.genders.male'),
        'role' => 1,
        'facebook_id' => str_random(11),
        'facebook_name' => str_random(5),
        'facebook_token' => str_random('32'),
        'google_id' => str_random(11),
        'google_token' => str_random('32'),
        'ip_address' => '192.168.2.228',
        'country_code' => 'vn'
    ];
});

// Create sample data for admins table
$factory->define(App\Admin::class, function (Faker\Generator $faker) {
    return [
        'fullname' => 'Pos System',
        'username' => 'admin',
        'email' => 'admin@pos.framgia.vn',
        'password' => bcrypt('12345678')
    ];
});

// Create sample data for shops table
$factory->define(App\Shop::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'googlemap' => str_random(5),
        'guide' => str_random(5),
        'worktime' => str_random(5),
        'dayof' => str_random(5),
        'smoking' => 1,
        'bring_pet' => 1,
        'count_seat' => 30,
        'count_room' => 2,
        'count_staff' => 5,
    ];
});

// Create sample data for networks
$factory->define(App\Network::class, function(Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'password' => str_random(8)
    ];
});

// Create sample data for currencies
$factory->define(App\Currency::class, function(Faker\Generator $faker) {
    return [
        'name' => $faker->name
    ];
});

// Create sample data for phones
$factory->define(App\Phone::class, function(Faker\Generator $faker) {
    return [
        'country_code' => str_random('2'),
        'label' => str_random('32'),
        'phone_number' => mt_rand(1000000, 999999999999),
        'landline_number' => mt_rand(1000000, 99999999),
        'fax_number' => mt_rand(1000000, 999999999)
    ];
});
