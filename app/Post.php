<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{

  protected $table = '_posters';

  protected $fillable =  [

    'title',
    'text',
    'category',
    'like',
    'dislike'
  ];
}
