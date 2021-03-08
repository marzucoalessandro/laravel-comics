<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComicDetail extends Model
{

    protected $fillable = ['price', 'description', 'designer', 'writer', 'data_publ', 'vol_numb', 'size', 'page', 'rated'];
    public function comic()
    {
      return $this->belongsTo('App\Comic');
    }
}
