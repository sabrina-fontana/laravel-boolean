<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use del model Car
use App\Car;

class CarsController extends Controller {
    // creo il metodo index richiamo della rotta in web.php
    public function index() {
      // cars è un array di oggetti
      $cars = Car::all();
      // il controller ritorna la view cars.blade.php e l'array cars 
      return view('cars', ['cars' => $cars]);
    }
}
