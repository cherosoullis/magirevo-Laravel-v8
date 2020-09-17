<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth']], function() {

  // Route::resource('recipes', 'RecipeController',['except' => ['index', 'show']]);
  // Route::resource('recipes', 'RecipeController')->except(['index', 'show']);
  //favorite recipes
  Route::post('favorite/{recipe}', 'RecipeController@favoriteRecipe');
  Route::post('unfavorite/{recipe}', 'RecipeController@unFavoriteRecipe');
  Route::get('favorite-recipes', 'UsersController@myFavorites');

  Route::view('foodstaffs','livewire.foodstaffs.home')->middleware('auth');
  Route::view('categories','livewire.categories.home')->middleware('auth');

  Route::resource('ingredients', 'IngredientController');
  Route::resource('tags', 'TagController');
  Route::resource('reviews', 'ReviewController');

  Route::get('ingretientsList','RecipeController@ingretientsList');//get list for drop down
  Route::get('slugList','RecipeController@slugList');//get slug to check if similar exists
});
Route::resource('recipes', 'RecipeController');
// Route::get('recipes', 'RecipeController@');
Route::get('categories/{category}','CategoryController@show')->name('categories.show');
