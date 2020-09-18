@extends('layouts.app')


@section('content')

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div><br/>
  @endif
  {{-- <div class="jumbotron" style="background-image: url('/storage/images/wood.jpg'); margin:20px;"> --}}
<div style="padding:20px;">
  <div class="jumbotron">
  <form class="recipe-form" method="POST" action="{{route('recipes.store')}}" enctype="multipart/form-data" >
    @method ('post')
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <input name="name" id="name" class="input-text js-input name-input {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" placeholder="Όνομα" value="{{old('name')}}">
        <label class="label" for="name">Ονομασία</label>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="slug"><strong>Slug</strong></label>
        <input name="slug" id="slug" class="form-control" type="text" placeholder="Slug" readonly value="{{old('slug')}}">
      </div>
    </div>
    {{-- <div class="form-row"> --}}
      <div class="form-group">
        <label for="slug"><strong>Μικρή Περιγραγή</strong></label>
        <textarea name="description" class="summernoteDescription"  value="test">{{old('description')}}</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
    {{-- </div> --}}
  <div class="form-row">
    <div class="form-group col-md-4">
      {{-- <label for="exampleFormControlInput2">Εικόνα</label> --}}
      <label class="btn btn-primary">
        <i class="fa fa-image"></i>Επέλεξε Φωτογραφία<input type="file" style="display: none;" id="recipe_photo" name="image" onchange="loadPreview(this);" >
      </label>
      {{-- <input name="image" id="image" class="input-text" type="file"> --}}
       <img id="preview_img" src="https://www.w3adda.com/wp-content/uploads/2019/09/No_Image-128.png" class="img-fluid rounded border border-success" width="350" height="350"/>
       @error('image')
           <div class="alert alert-danger">{{ $message }}</div>
       @enderror
    </div>
    <div class="form-group col-md-2">
      <p class="font-weight-bold">Χαρακτηριστικά</p>

      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="helthy" class="custom-control-input" id="check1" {{ old('helthy') == 'on' ? 'checked' : '' }}>
            <label class="custom-control-label" for="check1">Υγιεινό</label>
          </div>
        </li>
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="quick" class="custom-control-input" id="check2" {{ old('quick') == 'on' ? 'checked' : '' }}>
            <label class="custom-control-label" for="check2">Γρήγορο</label>
          </div>
        </li>
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="easy" class="custom-control-input" id="check3" {{ old('easy') == 'on' ? 'checked' : '' }}>
            <label class="custom-control-label" for="check3">Εϋκολο</label>
          </div>
        </li>
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="sugarfree" class="custom-control-input" id="check4" {{ old('sugarfree') == 'on' ? 'checked' : '' }}>
            <label class="custom-control-label" for="check4">Χωρίς Ζάχαρη</label>
          </div>
        </li>
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="glutenfree" class="custom-control-input" id="check5" {{ old('glutenfree') == 'on' ? 'checked' : '' }}>
            <label class="custom-control-label" for="check5">Χωρίς Γλουτένη</label>
          </div>
        </li>
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="diet" class="custom-control-input" id="check6" {{ old('diet') == 'on' ? 'checked' : '' }} >
            <label class="custom-control-label" for="check6">Διαιτητική</label>
          </div>
        </li>
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="spicy" class="custom-control-input" id="check7" {{ old('spicy') == 'on' ? 'checked' : '' }}>
            <label class="custom-control-label" for="check7">Καυτερό</label>
          </div>
        </li>
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="protein" class="custom-control-input" id="check8" {{ old('protein') == 'on' ? 'checked' : '' }}>
            <label class="custom-control-label" for="check8">Πρωτεϊνούχη</label>
          </div>
        </li>
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="vegan" class="custom-control-input" id="check9" {{ old('vegan') == 'on' ? 'checked' : '' }}>
            <label class="custom-control-label" for="check9">Χορτοφαγική</label>
          </div>
        </li>
      </ul>
    </div>
    <div class="form-group col-md-2">
      <p class="font-weight-bold">Τρόπος ετοιμασίς</p>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="pot" class="custom-control-input" id="check10" {{ old('pot') == 'on' ? 'checked' : '' }}>
            <label class="custom-control-label" for="check10">Κατσαρόλα</label>
          </div>
        </li>
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="hull" class="custom-control-input" id="check11" {{ old('hull') == 'on' ? 'checked' : '' }}>
            <label class="custom-control-label" for="check11">Γάστρα</label>
          </div>
        </li>
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="oven" class="custom-control-input" id="check12" {{ old('oven') == 'on' ? 'checked' : '' }} >
            <label class="custom-control-label" for="check12">Φούρνο</label>
          </div>
        </li>
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="pan" class="custom-control-input" id="check13" {{ old('pan') == 'on' ? 'checked' : '' }}>
            <label class="custom-control-label" for="check13">Τηγάνι</label>
          </div>
        </li>
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="charcoal" class="custom-control-input" id="check14" {{ old('charcoal') == 'on' ? 'checked' : '' }}>
            <label class="custom-control-label" for="check14">Κάρβουνα</label>
          </div>
        </li>
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="wood_oven" class="custom-control-input" id="check15" {{ old('wood_oven') == 'on' ? 'checked' : '' }}>
            <label class="custom-control-label" for="check15">Ξυλόφουρνο</label>
          </div>
        </li>
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="rotisserie" class="custom-control-input" id="check16" {{ old('rotisserie') == 'on' ? 'checked' : '' }}>
            <label class="custom-control-label" for="check16">Ψησταριά</label>
          </div>
        </li>
      </ul>
    </div>

    <div class="form-group col-md-2">
      <p class="font-weight-bold">Περιστάστις</p>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="christmas" class="custom-control-input" id="check17">
            <label class="custom-control-label" for="check17">Χριστούγεννα</label>
          </div>
        </li>
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="easter" class="custom-control-input" id="check18">
            <label class="custom-control-label" for="check18">Πάσχα</label>
          </div>
        </li>
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="valendines" class="custom-control-input" id="check19">
            <label class="custom-control-label" for="check19">Αγίου Βαλεντίνου</label>
          </div>
        </li>
        <li class="list-group-item">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" name="fasting" class="custom-control-input" id="check20">
            <label class="custom-control-label" for="check20">Νηστείες</label>
          </div>
        </li>
      </ul>
    </div>
  </div>

    <div class="form-row">
      <div class="form-group col-md-2">
        <label for="inputPrepTime font-weight-bold">Χρόνος Προετοιμασίας</label>
        <input name="PrepTime" type="time" class="form-control" id="inputPrepTime" value="{{null != old('PrepTime') ? old('PrepTime') : '00:00'}}">
      </div>
      <div class="form-group col-md-2">
        <label for="inputCookTime">Χρόνος Παρασκευής</label>
        <input name="CookTime" type="time" class="form-control" id="inputCookTime" value="{{null != old('CookTime') ? old('CookTime') : '00:00'}}">
      </div>

      {{-- <div class="form-group col-md-3">
          <label for="portion"></label>
        <div class="">
          <b>0</b> <input id="ex1" name="portion" type="text" class="span2" value="" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="[{{null != old('portion') ? old('portion') : '0'}}, 0]"/> <b>20</b>
        </div>
      </div>
      <div class="form-group col-md-1">
        <label for="serving_size"></label>
        <select name="serving_size" data-placeholder="Επιλέξτε Μονάδα" style="width: 200%" class="form-control js-multiple-portion" value="{{old('serving_size')}}">
          <option></option>
          <option value="1"{{ old('serving_size') == '1' ? 'selected' : '' }}>Μερίδες</option>
          <option value="2"{{ old('serving_size') == '2' ? 'selected' : '' }}>Πιάτα</option>
          <option value="3"{{ old('serving_size') == '3' ? 'selected' : '' }}>Ποτήρια</option>
          <option value="4"{{ old('serving_size') == '4' ? 'selected' : '' }}>Κιλά</option>
        </select>
      </div> --}}
    </div>

