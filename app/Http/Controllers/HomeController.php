<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class HomeController extends Controller
{
    
    public function index(Request $request)
    {
       //dd('this is the index function of the Homecontroller');
 
       //$manufacturer = Manufacturer::all();
       
       $cars = Car::with(['manufacturer'])->get();
 
       return view('home',['cars'=>$cars]);
    }
}
