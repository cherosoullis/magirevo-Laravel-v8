<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    public function rates()
    {
      return $this->belongsToMany('App\Recipe', 'rates', 'recipe_id', 'user_id', )->withTimeStamps();
    }
}
