<?php

namespace App\Http\Livewire\Foodstaffs;

use Livewire\Component;
use App\Models\Foodstaff;
use Livewire\WithFileUploads;

class Foodstaffs extends Component
{

      use WithFileUploads;

      public $foodstaffs, $name, $slug, $image, $oldimage, $description, $foodstaff_id;
      public $updateMode = false;

        public function render()
        {
          $this->foodstaffs = Foodstaff::all();

          // dd($this->foodstaffs = Foodstaff::all());
          return view('livewire.foodstaffs.foodstaffs');
            // return view('livewire.foodstaffs');
        }

        private function resetInputFields(){
        $this->name = '';
        $this->slug = '';
        $this->image = '';
        $this->description = '';
        }

        // public function updatedPhoto()
        // {
        //     $this->validate([
        //         'image' => 'image|max:1024',
        //     ]);
        // }

        public function save()
        {
        $validatedDate = $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'image'=> 'required|image|max:2048', // 1MB Max
            // 'description'=>'required',

        ],
        ['name.required' => 'Πρέπει να καταχωρηθεί ονομασία',
        'slug.required' => 'Πρέπει να καταχωρηθεί slug',
        'image.image' => 'Πρέπει να επελεγεί είδος φωτογραφία',
        'image.max' => 'Το μέγεθος της φωτογραφίας είναι μεγαλύτερο από το επιτρεπομενο',
        'image.required' => 'Πρέπει να επιλεγεί φωτογραφία'],
        );

          // $filename = $this->image;
          //
          // $validatedData['image']=$filename;
          //
          // Foodstaff::create($validatedData);
          // $filename->store('images','public');
        // $filename = $this->image->store('images','public');
        // $filename = $this->photo->store('public/images');

      //   Profile::create([
      //     'username' => $this->username,
      //     'photo' => $filename = $this->photo->store('public/images'),
      //   ]);
      // }
      // $filename = $this->photo->store('photos');

      // Profile::create([
      //   'username' => $this->username,
      //   'photo' => $filename,
      // ]);
    // }

      $filename = $this->image->store('foodstaffs','public');

      Foodstaff::create([
        'name' => $this->name,
        'slug' => $this->slug,
        'image' => $filename,
        'description' => $this->description,
      ]);
    // }



        // dd($filename);
        // $food = [
        //   'name' => request('name'),
        //   'image' => $filename,
        //   'description' => request('description'),
        // ];
        // Foodstaff::create($food);

          // $validatedData['name']=$filename;
        // Foodstaff::create($validatedDate);

        session()->flash('message', 'Το συστατικό αποθηκεύθηκε.');

        $this->resetInputFields();

        }


        public function edit($id)
        {
            $this->updateMode = true;
            $foodstaff = Foodstaff::where('id',$id)->first();
            $this->foodstaff_id = $id;
            $this->name = $foodstaff->name;
            $this->slug = $foodstaff->slug;
            $this->oldimage = $foodstaff->image;
            $this->description = $foodstaff->description;

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
            $filename = $this->image->store('foodstaffs','public');
            }else{
            $filename = $this->oldimage;
            }

            if ($this->foodstaff_id) {
                $foodstaff = Foodstaff::find($this->foodstaff_id);
                $foodstaff->update([
                    'name' => $this->name,
                    'slug' => $this->slug,
                    'image' => $filename,
                    'description' => $this->description,
                ]);
                $this->updateMode = false;
                session()->flash('message', 'Συστατικό τροποποιήθηκε επιτυχώς');
                $this->resetInputFields();

            }
        }

        public function delete($id)
        {
            if($id){
                Foodstaff::where('id',$id)->delete();
                session()->flash('message', 'Συστατικό διαγράφηκε επιτυχώς');
            }
        }
}
