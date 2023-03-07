<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BigQuestion;
use App\IndexTest;
use Faker\Generator as Faker;

$factory->define(App\BigQuestion::class, function (Faker $faker) {
    return [
        // nameにテスト文字列($faker->name)が入るようにする
        //ダミーrecordの用意
        'name'=> $faker->name,
    ];
});
