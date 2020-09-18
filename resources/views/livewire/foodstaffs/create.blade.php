<form wire:submit.prevent="save">
  <div class="form-row">
      <div class="form-group col-md-4">
          <label for="exampleFormControlInput1">Ονομασία</label>
          <input type="text" class="form-control" id="exampleFormControlName" placeholder="Καταχώρησε ονομασία" wire:model="name">
          @error('name') <span class="text-danger">{{ $message }}</span>@enderror
      </div>
      <div class="form-group col-md-4">
          <label for="FormControlSlug">Slug</label>
          <input type="text" class="form-control" id="FormControlSlug" placeholder="Καταχώρησε slug" wire:model="slug">
          @error('slug') <span class="text-danger">{{ $message }}</span>@enderror
      </div>
      <div class="form-group col-md-8">
          <label for="exampleFormControlInput1">Περιγραφή</label>
          <input type="text" class="form-control" id="exampleFormControlDescription" placeholder="Καταχώρησε περιγραφή" wire:model="description">
          @error('description') <span class="text-danger">{{ $message }}</span>@enderror
      </div>
      <div class="form-group file">
          <label for="exampleFormControlInput2">Εικόνα</label>
          <label class="btn btn-primary">
            <i class="fa fa-image"></i>Επέλεξε Φωτογραφία<input type="file" style="display: none;" wire:model="image" name="image">
          </label>
          {{-- <input type="file" id="choose-file" wire:model="image"> --}}
          @error('image') <span class="error">{{ $message }}</span> @enderror
            @if ($image)
              <label for="exampleFormControlInput2">Προεπισκόπιση:</label>
              <img src="{{ $image->temporaryUrl() }}" style="width:100px;">
            @endif
          {{-- <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="image" placeholder="Enter Image">
          @error('image') <span class="text-danger">{{ $message }}</span>@enderror --}}
      </div>
  </div>
    <button  class="btn btn-success">Αποθήκευση</button>

</form>
