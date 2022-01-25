<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Answer;
use Faker\Generator as Faker;

$factory->define(Answer::class, function (Faker $faker) {
    return [
        'answer'=>$faker->sentence,
        'correct'=>range('0','1','1'),
        'question_id'=>1,
    ];
});
