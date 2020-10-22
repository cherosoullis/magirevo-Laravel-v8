<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CuisineController;
use App\Http\Controllers\FoodstaffController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TagController;



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

// Route::get('/', function () {
//     return view('index');
//     // return view('dashboard');
// });
Route::get('/', [HomeController::class, 'home'])->name('start');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth']], function() {

  // Route::resource('recipes', 'RecipeController',['except' => ['index', 'show']]);
  // Route::resource('recipes', 'RecipeController')->except(['index', 'show']);
  //favorite recipes
  // Route::post('favorite/{recipe}', 'RecipeController@favoriteRecipe');
  // Route::post('unfavorite/{recipe}', 'RecipeController@unFavoriteRecipe');
  // Route::get('favorite-recipes', 'HomeController@myFavorites');
  Route::post('favorite/{recipe}', [RecipeController::class, 'favoriteRecipe']);
  Route::post('rate/{recipe}/{rate}', [RecipeController::class, 'rateRecipe']);
  Route::post('unfavorite/{recipe}', [RecipeController::class, 'unFavoriteRecipe']);
  Route::get('favorite-recipes', [HomeController::class, 'myFavorites']);


  Route::view('foodstaffs','livewire.foodstaffs.home')->middleware('auth');
  Route::view('categories','livewire.categories.home')->middleware('auth');

  Route::resource('ingredients', 'IngredientController');
  Route::resource('tags', 'TagController');
  Route::resource('reviews', 'ReviewController');

  // Route::get('ingretientsList','RecipeController@ingretientsList');//get list for drop down
  // Route::get('slugList','RecipeController@slugList');//get slug to check if similar exists
  Route::get('ingretientsList', [RecipeController::class, 'ingretientsList']);
  Route::get('slugList', [RecipeController::class, 'slugList']);

});
// Route::resource('recipes', 'RecipeController');
Route::resource('recipes', RecipeController::class);
// Route::resource('recipes', RecipeController::class);
// Route::resource('photos', PhotoController::class);


// Route::get('user/{id}', [UserController::class, 'show']);

// Route::get('recipes', 'RecipeController@');
Route::get('categories/{category}','CategoryController@show')->name('categories.show');
