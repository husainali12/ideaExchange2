<?php

use Faker\Generator as Faker;

$factory->define(App\Answer::class, function (Faker $faker) {
        return [
            //
            'body'=>$faker->text,
            'question_id'=> function(){
            return App\Question::all()->random();
            },
            'expert_id'=> function(){
                return App\Expert::all()->random();
            }
        ];
});
