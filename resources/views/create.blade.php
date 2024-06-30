@extends('layouts.app')


@section('content')

<div class="container" py-5>
    <form action="/car" method="post">
     @csrf
     <div class="conatainer">
       <label for="model" class="form-label">Model</label>
       <input type="text" name="model"
                       class="form-control @error('model') is-invalid @enderror" id="model" placeholder="Car Model">
                @error('model')
                <span class="invalid-feedback">
                        {{ $message }}
                </span>
                @enderror
     </div>
     <div class="mb-3">
       <label for="year" class="form-label">Year</label>
       <input  type="text" name="year" class="form-control" id="year" placeholder="">
     </div>
     <div class="mb-3">
       <label for="email" class="from-label">email</label>
       <input type="email" name="email"
                       class="form-control @error('email') is-invalid @enderror" id="email"
                       placeholder="name@example.com">
                @error('email')
                <span class="invalid-feedback">
                        {{ $message }}
                </span>
                @enderror
     </div>
     <div class="mb-3">
      <label for="manufacturer" class="form-label">Manufacturer</label>
      <select name="manufacturer" class="form-select @error('manufacturer') is-invalid @enderror"
                        id="manufacturer">
                    @foreach($manufacturers as $manufacturer)
                        <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                    @endforeach
                </select>
                @error('manufacturer')
                <span class="invalid-feedback">
                        {{ $message }}
                </span>
                @enderror
     </div>
     <div class="conatiner">
      <button type="submit" class="btn btn-primary mb-3">
        Create
      </button>
     </div>
     @if($success)
     <div class="mb-3">
        <div class="alert alert-success mb-3">
            Car was created!
        </div>
     </div>
     @endif

    </form>
   
  </div>
@endsection