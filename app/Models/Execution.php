<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Execution extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'recipe_id'];

    public function recipe() {
      return $this->belongsTo('App\Models\Recipe');
    }
}
