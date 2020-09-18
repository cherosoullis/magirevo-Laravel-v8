<form>
  <div class="form-row">
    <div class="form-group  col-md-4">
        <input type="hidden" wire:model="foodstaff_id">
        <label for="exampleFormControlInput1">Ονομασία</label>
        <input type="text" class="form-control" wire:model="name" id="exampleFormControlInput1" placeholder="Ονομασία">
        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group col-md-4">
        <label for="FormControlSlug">Slug</label>
        <input type="text" class="form-control" id="FormControlSlug" placeholder="Καταχώρησε slug" wire:model="slug">
        @error('slug') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group  col-md-4">
        <label for="exampleFormControlInput1">Περιγραφή</label>
        <input type="text" class="form-control" wire:model="description" id="exampleFormControlInput1" placeholder="Περιγραφή">
        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Εικόνα</label>
        <label class="btn btn-primary">
          <i class="fa fa-image"></i>Επέλεξε Φωτογραφία<input type="file" style="display: none;" wire:model="image" name="image">
        </label>
        {{-- <input type="text" class="form-control" wire:model="image" id="exampleFormControlInput2" placeholder="Εικόνα"> --}}
        @error('image') <span class="text-danger">{{ $message }}</span>@enderror
          @if ($image)
            <label for="exampleFormControlInput2">Νέα Προεπισκόπιση:</label>
            <img src="{{ $image->temporaryUrl() }}" style="width:100px;">
          @else($oldimage)
            {{-- @if (isset ($foodstaff->image)) --}}
            <label for="exampleFormControlInput2">Προεπισκόπιση:</label>
            <img src="{{Storage::url($oldimage)}}" style="width:100px;">
          @endif
    </div>
  </div>
    <button wire:click.prevent="update()" class="btn btn-dark">Ενημέρωση</button>
    <button wire:click.prevent="cancel()" onclick="return confirm('Είσαι σίγουρος ότι θες να ακυρώσεις τις τροποποιήσεις;')"class="btn btn-danger">Ακύρωση</button>
</form>
