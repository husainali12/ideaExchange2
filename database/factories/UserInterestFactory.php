<?php

use Faker\Generator as Faker;

$factory->define(App\UserInterest::class, function (Faker $faker) {


    return [
        'category_id' => function(){
            return App\Category::all()->random();
            },
            'user_interest_id'=> rand(1, 10),
            'user_interest_type'=> rand(0, 1) == 1 ? 'App\User' : 'App\Expert'
    ];
});
