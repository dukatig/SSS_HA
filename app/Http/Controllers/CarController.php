<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;
use App\Http\Requests\CreateCarRequest;
use App\Http\Requests\EditCarRequest;

class CarController extends Controller
{


    public function index()
    {
        $cars = Car::all();

        return view('cars', ['cars'=>$cars]);
    }
    public function show(Car $car)
    {
          
        return view('carview', ['car'=> $car]);
    }

    public function delete(Car $car)
    {
        $car->delete();
        return redirect('/');
    }

    public function edit(Car $car)
    {
        $manufacturers = Manufacturer::all();
       return view('car', ['manufacturers' => $manufacturers ,'car'=> $car, 'success'=>false]);
    }

    public function update(EditCarRequest $request, $car)
    {
        // $validated = $request->validate([
        //     'model'=>'required|string|max:255',
        //     'year' => 'required|digits:4|integer|min:1600|max:'.(date('Y')+1),
        //     'email'=> 'required|string|email|unique:cars|max:255',
        // ]);
     
            $car->model=$request->input('model');
            $car->year=$request->input('year');
            $car->email=$request->input('email');
            $car->manufacturer_id=$request->input('manufacturer');
            
         

         $car->save();


         $manufacturers = Manufacturer::all();

         return view('car', [ 'car'=>$car,'manufacturers'=>$manufacturers,'success'=>true]);
    }

    public function create()
    {
        $manufacturers = Manufacturer::all();
        return view('create', ['manufacturers'=>$manufacturers,'success' => false]);
    }

    public function store(CreateCarRequest $request)
    {
             $car = new Car([
                'model'=>$request->input('model'),
                'year'=>$request->input('year'),
                'email'=>$request->input('email'),
                'manufacturer_id'=>$request->input('manufacturer'),
                
             ]);

             $car->save();

             $manufacturers = Manufacturer::all();

             return view('create', [ 'manufacturers'=>$manufacturers,'success'=>true]);
    }
}
