<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth', ['except' => ['index', 'show']]);
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Category::with('children')->whereNull('parent_id')->get();

      return view('admin.categories.index')->with([
      'categories'  => $categories
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $this->validate($request, [
          'name'      => 'required|min:3|max:255|string',
          'parent_id' => 'sometimes|nullable|numeric'
        ]);

      Category::create($validatedData);

      return redirect()->route('categories.index')->withSuccess('You have successfully created a Category!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
      // dd($category->id);
       //All recipes from selected category
        // $recipes = Recipe::where(recipes()->categories, $category->id,)->get();
        $recipes = Category::find($category->id)->recipes()->orderBy('name')->get();
        // dd($recipes);
          return view('recipe.indexByCategory', compact('recipes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
      $validatedData = $this->validate($request, [
          'name'  => 'required|min:3|max:255|string'
      ]);

      $category->update($validatedData);

      return redirect()->route('categories.index')->withSuccess('You have successfully updated a Category!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
      if ($category->children) {
          foreach ($category->children()->with('posts')->get() as $child) {
              foreach ($child->posts as $post) {
                  $post->update(['category_id' => NULL]);
              }
          }

          $category->children()->delete();
      }

      $category->delete();

      return redirect()->route('categories.index')->withSuccess('You have successfully deleted a Category!');
    }
}
