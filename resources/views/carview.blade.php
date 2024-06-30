@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Car Name: "{{$car->model}}"
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-md-2">Year:</div>
            <div class="col-md-10">{{$car->year}}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Sales Person Email:</div>
            <div class="col-md-10">{{$car->email}}</div>
        </div>        

        <div class="row">
            <div class="col-md-2">Manufacturer:</div>
            <div class="col-md-10">{{$car->manufacturer}}</div>
        </div>   
</div>

<div class="mt-2">
    <button type="button" class="btn btn-primary" (click)="onBackButtonClick()">
            Back to Car List
    </button>
</div>
@endsection