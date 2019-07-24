<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;
$Posts = factory(App\Post::class, 3)->make();

$factory->define(App\Posts::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'body' => $faker->title,



    ];



});