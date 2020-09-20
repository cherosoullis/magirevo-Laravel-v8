<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodstaff extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug' ,'image','description'];

    public function ingredients() {
      return $this->hasMany('App\Models\Ingredient');
    }

    public function recipes()
    {
       return $this->hasManyThrough('App\Models\Ingredient', 'App\Recipe');
    }
}
