@extends('layouts.app')

@section('content')
  <div class="container" py-5>
    <form action="/car/{{$car->id}}/update" method="post">
    <!-- @method('PUT') -->
    @csrf
     <div class="conatainer">
       <label for="model" class="form-label">Model</label>
       <input value="{{$car->model}}" type="text" name="model" class="form-control" id="model" placeholder="">
     </div>
     <div class="mb-3">
       <label for="year" class="form-label">Year</label>
       <input value="{{$car->year}}" type="text" name="year" class="form-control" id="year" placeholder="">
     </div>
     <div class="mb-3">
       <label for="email" class="from-label">Email</label>
       <input value="{{$car->email}}" type="email" name="email" class="form-control" id="email" placeholder="">
     </div>
     <div class="mb-3">
      <label for="manufacturer" class="form-label">Manufacturer</label>
      <select name="manufacturer_id" id="manufacturer_id" 
          class="from-select @error('manufacturer') is-invalid @enderror">
          <option value="0">Select Manufacturer</option>
                    @foreach($manufacturers as $manufacturer)
                        <option value="{{$manufacturer->id}}"
                            {{$manufacturer->id === $car->manufacturer_id ? 'selected' : ''}}
                        >{{$manufacturer->name}}</option>
                    @endforeach
                </select>
     </div>

     <div class="conatiner">
      <button type="submit" class="btn btn-primary">
        Save Changes
      </button>
    </div>
    @if($success)
    <div class="container mb-3">
      <div class="alert alert-success" role="alert">
        Update was successful
      </div>
    </div>
    @endif

    </form>
   
  </div>
  

@endsection