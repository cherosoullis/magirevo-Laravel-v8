<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodstaff extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug' ,'image','description'];

    public function ingredients() {
      return $this->hasMany('App\Ingredient');
    }

    public function recipes()
    {
       return $this->hasManyThrough('App\Ingredient', 'App\Recipe');
    }
}
