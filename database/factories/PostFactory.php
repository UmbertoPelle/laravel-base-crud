<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
      'title'=> $faker -> word,
      'text'=> $faker -> text($maxNbChars = 250),
      'category'=> $faker -> text($maxNbChars = 100),
      'like'=> $faker -> randomFloat,
      'dislike'=> $faker -> randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 999999999)
    ];
});
