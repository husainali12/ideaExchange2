<?php

use Faker\Generator as Faker;

$factory->define(App\Expert::class, function (Faker $faker) {


        return [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'profile' => 'image.jpg',
            'banner'  => 'banner.jpg',
            'linkedin_id'=>rand(10000000,99999999),
            'remember_token' => str_random(10),
        ];

});
