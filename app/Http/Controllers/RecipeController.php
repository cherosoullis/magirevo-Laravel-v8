<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use DB;
use App\Models\Execution;
use App\Models\Foodstaff;
use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Tag;
use App\Models\Ingredient;
use App\Models\Favorite;
use App\Models\Feature;
use Response;
use Image;
use Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

// use Session;
// use Auth;
class RecipeController extends Controller
{
  public function __construct()
  {
    // $this->middleware('auth');

    // $this->middleware('log')->only('index');

    // $this->middleware('subscribed')->except('store');
    // $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);
    // Alternativly
    $this->middleware('auth', ['except' => ['index', 'show']]);
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $recipes = Recipe::all();
        return view('recipe.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $foodstaffs=Foodstaff::all();
      $categories = Category::where('parent_id', '=', null)->get();
      // dd($categories);
      // dd($categories);
      // $categories=Category::all();
      $cuisines=Cuisine::all();
      $tags=Tag::all();
      return view('recipe.create', compact('foodstaffs', 'categories', 'cuisines', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          // dd($request);
          $validatedData = $request->validate([
          'name' => 'required|max:90',
          'slug' => 'required|max:255',//unique:slug|
          'description' => 'required|max:1000',
          'categories' => 'required',
          'execution' => 'required',
          'addIngredients' => 'required',
          'tags' => 'required',
          'availability' => 'required',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          ],[
            'name.required' => 'Είναι απαραίτητη η ονομασία στην περιγραφή.',
            'slug.required' => 'Είναι απαραίτητη η καταχώρηση slug',
            'description.required' => 'Πρέπει να καταχωρηθεί μια σύντομη περιγραφή',
            'categories.required' => 'Πρέπει να επιλεγεί τουλάχιστον μια κατηγορία',
            'execution.required' => 'Πρέπει να καταγραφεί ο τρόπος εκτέλεσης',
            'addIngredients.required' => 'Πρέπει να καταγραφούν τα υλικά',
            'tags.required' => 'Πρέπει να επιλεγεί τουλάχιστον μια ετικέττα',
            'availability.required' => 'Πρέπει διαλέξετε αν θέλετε προσωπική ή δημόσια συνταγή',
            'image.required' => 'Πρέπει να επιλέξετε μια φωτογραφία για τη συνταγή',
            'image.image' => 'Δεν έχει επιλεγεί σωστός τύπος αρχείου για φωτογραφία',
            'image.mimes' => 'Η φωτογραφία πρέπει να είναι τύπου jpeg, png, jpg, gif ή svg',
            'image.max' => 'Το μέγιστο μέγεθος φωτογραφία υπερβαίνει το επιτρεπτό',
          ]);



            //   $this->validate($request, [
            //     'description' => 'required',
            // ]);

            // $request->validate([ //for dynamic input field
            //     'addmore.*.name' => 'required',
            //     'addmore.*.qty' => 'required',
            //     'addmore.*.price' => 'required',
            //     ]);

            $recipe = new Recipe;

            $recipe->name = $request->input('name');
            $recipe->slug = $request->input('slug');

            $recipe->description = $request->input('description');
            $recipe->difficulty = $request->input('difficulty');

      ///Image store
            if ($request->file('image')){
              // dd($request->file('image'));
              //Get file from the browser
              $path= $request->file('image');
              // Resize and encode to required type
              $img = Image::make($path)->resize(500,500)->encode();
              $imgThumb = Image::make($path)->resize(100,100)->encode();
              //Provide the file name with extension ////WORKING TO SEE
              // $ext = '.'.$path->getClientOriginalExtension();
              // $fileName = str_replace($ext, date('d-m-Y-H-i') . $ext, $request->image->getClientOriginalName());
              // dd($fileName);
              $filename = time(). '.' .$path->getClientOriginalExtension();
              $filenameThumb = time(). '_' .'thumb'.'.' .$path->getClientOriginalExtension();
             //Put file with own name
             Storage::put($filename, $img);
             Storage::put($filenameThumb, $imgThumb);
             //Move file to your location
             Storage::move($filename, 'public/recipes/' . $filename);
             Storage::move($filenameThumb, 'public/recipes/thumbnail/' . $filenameThumb);
             //now insert into database
             $recipe->photo = $filename;
            }
            // $recipe->photo = $request->input('photo');
            // $recipe->video = $request->input('video');//unfinished

            $recipe->prep_time = $request->input('PrepTime');
            $recipe->cook_time = $request->input('CookTime');

            //Store Portion Replace , with -
            $portions = explode(",", $request->input('portion')); //because data is received with , semicolon then i split get first elesment validate and rejoin
            // dd(current($words));
            if(current($portions)==0){ //in php // by default, the pointer is on the first element of array
              // skip first elemetn of array and get second element
              next($portions);
              // dd(current($portions));
              $recipe->portion = current($portions);
            }else{

                $recipe->portion = implode("-", $portions );//rejoin array
            }

            $recipe->serving_size = $request->input('serving_size');
            $recipe->cuisine_id = $request->input('cuisine');
            $recipe->availability = $request->input('availability');
            $recipe->source = $request->input('source');
            $recipe->source_url = $request->input('source_url');
            $recipe->user_id = Auth::user()->id;
            $recipe->status = 'unpublished';

            $recipe -> save();

            //Checkbox store
            $feaures = New Feature;
            $feaures->healthy = $request->boolean('healthy');
            $feaures->quick = $request->boolean('quick');
            $feaures->easy = $request->boolean('easy');
            $feaures->sugarfree = $request->boolean('sugarfree');
            $feaures->glutenfree = $request->boolean('glutenfree');
            $feaures->diet = $request->boolean('diet');
            $feaures->spicy = $request->boolean('spicy');
            $feaures->protein = $request->boolean('protein');
            $feaures->vegan = $request->boolean('vegan');
            $feaures->pot = $request->boolean('pot');
            $feaures->hull = $request->boolean('hull');
            $feaures->oven = $request->boolean('oven');
            $feaures->pan = $request->boolean('pan');
            $feaures->charcoal = $request->boolean('charcoal');
            $feaures->wood_oven = $request->boolean('wood_oven');
            $feaures->rotisserie = $request->boolean('rotisserie');
            $feaures->christmas = $request->boolean('christmas');
            $feaures->easter = $request->boolean('easter');
            $feaures->valendines = $request->boolean('valendines');
            $feaures->fasting = $request->boolean('fasting');
            $feaures->christmas = $request->boolean('christmas');

            // if ($request->has('quick')) {
            //     $feaures->quick =1;
            //   }

            $feaures->save();

            // $recipe->feature_id = $feaures->id;
            $recipe->update(['feature_id' => $feaures->id]);

            // Synch categories selected with just saved recipe
            foreach ($request->input('categories') as $category){
              // dd($request->input('categories'));
              $recipe->categories()->sync($category);
            }
            // $recipe->categories()->save();

            // dd('stored cateogries');
            //EXECUTION PART
              foreach ($request->execution as $key => $value) {

                $execution = new Execution;
                $execution->title = $value['title'];

                //$execution->body = $value['body']; STORE THE IMAGE I have to save is along with images
                $description = $value['body'];

                $dom = new \DomDocument();
                // $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                $dom->loadHtml('<meta http-equiv="Content-Type" content="text/html; charset=utf-8">' .$description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

                // dd($dom);
                $images = $dom->getElementsByTagName('img');

                foreach($images as $k => $img){
                    $data = $img->getAttribute('src');

                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    // dd(public_path());
                    $image_name="/storage/recipes/". time().$k.'.png';
                    // $image_name= '/upload/' . time().$k.'.png'; was not working
                     // dd($image_name);
                    $path = public_path() . $image_name;

                    file_put_contents($path, $data);

                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                  }
                  // dd($dom->saveXML());
                  // $description = $dom->saveHTML();
                  //It is stored as xml that is why I save as xml,
                  $description = $dom->saveXML();

                  $execution->body = $description;
                  //END SAVING IMAGE

                $execution->recipe_id = $recipe->id;
                $execution -> save();
                }

                //Begin Ingredient storing
                $order = 1; //Use for storing the order of the incredient
                $heading = 0; //Use for storing the heading of the incredient

                foreach ($request->addIngredients as $key => $value) {

                  $ingredients = new Ingredient;
                  // dd($value);
                  $ingredients->order = $order++;
                  //check it there is value in array and if no leave it blank else add the value
                  if(!isset($value['heading']) || $value['heading'] == false){
                    $ingredients->heading = Null;
                  }else{
                    $ingredients->heading_id = ++$heading; //increament then store
                    $ingredients->heading = $value['heading'];
                    $ingredients->parent_id = '0';
                  }

                  if(!isset($value['qty']) || $value['qty'] == false){
                    $ingredients->quantity = Null;
                  }else{
                    $ingredients->heading_id = '0';
                    $ingredients->quantity = $value['qty'];
                    $ingredients->parent_id = $heading;
                  }

                  if(!isset($value['unit']) || $value['unit'] == false){
                    $ingredients->unit = Null;
                  }else{
                    $ingredients->unit = $value['unit'];
                  }

                  if(!isset($value['incredient']) || $value['incredient'] == false){
                    $ingredients->foodstaff_id = Null;
                  }else{//check if value added exists in database and if not add it else use existing value
                    if (Foodstaff::where('id', '=', $value['incredient'])->exists()) {
                       $ingredients->foodstaff_id = $value['incredient'];
                    }else{
                      $foodstaff = new Foodstaff;
                      $foodstaff->name = $value['incredient'];
                      $foodstaff->save();
                      $ingredients->foodstaff_id = $foodstaff->id;
                    }

                  }

                  if(!isset($value['details']) || $value['details'] == false){
                    $ingredients->details = Null;
                  }else{
                    $ingredients->details = $value['details'];
                  }

                  $ingredients->recipe_id = $recipe->id;
                  $ingredients -> save();
                  }

                  foreach ($request->tags as $key => $value) {
                    // $tag = Tag::firstOrCreate(['id' => $value]); //if I enter value it is never found
                    $tags = Tag::where('id' , '=', $value)->first();
                      if ($tags === null) {
                        $tag = new Tag;
                        $tag->name = $value;
                        $string = $value;
                        $string = strtr($string, [' '=>'-', 'α'=>'a', 'ά'=>'a','β'=>'b','γ'=>'g','δ'=>'d','ε'=>'e','έ'=>'e','ζ'=>'z','η'=>'h','ή'=>'h','θ'=>'th','ι'=>'i','ϊ'=>'i','ί'=>'i','κ'=>'k','λ'=>'l','μ'=>'m','ν'=>'n','ξ'=>'x','ο'=>'o','ό'=>'o','π'=>'p','ρ'=>'r','σ'=>'s','τ'=>'t','υ'=>'u','ϋ'=>'u','ύ'=>'u','φ'=>'f','χ'=>'x','ψ'=>'ps','ω'=>'o','ώ'=>'o','ς'=>'s', 'Α'=>'a', 'Ά'=>'a','Β'=>'b','Γ'=>'g','Δ'=>'d','Ε'=>'e','Έ'=>'e','Ζ'=>'z','Η'=>'h','Ή'=>'h', 'Θ'=>'th','Ι'=>'i','Ϊ'=>'i','Ί'=>'i','Κ'=>'k','Λ'=>'l','Μ'=>'m','Ν'=>'n','Ξ'=>'x','Ο'=>'o','Ό'=>'o','Π'=>'p','Ρ'=>'r','Σ'=>'s','Τ'=>'t','Υ'=>'u','Ϋ'=>'u','Ύ'=>'u','Φ'=>'f','Χ'=>'x','Ψ'=>'ps','Ω'=>'o','Ώ'=>'o','Σ'=>'s']);
                        $tag->slug = $string;
                        $tag->slug = $string;
                        $tag->save();
                        $recipe->tags()->attach($tag);
                      }else{
                        $recipe->tags()->sync($value);
                      }
                  }
      // $owner->cars()->save($car);//cars is the relationship from the model

            // $dealership->users()->save($user);

          // $description = $request->input('description');
          // $dom = new \DomDocument();
          // $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
          // $images = $dom->getElementsByTagName('img');
          //
          // foreach($images as $k => $img){
          //     $data = $img->getAttribute('src');
          //
          //     list($type, $data) = explode(';', $data);
          //     list(, $data)      = explode(',', $data);
          //     $data = base64_decode($data);
          //     $image_name= time().$k.'.png';
          //     $path = public_path() . $image_name;
          //
          //     file_put_contents($path, $data);
          //
          //     $img->removeAttribute('src');
          //     $img->setAttribute('src', $image_name);
          //   }
          //   $description = $dom->saveHTML();
           $recipes = Recipe::all();
           // dd ($recipes);
           return redirect()->route('recipes.index', ['recipes'])->with('message', 'Συνταγή αποθηκεύθηκε επιτυχώς');
            // dd($description);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Recipe $recipe)//request is used for session
    {

      $Key = 'recipe' . $recipe->id;
        if (!Session::has($Key)) {
            // dd('has kes');
        DB::table('recipes')->where('id', $recipe->id)->increment('view_count', 1);
         Session::put($Key, 1);
       }
      $recipe= Recipe::where('slug', $recipe->slug)->first();

      // $randomrecipes = Recipe::approved()->published()->take(3)->inRandomOrder()->get();
      return view('recipe.show', compact('recipe'));//->with('recipe', $recipe);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
      $foodstaffs=Foodstaff::all();
      $categories = Category::where('parent_id', '=', null)->get();
      // dd($categories);
      // dd($categories);
      // $categories=Category::all();
      $cuisines=Cuisine::all();
      $tags=Tag::all();
      // dd(Arr::wrap(str_replace('-',':',$recipe->portion)));

      // dd(Str::before($recipe->portion, '-'));
      // dd(Str::after($recipe->portion, '-'));
      // dd(Arr::wrap(Str::before($recipe->portion, '-')));
      // dd(Arr::prepend(Arr::wrap(Str::before($recipe->portion, '-')), Str::after($recipe->portion, '-')) );
      $portion= Arr::prepend(Arr::wrap(Str::before($recipe->portion, '-')), Str::after($recipe->portion, '-'));
      $portion_start= Str::before($recipe->portion, '-');
      $portion_end= Str::after($recipe->portion, '-');
      // $ingredients = Ingredient::findorfail(2);
      // dd($recipe->ingredients);
      // dd($ingredients->foodstaff);
      // Nested Eager Loading https://laravel.com/docs/8.x/eloquent-relationships#eager-loading
      // $foods=Recipe::with('ingredients.foodstaff')->get();
      // // dd($foods);
      // In blade
      // {{-- @foreach ($foods  as $food)
      // {{$food->ingredients[1]->foodstaff->name}}
      // @endforeach --}}
      return view('recipe.edit', compact('recipe', 'foodstaffs', 'categories', 'cuisines', 'tags', 'portion_start', 'portion_end'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {

        $validatedData = $request->validate([
        'name' => 'required|max:90',
        'slug' => 'required|max:255',//unique:slug|
        'description' => 'required|max:1000',
        'categories' => 'required',
        'execution' => 'required',
        'addIngredients' => 'required',
        'tags' => 'required',
        'availability' => 'required',
        // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
          'name.required' => 'Είναι απαραίτητη η ονομασία στην περιγραφή.',
          'slug.required' => 'Είναι απαραίτητη η καταχώρηση slug',
          'description.required' => 'Πρέπει να καταχωρηθεί μια σύντομη περιγραφή',
          'categories.required' => 'Πρέπει να επιλεγεί τουλάχιστον μια κατηγορία',
          'execution.required' => 'Πρέπει να καταγραφεί ο τρόπος εκτέλεσης',
          'addIngredients.required' => 'Πρέπει να καταγραφούν τα υλικά',
          'tags.required' => 'Πρέπει να επιλεγεί τουλάχιστον μια ετικέττα',
          'availability.required' => 'Πρέπει διαλέξετε αν θέλετε προσωπική ή δημόσια συνταγή',
          // 'image.required' => 'Πρέπει να επιλέξετε μια φωτογραφία για τη συνταγή',
          // 'image.image' => 'Δεν έχει επιλεγεί σωστός τύπος αρχείου για φωτογραφία',
          // 'image.mimes' => 'Η φωτογραφία πρέπει να είναι τύπου jpeg, png, jpg, gif ή svg',
          // 'image.max' => 'Το μέγιστο μέγεθος φωτογραφία υπερβαίνει το επιτρεπτό',
        ]);

         $recipe = Recipe::findorfail($recipe->id);


         // dd($request->file('image'));
     //     ///Image store
     //     if($recipe->isDirty('image')){
     //   // email has changed
     //   dd('new image'. $request->file('image'));
     //   $new_email = $recipe->email;
     //   $old_email = $user->getOriginal('email');
     // }
     // dd('original image'. $recipe->getOriginal('image'));

          $recipe->name = $request->input('name');

          $recipe->slug = $request->input('slug');

          $recipe->description = $request->input('description');
          $recipe->difficulty = $request->input('difficulty');


          if ($request->file('image')){
            // dd('updating');
            // dd($request->file('image'));
            //Get file from the browser
            $path= $request->file('image');
            // Resize and encode to required type
            $img = Image::make($path)->resize(500,500)->encode();
            $imgThumb = Image::make($path)->resize(100,100)->encode();
            //Provide the file name with extension ////WORKING TO SEE
            // $ext = '.'.$path->getClientOriginalExtension();
            // $fileName = str_replace($ext, date('d-m-Y-H-i') . $ext, $request->image->getClientOriginalName());
            // dd($fileName);
            $filename = time(). '.' .$path->getClientOriginalExtension();
            $filenameThumb = time(). '_' .'thumb'.'.' .$path->getClientOriginalExtension();
           //Put file with own name
           Storage::put($filename, $img);
           Storage::put($filenameThumb, $imgThumb);
           //Move file to your location
           Storage::move($filename, 'public/recipes/' . $filename);
           Storage::move($filenameThumb, 'public/recipes/thumbnail/' . $filenameThumb);
           //now insert into database
           Storage::delete('public/recipes/' . $recipe->photo);
           Storage::delete('public/recipes/thumbnail/' . $recipe->photo. '_' .'thumb');

           $recipe->photo = $filename;
          }

          // $recipe->photo = $request->input('photo');
          // $recipe->video = $request->input('video');//unfinished

          $recipe->prep_time = $request->input('PrepTime');
          $recipe->cook_time = $request->input('CookTime');

          //Store Portion Replace , with -
          $portions = explode(",", $request->input('portion')); //because data is received with , semicolon then i split get first elesment validate and rejoin
          // dd(current($words));
          if(current($portions)==0){ //in php // by default, the pointer is on the first element of array
            // skip first elemetn of array and get second element
            next($portions);
            // dd(current($portions));
            $recipe->portion = current($portions);
          }else{

              $recipe->portion = implode("-", $portions );//rejoin array
          }

          $recipe->serving_size = $request->input('serving_size');
          $recipe->cuisine_id = $request->input('cuisine');
          $recipe->availability = $request->input('availability');
          $recipe->source = $request->input('source');
          $recipe->source_url = $request->input('source_url');
          // $recipe->user_id = Auth::user()->id;
          $recipe->status = 'published';

          $recipe -> update();
          // dd('update');
          //Checkbox store
          $feaures = Feature::where('id', $recipe->id)->first();
          // dd($feaures);
          $feaures->healthy = $request->boolean('healthy');
          $feaures->quick = $request->boolean('quick');
          $feaures->easy = $request->boolean('easy');
          $feaures->sugarfree = $request->boolean('sugarfree');
          $feaures->glutenfree = $request->boolean('glutenfree');
          $feaures->diet = $request->boolean('diet');
          $feaures->vegan = $request->boolean('vegan');
          $feaures->spicy = $request->boolean('spicy');
          $feaures->protein = $request->boolean('protein');
          $feaures->pot = $request->boolean('pot');
          $feaures->hull = $request->boolean('hull');
          $feaures->oven = $request->boolean('oven');
          $feaures->pan = $request->boolean('pan');
          $feaures->quick = $request->boolean('charcoal');
          $feaures->quick = $request->boolean('wood_oven');
          $feaures->quick = $request->boolean('rotisserie');
          $feaures->quick = $request->boolean('christmas');
          $feaures->quick = $request->boolean('easter');
          $feaures->quick = $request->boolean('valendines');
          $feaures->quick = $request->boolean('fasting');

          $feaures->update();

          // $recipe->feature_id = $feaures->id;
          // $recipe->update(['feature_id' => $feaures->id]);

          // Synch categories selected with just saved recipe

          //Insert into offence_photo table
          //$offence->photos()->sync($photo_id_array, false);//dont delete old entries = false
          $recipe->categories()->sync($request->input('categories'));

          //dekete executions and recreate
          $executionDelete = Execution::where('recipe_id', $recipe->id)->get();
          // dd($executionDelete);
          foreach ($executionDelete as $key => $exec) {
            $exec->delete();
          }

          // dd('stored cateogries');
          //EXECUTION PART
          foreach ($request->execution as $key => $value) {

            $execution = new Execution;
            $execution->title = $value['title'];

            //$execution->body = $value['body']; STORE THE IMAGE I have to save is along with images
            $description = $value['body'];

            $dom = new \DomDocument();
            // $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            // dd($description);
            $dom->loadHtml('<?xml encoding="utf-8" ?>' .$description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            // dd($dom);
            $images = $dom->getElementsByTagName('img');

            foreach($images as $k => $img){
                $data = $img->getAttribute('src');
                //If its existing image the src is starage .. so if is existing image ingore the
                //store of image else make the folloging steps
                if(Str::startsWith($data, 'data:image/png;base64')){
                  list($type, $data) = explode(';', $data);
                  list(, $data)      = explode(',', $data);
                  $data = base64_decode($data);
                  // dd(public_path());
                  $image_name="/storage/recipes/". time().$k.'.png';
                  // $image_name= '/upload/' . time().$k.'.png'; was not working
                   // dd($image_name);
                  $path = public_path() . $image_name;

                  file_put_contents($path, $data);

                  $img->removeAttribute('src');
                  $img->setAttribute('src', $image_name);
                };
                // dd($data);
              }
              // dd($dom->saveXML());
              // $description = $dom->saveHTML();
              //It is stored as xml that is why I save as xml,
              $description = $dom->saveXML();

              $execution->body = $description;
              //END SAVING IMAGE

            $execution->recipe_id = $recipe->id;
            $execution -> save();
            }

              //dekete incredients and recreate
              $ingredientDelete = Ingredient::where('recipe_id', $recipe->id)->get();
              // dd($executionDelete);
              foreach ($ingredientDelete as $key => $ingre) {
                $ingre->delete();
              }
              //Begin Ingredient storing
              $order = 1; //Use for storing the order of the incredient
              $heading = 0; //Use for storing the heading of the incredient

              // dd($request->addIngredients);
              foreach ($request->addIngredients as $key => $value) {

                $ingredients = new Ingredient;
                // dd($value);
                $ingredients->order = $order++;
                //check it there is value in array and if no leave it blank else add the value
                if(!isset($value['heading']) || $value['heading'] == false){
                  $ingredients->heading = Null;
                }else{
                  $ingredients->heading_id = ++$heading; //increament then store
                  $ingredients->heading = $value['heading'];
                  $ingredients->parent_id = '0';
                }

                if(!isset($value['qty']) || $value['qty'] == false){
                  $ingredients->quantity = Null;
                }else{
                  $ingredients->heading_id = '0';
                  $ingredients->quantity = $value['qty'];
                  $ingredients->parent_id = $heading;
                }

                if(!isset($value['unit']) || $value['unit'] == false){
                  $ingredients->unit = Null;
                }else{
                  $ingredients->unit = $value['unit'];
                }

                if(!isset($value['incredient']) || $value['incredient'] == false){
                  $ingredients->foodstaff_id = Null;
                }else{//check if value added exists in database and if not add it else use existing value
                  // $ingredients->foodstaff_id = $value['incredient'];
                  if (Foodstaff::where('id', '>', $value['incredient'])->exists()) {
                     $ingredients->foodstaff_id = $value['incredient'];
                  }else{
                    $foodstaff = new Foodstaff;
                    $foodstaff->name = $value['incredient'];
                    $foodstaff->save();
                    $ingredients->foodstaff_id = $foodstaff->id;
                  }
                }

                if(!isset($value['details']) || $value['details'] == false){
                  $ingredients->details = Null;
                }else{
                  $ingredients->details = $value['details'];
                }

                $ingredients->recipe_id = $recipe->id;
                $ingredients -> save();
                }

                foreach ($request->tags as $key => $value) {
                  // $tag = Tag::firstOrCreate(['id' => $value]); //if I enter value it is never found
                  $tags = Tag::where('id' , '=', $value)->first();
                    if ($tags === null) {
                      $tag = new Tag;
                      $tag->name = $value;
                      $string = $value;
                      $string = strtr($string, [' '=>'-', 'α'=>'a', 'ά'=>'a','β'=>'b','γ'=>'g','δ'=>'d','ε'=>'e','έ'=>'e','ζ'=>'z','η'=>'h','ή'=>'h','θ'=>'th','ι'=>'i','ϊ'=>'i','ί'=>'i','κ'=>'k','λ'=>'l','μ'=>'m','ν'=>'n','ξ'=>'x','ο'=>'o','ό'=>'o','π'=>'p','ρ'=>'r','σ'=>'s','τ'=>'t','υ'=>'u','ϋ'=>'u','ύ'=>'u','φ'=>'f','χ'=>'x','ψ'=>'ps','ω'=>'o','ώ'=>'o','ς'=>'s', 'Α'=>'a', 'Ά'=>'a','Β'=>'b','Γ'=>'g','Δ'=>'d','Ε'=>'e','Έ'=>'e','Ζ'=>'z','Η'=>'h','Ή'=>'h', 'Θ'=>'th','Ι'=>'i','Ϊ'=>'i','Ί'=>'i','Κ'=>'k','Λ'=>'l','Μ'=>'m','Ν'=>'n','Ξ'=>'x','Ο'=>'o','Ό'=>'o','Π'=>'p','Ρ'=>'r','Σ'=>'s','Τ'=>'t','Υ'=>'u','Ϋ'=>'u','Ύ'=>'u','Φ'=>'f','Χ'=>'x','Ψ'=>'ps','Ω'=>'o','Ώ'=>'o','Σ'=>'s']);
                      $tag->slug = $string;
                      $tag->slug = $string;
                      $tag->save();
                      $recipe->tags()->attach($tag);
                    }else{
                      $recipe->tags()->sync($value);
                    }
                }

         $recipes = Recipe::all();
         // dd ($recipes);
         return redirect()->route('recipes.index', ['recipes'])->with('message', 'Συνταγή ενημερώθηκε επιτυχώς');
          // dd($description);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }

    //get list for drop down
    public function ingretientsList()
    {
      $foodstaffs = DB::table("foodstaffs")
                  ->pluck("name", "id" );
                  // ->where("state_id",$request->state_id)
                  // ->get();
      return response()->json($foodstaffs);



     //  // dd(Footstaff::all());
     //  // $footstaffs = Footstaff::orderby('id','asc')->select('*')->get();
     //  $foodstaffs = Foodstaff::select('name')->get();
     //  // dd($foodstaffs);
     //  $foodstaff['data'] = $foodstaffs;
     //
     // echo json_encode($foodstaff);
     // exit;
     //  // echo json_encode($footstaff);
     //  // exit;
    }

    //get slug to check if similar exists
    public function slugList()
    {
      $slugs = DB::table("recipes")
                  ->pluck("slug");
                  // ->where("state_id",$request->state_id)
                  // ->get();
      return response()->json($slugs);
    }

      /**
     * Favorite a particular post
     */
     public function favoriteRecipe($id)
      // public function favoriteRecipe(Recipe $recipe)
      {

          // Auth::user()->favorites()->attach($recipe);
          Auth::user()->favorites()->attach($id);

          // dd(Auth::user());

          return back();
      }

        /**
         * Unfavorite a particular post
         *
         */
        // public function unFavoriteRecipe(Recipe $recipe)
    public function unFavoriteRecipe($id)

    {
      Auth::user()->favorites()->detach($id);

        // Auth::user()->favorites()->detach($recipe->id);

        return back();
    }
}
