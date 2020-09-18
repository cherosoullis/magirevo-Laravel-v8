<form wire:submit.prevent="save">
  <div class="form-row">
      <div class="form-group col-md-4">
          <label for="FormControlName">Ονομασία</label>
          <input type="text" class="form-control" id="FormControlName" placeholder="Καταχώρησε ονομασία" wire:model="name">
          @error('name') <span class="text-danger">{{ $message }}</span>@enderror
      </div>
      <div class="form-group col-md-4">
          <label for="FormControlSlug">Slug</label>
          <input type="text" class="form-control" id="FormControlSlug" placeholder="Καταχώρησε Slug" wire:model="slug">
          @error('slug') <span class="text-danger">{{ $message }}</span>@enderror
      </div>
      <div class="form-group col-md-4">
        <div class="form-group">
          <label for="FormControlCategory">Αρχική Κατηγορία</label>
          <select class="form-control" wire:model="parent_id" name="parent_id">
            <option value="">Επιλογή Αρχικής Κατηγορίας</option>
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
          {{-- <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Καταχώρησε περιγραφή" wire:model="parent_id"> --}}
          @error('description') <span class="text-danger">{{ $message }}</span>@enderror
      </div>
      <div class="form-group col-md-6">
          <label for="FormControlDescription">Περιγραφή</label>
          <input type="text" class="form-control" id="FormControlDescription" placeholder="Καταχώρησε περιγραφή" wire:model="description">
          @error('description') <span class="text-danger">{{ $message }}</span>@enderror
      </div>
      <div class="form-group file">
          <label for="FormControlImage">Εικόνα</label>
          <label class="btn btn-primary">
            <i class="fa fa-image"></i>Επέλεξε Φωτογραφία<input type="file" style="display: none;" wire:model="image" name="image">
          </label>
          {{-- <input type="file" id="choose-file" wire:model="image"> --}}
          @error('image') <span class="error">{{ $message }}</span> @enderror
            @if ($image)
              <label for="FormControlPreview">Προεπισκόπιση:</label>
              <img src="{{ $image->temporaryUrl() }}" style="width:100px;">
            @endif
          {{-- <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="image" placeholder="Enter Image">
          @error('image') <span class="text-danger">{{ $message }}</span>@enderror --}}
      </div>
  </div>
    <button  class="btn btn-success">Αποθήκευση</button>

</form>
