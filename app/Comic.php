<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'cover'];

    public function comic_details()
    {
      return $this->hasOne('App\ComicDetail');
    }
}
