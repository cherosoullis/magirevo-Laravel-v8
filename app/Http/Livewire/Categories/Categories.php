<?php

namespace App\Http\Livewire\Categories;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
class Categories extends Component
{
  use WithFileUploads;


  public $categories, $name,  $slug, $image, $oldimage, $parent_id, $description, $category_id;
  public $updateMode = false;

    public function render()
    {
      $this->categories = Category::with('children')->whereNull('parent_id')->get();
      // dd($categories);
       // $this->categories = Category::all();
        return view('livewire.categories.categories');
    }

    private function resetInputFields(){
      $this->name = '';
      $this->slug = '';
      $this->image = '';
      $this->parent_id = '';
      $this->description = '';
    }

    public function save()
    {
    $validatedDate = $this->validate([
        'name' => 'required',
        'image'=> 'required|image|max:2048', // 1MB Max
        // 'description'=>'required',

    ],
    ['name.required' => 'Πρέπει να καταχωρηθεί ονομασία',
     'image.image' => 'Πρέπει να επελεγεί είδος φωτογραφία',
     'image.image' => 'Το μέγεθος της φωτογραφίας είναι μεγαλύτερο από το επιτρεπομενο',
     'image.required' => 'Πρέπει να επιλεγεί φωτογραφία',
    ],
    );
    // dd('hit');
    If ($this->image){
    $filename = $this->image->store('categories','public');
    }else{
    $filename = $this->oldimage;
    }
    // dd($this->parent_id);
    Category::create([
      'name' => $this->name,
      'slug' => $this->slug,
      'image' => $filename,
      'description' => $this->description,
      'parent_id' => $this->parent_id,
    ]);


    session()->flash('message', 'Η κατηγορία αποθηκεύθηκε.');

    $this->resetInputFields();

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $category = Category::where('id',$id)->first();
        $this->category_id = $id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->oldimage = $category->image;
        $this->description = $category->description;
        $this->parent_id = $category->parent_id;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required'
        ]);

        If ($this->image){
        $filename = $this->image->store('categories','public');
        }else{
        $filename = $this->oldimage;
        }

        if ($this->category_id) {
            $category = Category::find($this->category_id);
            $category->update([
                'name' => $this->name,
                'slug' => $this->slug,
                'image' => $filename,
                'description' => $this->description,
                'parent_id' => $this->parent_id,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Κατηγορία τροποποιήθηκε επιτυχώς');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            Category::where('id',$id)->delete();
            session()->flash('message', 'Κατηγορία διαγράφηκε επιτυχώς');
        }
    }

}
