<form >
  <div class="form-row">
      <div class="form-group col-md-4">
          <label for="exampleFormControlNmae">Ονομασία</label>
          <input type="text" class="form-control" id="exampleFormControlName" placeholder="Καταχώρησε ονομασία" wire:model="name">
          @error('name') <span class="text-danger">{{ $message }}</span>@enderror
      </div>
      <div class="form-group col-md-4">
          <label for="FormControlSlug">Slug</label>
          <input type="text" class="form-control" id="FormControlSlug" placeholder="Καταχώρησε Slug" wire:model="slug">
          @error('slug') <span class="text-danger">{{ $message }}</span>@enderror
      </div>
      <div class="form-group col-md-8">
        <div class="form-group">
          <label for="exampleFormControlInput1">Αρχική Κατηγορία</label>
          <select class="form-control" wire:model="parent_id" name="parent_id">
            {{-- <option value="{{ $parent_id }}"></option> --}}
            <option value="">Επιλογή Αρχικής Κατηγορίας</option>
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
          @error('description') <span class="text-danger">{{ $message }}</span>@enderror
      </div>
      <div class="form-group col-md-5">
          <label for="exampleFormControlInput1">Περιγραφή</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Καταχώρησε περιγραφή" wire:model="description">
          @error('description') <span class="text-danger">{{ $message }}</span>@enderror
      </div>
      <div class="form-group">
          <label for="exampleFormControlInput2">Εικόνα</label>
          <label class="btn btn-primary">
            <i class="fa fa-image"></i>Επέλεξε Φωτογραφία<input type="file" style="display: none;" wire:model="image" name="image">
          </label>
          @error('image') <span class="text-danger">{{ $message }}</span>@enderror
            @if ($image)
              <label for="exampleFormControlInput2">Προεπισκόπιση:</label>
              <img src="{{ $image->temporaryUrl() }}" style="width:100px;">
            @else ($oldimage)
              <label for="exampleFormControlInput2">Προεπισκόπιση:</label>
              <img src="{{Storage::url($oldimage)}}" style="width:100px;">
           @endif
      </div>
  </div>
  <button wire:click.prevent="update()" class="btn btn-dark">Ενημέρωση</button>
  <button wire:click.prevent="cancel()" onclick="return confirm('Είσαι σίγουρος ότι θες να ακυρώσεις τις τροποποιήσεις;')"class="btn btn-danger">Ακύρωση</button>
</form>
