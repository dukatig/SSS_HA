@extends('layouts.app')

@section('content')
<h1>{{$car->name}}</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Model</th>
      <th scope="col">Year</th>
      <th scope="col">Salesperson Email</th>
      <th scope="col">Manufacturer</th>
      
    </tr>
  </thead>
  <tbody>
@foreach($cars as $car)
    <tr>
      <th scope="row">{{$car->id}}</th>
      <td>{{$car->model}}</td>
      <td>{{$car->year}}</td>
      <td>{{$car->email}}</td>
      <td>{{$car->$maufacturer->name}}</td>
    </tr>
@endforeach
  </tbody>
</table>

@endsection