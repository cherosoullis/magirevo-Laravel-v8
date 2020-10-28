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
    $recents = Recipe::where('status','=','published')->orderBy('id', 'desc')->take(6)->get();
    // dd($recipes);
    // $populars = Recipe::latest()->first();
    $populars = Recipe::where('status','=','published')->orderBy('view_count', 'desc')->take(6)->get();
    // dd($popular);
    $categories = Category::where('parent_id', null)->orderBy('parent_id', 'ASC')->get();
    // dd($categories);
     return view('index', compact('categories', 'recents', 'populars'));
      // return view ('bootstrap.about');
  }

  public function myFavorites()
  {
    $myFavorites = Auth::user()->favorites;
    // dd($myFavorites);

    return view('favorites', compact('myFavorites'));
  }


}
