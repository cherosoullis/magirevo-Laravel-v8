<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = ['name', 'slug', 'description', 'difficulty', 'photo', 'video', 'prep_time', 'cook_time',
    'cuisine_id', 'tag_id', 'name', 'photo',  'servings', 'serving_size', 'notes', 'availability', 'status',  'source', 'source_url', 'votes'];


     public function sluggable()
     {
         return [
             'slug' => [
                 'source' => 'slug'
             ]
         ];
     }

    public function getRouteKeyName()
    {
      return 'slug';
    }

    public function user() {
      return $this->belongsTo('App\User');
    }

    public function categories()
    {
      return $this->belongsToMany('App\Category');
    }
    public function executions()
    {
        return $this->hasMany('App\Execution');
    }
    public function tags()
    {
      return $this->belongsToMany('App\Tag');
    }

    public function cuisine() {
      return $this->belongsTo('App\Cuisine');
    }

    public function ingredients()
    {
      return $this->hasMany('App\Ingredient');
    }

    // public function foodstaffs()
    // {
    //   return $this->hasManyThrough('App\Foodstaff', 'App\Ingredient');
    // }

    // public function foodstaffs()
    // {
    //     return $this->hasMany('App\Execution');
    // }
    //Determine whether a post has been marked as favorite by a user.

      public function favorited()
      {
         return (bool) Favorite::where('user_id', Auth::id())
                             ->where('recipe_id', $this->id)
                             ->first();
      }

    public function reviews()
    {
      return $this->hasMany('App\Review');
    }
}
