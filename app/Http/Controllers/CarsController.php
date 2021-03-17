<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use del model Car
use App\Car;

class CarsController extends Controller {
    // creo il metodo index richiamo della rotta in web.php
    public function index($id = null) {
      // cars è un array di oggetti
      $cars = Car::all();
      if ($id === null) {
        // se l'id non è stato specificato il controller ritorna la view cars.blade.php e l'array cars
        return view('cars', ['cars' => $cars]);
      } else {
        // altrimenti ritorna la view single-car.blade.php con i dati dell'auto in base all'id
        if ($id <= count($cars)) {
          return view('single-car', ['cars' => $cars, 'id' => $id]);
        } else {
          return 'L\' auto che cerchi non esiste. Riprova con un altro id.';
        }
      }
    }
}
