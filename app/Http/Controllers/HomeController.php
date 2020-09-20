<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Recipe;
use Auth;

class HomeController extends Controller
{


  public function index()
  {

     $categories = Category::all();
      return view('home', compact('categories'));
      // return view ('bootstrap.about');
  }

  public function home()
  {
    // $recipes = Recipe::findorfail(1);
    $recipes = Recipe::orderBy('id', 'desc')->take(6)->get();
    // dd($recipes);
    $popular = Recipe::latest();

    $categories = Category::where('parent_id', null)->get();
    // dd($categories);
     return view('index', compact('categories', 'recipes', 'popular'));
      // return view ('bootstrap.about');
  }

  public function myFavorites()
  {
    $myFavorites = Auth::user()->favorites;
    // dd($myFavorites);

    return view('favorites', compact('myFavorites'));
  }
}