<div class="form-row">
  <div class="form-group col-md-3">
    <div class="">
      <b>0</b> <input id="ex1" name="portion" type="text" class="span2" value="" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="[{{null != old('portion') ? old('portion') : '0'}}, 0]"/> <b>20</b>
    </div>
  </div>
  <div class="form-group col-md-1">
    <select name="serving_size" data-placeholder="Επιλέξτε Μονάδα" style="width: 200%" class="form-control js-multiple-portion" value="{{old('serving_size')}}">
      <option></option>
      <option value="1"{{ old('serving_size') == '1' ? 'selected' : '' }}>Μερίδες</option>
      <option value="2"{{ old('serving_size') == '2' ? 'selected' : '' }}>Πιάτα</option>
      <option value="3"{{ old('serving_size') == '3' ? 'selected' : '' }}>Ποτήρια</option>
      <option value="4"{{ old('serving_size') == '4' ? 'selected' : '' }}>Κιλά</option>
    </select>
  </div>
</div>

    <div class="form-group">
      <label for="input-text">Βαθμός Δυσκολίας</label>
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-success {{ old('difficulty') == 'Πολύ Εύκολο' ? 'focus active' : '' }}">
          <input type="radio" name="difficulty" id="option1" autocomplete="off" value="Πολύ Εύκολο" {{ old('difficulty') == 'Πολύ Εύκολο' ? 'checked' : '' }}> Πολύ Εύκολο
        </label>
        <label class="btn btn-primary {{ old('difficulty') == 'Εύκολο' ? 'focus active' : '' }}">
          <input type="radio" name="difficulty" id="option2" autocomplete="off" value="Εύκολο" {{ old('difficulty') == 'Εύκολο' ? 'checked' : '' }}> Εύκολο
        </label>
        <label class="btn btn-secondary {{ old('difficulty') == 'Μέτριο' ? 'focus active' : '' }}">
          <input type="radio" name="difficulty" id="option3" autocomplete="off" value="Μέτριο" {{ old('difficulty') == 'Μέτριο' ? 'checked' : '' }}> Μέτριο
        </label>
        <label class="btn btn-warning {{ old('difficulty') == 'Δύσκολο' ? 'focus active' : '' }}">
          <input type="radio" name="difficulty" id="option4" autocomplete="off" value="Δύσκολο" {{ old('difficulty') == 'Δύσκολο' ? 'checked' : '' }}> Δύσκολο
        </label>
        <label class="btn btn-danger {{ old('difficulty') == 'Πολύ Δύσκολο' ? 'focus active' : '' }}">
          <input type="radio" name="difficulty" id="option5" autocomplete="off" value="Πολύ Δύσκολο" {{ old('difficulty') == 'Πολύ Δύσκολο' ? 'checked' : '' }}> Πολύ Δύσκολο
        </label>
      </div>
    </div>

    <div class="form-group">

      <label for="inputIngretients">Κατηγορία</label>

      {{-- {{is_array(old('categories')) ? in_array(2, old("categories"))?"selected":"":""}} --}}
      <select data-placeholder="Επιλέξτε Κατηγορία" name="categories[]" multiple="multiple" class="form-control js-multiple">
        {{-- @if (is_array(old('categories')))
            @foreach (old('categories') as $cat)
                <option value="{{ $cat }}" selected="selected">{{ $cat }}</option>
            @endforeach
        @endif --}}

        @foreach($categories as $category)
          {{-- <option value="{{$category->id}}">{{$category->name}}</option> --}}
          <optgroup label="{{$category->name}}">
            @foreach($category->children as $child)
              {{$child->id}} , {{$child->name}}
              {{-- The array has the value not the key --}}
              <option value='{{$child->id}}' {{is_array(old('categories')) ? in_array($child->id, old("categories")) ? "selected" :"" : ""}}>{{$child->name}}</option>
            @endforeach
          </optgroup>
          {{-- <option value="{{$category->id}}">{{$category->name}}</option> --}}
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="input-text">Εκτέλεση</label>
        <ul class="nav nav-tabs" role="tablist">
          @if(!is_null((old('execution'))))
                  @foreach(old('execution') as $key => $input)
                    {{-- {{$input['title']}} --}}
                    {{-- {{$key}} --}}
                    {{-- {{$input['body']}} --}}
                    <li class="nav-item"><a class="nav-link" href="#execution_0{{$key}}" data-toggle="tab">{{$input['title']}}</a><span><i class="fas fa-minus"></i></span></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="#execution_0'+id+'" data-toggle="tab">'+tabname+'</a><span><i class="fas fa-minus"></i></span></li> --}}
                  @endforeach
              @else

              @endif

            {{-- <li class="nav-item active"><input name="exectitle[]" id="execution" class="input-text" type="hidden" readonly value="Βήμα 2"><a class="nav-link active" href="#description_01" data-toggle="tab">Βήμα 1</a><span>x</span>
            </li> --}}
            {{-- <li class="nav-item"><a class="nav-link" href="#description_02" data-toggle="tab">Βήμα</a><span> x </span> --}}
            {{-- </li> --}}
            <li class="nav-item"><input name="execution" id="execution" class="input-text" type="text" placeholder="Όνομα εκτέλεσης"><a  href="#" class="add-execution"><i id="fa-plus" class="fas fa-plus"></i></a>
            </li>
        </ul>
        <div class="tab-content">
          @if(!is_null((old('execution'))))
                  @foreach(old('execution') as $key => $input)
                    <div class="tab-pane" id="execution_0{{$key}}">
                      <div class="tab-pane" id="execution">
                        <input name="execution[{{$key}}][title]" id="exectitle" class="input-text" type="hidden" readonly value="{{$input['title']}}">
                        <textarea name="execution[{{$key}}][body]" class="summernote1" required>{{$input['body']}}</textarea></div></div>
                    {{-- <div class="tab-pane" id="execution_0'+id+'"><div class="tab-pane" id="execution"><input name="{{$input[$key]['title']}}" id="exectitle" class="input-text" type="hidden" readonly value="{{$input['body']}}"><textarea name="execution['+id+'][body]" class="summernote'.{{$key}}.'" required></textarea></div></div> --}}
                  @endforeach
              @else

              @endif

            {{-- <div class="tab-pane active" id="description_01"><div class="tab-pane active" id="description"><textarea name="description[]" class="summernote" required value="test"></textarea></div></div> --}}
            {{-- <div class="tab-pane" id="description_02"><div class="tab-pane" id="description"><textarea name="description[]" class="summernote1" required value="test"></textarea></div></div> --}}
        </div>
    </div>
    {{-- <div class="container"> Working but in could be better
        <button type="button" name="addTitle" id="add-description" class="btn btn-success">Νέο Βήμα</button>
        <input name="tabname" id="tabname" class="input-text js-input name-input" type="text" placeholder="Όνομα Διαδικασίας" required>
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item active navpanel" ><a class="nav-link active" href="#description" data-toggle="tab">Διαδικασία παρασκευής</a><span>x</span></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="description"><textarea name="description[]" class="summernote" required value="test"></textarea></div>
    </div>
  </div> --}}



    <div class="form-group">
      <label for="inputCuisine">Κουζίνα</label>
      <select data-placeholder="Επιλέξτε Κουζίνα" name="cuisine" class="form-control js-multiple-cousine">
        <option></option>
        @foreach($cuisines as $cuisine)
          <option value="{{$cuisine->id}}" {{old("cuisine") == $cuisine->id ? "selected" : ""}}>{{$cuisine->name}}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="inputCuisine">Υλικά Συνταγής</label>
      <table class="table table-bordered"  style="width: 70%">
        <thead>
          <tr>
              <th scope="col">Ποσότητα</th>
              <th scope="col">Μονάδα Μέτρησης</th>
              <th scope="col">Συστατικό</th>
              <th scope="col">Σημειώσεις</th>
              <th scope="col">Ενέργεια</th>
          </tr>
        </thead>
        <tbody id="dynamicTable">
          {{-- Check if there are old values If not then create the table normally else loop to create the table --}}
            @if(is_null((old('addIngredients'))))
            <tr>
              <td colspan="4"><input type="text" name="addIngredients[0][heading]" placeholder="Τίτλος:Υλικά Συνταγής" class="form-control" value=""></td>
              <td><button type="button" name="addTitle" id="addTitle" class="btn btn-success">Καταχώρησε Τίτλο</button></td>
            </tr>
            <tr>
              <td><input type="text" name="addIngredients[1][qty]" placeholder="Καταχώρησε Ποσότητα" class="form-control" /></td>
              <td>
              <select name="addIngredients[1][unit]" data-placeholder="Επιλέξτε Μονάδα" style="width: 115%" class="form-control js-multiple-unit">
                <option></option>
                <option value="κ.γ.">Κουταλάκι Γλυκού</option>
                <option value="κ.σ.">Κουτάλι Σούπους</option>
                <option value="φλ.">Φλυντζάνι</option>
                <option value="σκ.">Σκελίδα</option>
                <option value="κουτί">Κουτί</option>
                <option value="κούπα">Κούπα</option>
                <option value="pieces">Τεμάχιο</option>
                <option value="2">Δέσμη</option>
                <option value="2">Πρέζα</option>
                <option value="gr">Γραμμάρια</option>
                <option value="Kg">Κιλά</option>
                <option value="ml">Χιλιοστόλιτρα </option>
                <option value="l">Λίτρα</option>
              </select>
              </td>
              <td>
              <select name="addIngredients[1][incredient]" data-placeholder="Επιλέξτε Συστατικό" style="width: 115%" class="form-control js-multiple-ingretients">
                <option></option>
                @foreach($foodstaffs as $foodstaff)
                  <option value="{{$foodstaff->id}}">{{$foodstaff->name}}</option>
                @endforeach
              </select>
              </td>
              <td><input type="text" name="addIngredients[1][details]" placeholder="Σημειώσεις" class="form-control" /></td>

              <td><button type="button" name="add" id="add" class="btn btn-success">Καταχώρησε Υλικό</button></td>
            </tr>

            @else
              <tr>
                @foreach(old('addIngredients') as $key => $input)

                  @isset($input['heading'])
                    <td colspan="4"><input type="text" name="addIngredients[{{$key}}][heading]" placeholder="Τίτλος:Υλικά Συνταγής" class="form-control" value="{{$input['heading']}}"></td>
                  @endisset

                  @isset($input['qty'])
                    <td><input type="text" name="addIngredients[{{$key}}][qty]" placeholder="Καταχώρησε Ποσότητα" class="form-control" value="{{$input['qty']}}"></td>
                  @endisset

                  @isset($input['unit'])
                    <td>
                    <select name="addIngredients[{{$key}}][unit]" data-placeholder="Επιλέξτε Μονάδα" style="width: 115%" class="form-control js-multiple-unit">
                      <option></option>
                      <option value="κ.γ." {{$input['unit'] == "κ.γ." ? "selected" : ""}}>Κουταλάκι Γλυκού</option>
                      <option value="κ.σ."{{$input['unit'] == "κ.σ." ? "selected" : ""}} >Κουτάλι Σούπους</option>
                      <option value="φλ."{{$input['unit'] == "φλ." ? "selected" : ""}} >Φλυντζάνι</option>
                      <option value="σκ."{{$input['unit'] == "σκ." ? "selected" : ""}} >Σκελίδα</option>
                      <option value="κουτί"{{$input['unit'] == "κουτί" ? "selected" : ""}} >Κουτί</option>
                      <option value="κούπα"{{$input['unit'] == "κούπα" ? "selected" : ""}} >Κούπα</option>
                      <option value="pieces"{{$input['unit'] == "pieces" ? "selected" : ""}} >Τεμάχιο</option>
                      <option value="2"{{$input['unit'] == "2" ? "selected" : ""}} >Δέσμη</option>
                      <option value="2"{{$input['unit'] == "2" ? "selected" : ""}} >Πρέζα</option>
                      <option value="gr"{{$input['unit'] == "gr" ? "selected" : ""}} >Γραμμάρια</option>
                      <option value="Kg"{{$input['unit'] == "Kg" ? "selected" : ""}} >Κιλά</option>
                      <option value="ml"{{$input['unit'] == "ml" ? "selected" : ""}} >Χιλιοστόλιτρα </option>
                      <option value="l"{{$input['unit'] == "l" ? "selected" : ""}} >Λίτρα</option>
                    </select>
                    </td>
                  @endisset

                  @isset($input['incredient'])
                    <td>
                    <select name="addIngredients[{{$key}}][incredient]" data-placeholder="Επιλέξτε Συστατικό" style="width: 115%" class="form-control js-multiple-ingretients">
                      <option></option>
                      @foreach($foodstaffs as $foodstaff)
                        <option value="{{$foodstaff->id}}" {{$input['incredient']== $foodstaff->id ? "selected" : ""}}>{{$foodstaff->name}}</option>
                      @endforeach
                    </select>
                    </td>
                    {{-- <td><input type="text" name="addIngredients[{{$key}}][incredient]" placeholder="Καταχώρησε Ποσότητα" class="form-control" value="{{$input['qty']}}"></td> --}}
                  @endisset

                  @isset($input['details'])
                    <td><input type="text" name="addIngredients[{{$key}}][details]" placeholder="Σημειώσεις" class="form-control" value="{{$input['details']}}"></td>
                  @endisset

                  @if ($key == 0)
                    <td><button type="button" name="addTitle" id="addTitle" class="btn btn-success">Καταχώρησε Τίτλο</button></td>
                  @elseif ($key == 1)
                    <td><button type="button" name="add" id="add" class="btn btn-success">Καταχώρησε Υλικό</button></td>
                  @else
                    <td><button type="button" class="btn btn-danger remove-tr">Διαγραφή</button></td>
                  @endif
                  {{-- @foreach($input as $subinput)
                      {{ $subinput }}
                  @endforeach --}}

                  {{-- {{var_dump($input)}} --}}
                </tr>
                @endforeach
            @endif
            {{-- <td colspan="3"><input type="text" name="addheading[0][heading]" placeholder="Τίτλος:Υλικά Συνταγής" style="width: 100%" class="form-control" value="Υλικά Συνταγής"></td> --}}

      </table>
    </div>

    <div class="form-group">
      <label for="inputIngretients"><strong>Ετικέτα</strong></label>
      <select name="tags[]" multiple="multiple" class="form-control js-multiple-tags">
      {{-- @foreach($available as $key => $room) --}}
        {{-- <option value="{{$room->room_no}}">{{$key+1}}. {{$room->room_no}} - €{{ $room->price }}</option> --}}
        {{-- <option></option> --}}
        @foreach($tags as $tag)
          <option value="{{$tag->id}}" {{is_array(old('tags')) ? in_array($tag->id, old("tags"))?"selected":"":""}}>{{$tag->name}}</option>
        @endforeach
      {{-- @endforeach --}}
      </select>
      {{-- </div>
     </div> --}}

    </div>

    <div class="form-group">
      <label for="inputCuisine"><strong>Διαθεσιμότητα</strong></label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="availability" id="publicRadios1" value="public" {{old('availability') ==  "public"? "checked": ""}} >
        <label class="form-check-label" for="publicRadios1">
          Δημόσια
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="availability" id="privateRadios2" value="private" {{old('availability') ==  "private"? "checked": ""}}>
        <label class="form-check-label" for="privateRadios2">
          Προσωπική
        </label>
      </div>
    </div>

    <label for="basic-url"><strong>Πηγή</strong></label>
    <div class="input-group col-md-6">
      <input name="source" type="text" class="form-control mb-2" id="basic-url" aria-describedby="basic-addon3" value="{{old('source')}}">
    </div>

    <div class="input-group col-md-6">
      <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon3">Web</span>
      </div>
      <input name="source_url" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{old('source')}}">
    </div>



    {{-- <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div> --}}
      {{-- <div class="form-group col-md-2">
        <label for="input">Χρόνος Παρασκευής</label>
        <input type="time" class="form-control" id="inputTime" value="00:00">
      </div> --}}
    {{-- </div> --}}

    {{-- <div class="form-group">
      <div class="d-flex justify-content-center my-4 pt-3"> --}}
      {{-- <div class="form-check"> --}}
        {{-- <span class="font-weight-bold blue-text fa-lg mr-2 mt-1"><i class="fas fa-thumbs-down" aria-hidden="true"></i></span>
        <input name='rate' id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="-10" data-slider-max="10" data-slider-step="1" data-slider-value="0"/>
        <span class="font-weight-bold blue-text fa-lg ml-2 mt-1"><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>
      </div>
    </div> --}}
    <button type="submit" class="btn btn-primary submit-btn hvr-grow m-5">Αποθήκευση</button>
  </form>
</div>
</div>

@endsection
