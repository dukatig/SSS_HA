@extends('layouts.app')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      
    </tr>
  </thead>
  <tbody>
@foreach($manufacturers as $m)
    <tr>
      <th scope="row">{{$m->id}}</th>
      <td>{{$m->name}}</td>
      <td>{{$m->address}}</td>
      <td>{{$m->phone}}</td>
    </tr>
@endforeach
  </tbody>
</table>

   
@endsection