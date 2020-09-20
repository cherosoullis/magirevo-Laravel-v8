<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // protected $guarded = [];
    protected $fillable = ['name', 'slug', 'image', 'parent_id', 'description'];


    public function recipes() {
      return $this->belongsToMany('App\Models\Recipe');
    }

    public function children()
    {
      return $this->hasMany('App\Models\Category', 'parent_id');
    }
}
