<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComicDetail extends Model
{
    public function comic()
    {
      return $this->belongsTo('App\Comic');
    }
}
