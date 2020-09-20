<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['order', 'heading_id', 'heading', 'quantity', 'unit', 'foodstaff_id', 'details', 'parent_id', 'recipe_id'];


    public function recipe(){

        return $this->belongsTo('App\Models\Recipe');
    }

  //https://laravel.com/docs/8.x/eloquent-relationships#one-to-one
    public function childrens()
    {
      return $this->hasMany('App\Models\Ingredient', 'parent_id', 'heading_id');//return $this->hasOne('App\Phone', 'foreign_key', 'local_key');
    }

    public function foodstaff()
    {
      return $this->belongsTo('App\Models\Foodstaff');//return $this->hasOne('App\Phone', 'foreign_key', 'local_key');
    }
}
