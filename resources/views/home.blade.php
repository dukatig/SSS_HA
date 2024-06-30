@extends('layouts.app')

@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Model</th>
      <th scope="col">Year</th>
      <th scope="col">Salesperson Email</th>
      <th scope="col">Manufacturer</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
@foreach($cars as $car)
    <tr>
      <th scope="row">{{$car->id}}</th>
      <td>{{$car->model}}</td>
      <td>{{$car->year}}</td>
      <td>{{$car->email}}</td>
      <td>{{$car->manufacturer->name}}</td>
      </td>
      <td>
         <a href="/carview"
                       class="btn btn-primary btn-sm float-right">
                        Show
         </a>
      </td>
      <td>
        <a href="/car/{{$car->id}}"
                       class="btn btn-warning btn-sm float-right">
                        Edit
        </a>
      </td>
      <td>
        <form action="/car/{{$car->id}}" method="post">
           @csrf
           <button 
           onclick="deleteUser('{{$car->id}}')"
           type="submit" class="btn btn-outline-danger rounded-circle">X</button>
        </form>
      </td>
    </tr>
@endforeach
  </tbody>
</table>
@endsection

<script>
  function deleteUser(id)
  {
     fetch('/api/car/'+id, {
      method: 'post'
     }).then(()=>{
         document.getElementById(id).delete();
     }).catch(e=>{

     }).finally(()=>{

     });
  }
</script>