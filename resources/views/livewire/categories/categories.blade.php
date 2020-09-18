<div>
  <div class="container py-3">
    @if($updateMode)
        @include('livewire.categories.update')
    @else
        @include('livewire.categories.create')
    @endif

  <div class="row">
    <div class="col-md-12">

      <div class="card">
        <div class="card-header">
          <h3>Κατηγορίες</h3>
        </div>
        <div class="card-body">
          <ul class="list-group">
            @foreach ($categories as $category)
              <li class="list-group-item">
                <div class="d-flex justify-content-between">
                <img src="storage/{{ $category->image }}" alt="" style="width:50px;">  {{ $category->name }} : {{ $category->description }}

                  <div class="button-group d-flex">
                    <button wire:click="edit({{ $category->id }})" class="btn btn-primary btn-sm">Τροποποίηση</button>
                    <button wire:click="delete({{ $category->id }})" onclick="return confirm('Είσαι σίγουρος ότι θες να διαγράψεις το συστατικό;')" class="btn btn-danger btn-sm">Διαγραφή</button>
                  </div>
                </div>

                @if ($category->children)
                  <ul class="list-group mt-2">
                    @foreach ($category->children as $child)
                      <li class="list-group-item">
                        <div class="d-flex justify-content-between">
                          <img src="storage/{{ $child->image }}" alt="" style="width:50px;"> {{ $child->name }}: {{ $child->description }}

                          <div class="button-group d-flex">
                            <button wire:click="edit({{ $child->id }})" class="btn btn-primary btn-sm">Τροποποίηση</button>
                            <button wire:click="delete({{ $child->id }})" onclick="return confirm('Είσαι σίγουρος ότι θες να διαγράψεις το συστατικό;')" class="btn btn-danger btn-sm">Διαγραφή</button>
                            {{-- <button type="button" class="btn btn-sm btn-primary mr-1 edit-category" data-toggle="modal" data-target="#editCategoryModal" data-id="{{ $child->id }}" data-name="{{ $child->name }}">Edit</button>

                            <form action="{{ route('categories.destroy', $child->id) }}" method="POST">
                              @csrf
                              @method('DELETE')

                              <button type="submit" class="btn btn-sm btn-danger">Διαγραφή</button>
                            </form> --}}
                          </div>
                        </div>
                      </li>
                    @endforeach
                  </ul>
                @endif
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>

    {{-- <div class="col-md-5">
      <div class="card">
        <div class="card-header">
          <h3>Δημιουργία Κατηγορίας</h3>
        </div>

        <div class="card-body">
          <form wire:submit.prevent="save">

            <div class="form-group">
              <select class="form-control" wire:model="parent_id" name="parent_id">
                <option value="">Επιλογή Αρχικής Κατηγορίας</option>

                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Όνομα Κατηγορίας" wire:model="name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Περιγραφή" wire:model="description">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Δημιουργία</button>
            </div>
          </form>
        </div>
      </div>
    </div> --}}
  </div>
</div>
</div>
