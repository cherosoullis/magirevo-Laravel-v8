<div>
    @if($updateMode)
        @include('livewire.foodstaffs.update')
    @else
        @include('livewire.foodstaffs.create')
    @endif
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>ΑΑ</th>
                <th>Ονομασία</th>
                <th>Slug</th>
                <th>Εικόνα</th>
                <th>Περιγραφή</th>
                <th>Ενέργεια</th>
            </tr>
        </thead>
        <tbody>
            @foreach($foodstaffs as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->slug }}</td>
                <td><img src="storage/{{ $value->image }}" alt="" style="width:250px;"></td>
                <td>{{ $value->description }}</td>
                <td>
                <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Τροποποίηση</button>
                <button wire:click="delete({{ $value->id }})" onclick="return confirm('Είσαι σίγουρος ότι θες να διαγράψεις το συστατικό;')" class="btn btn-danger btn-sm">Διαγραφή</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
