<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function create(){
        return view('create');
    }

    public function insert(Request $request){
        $validatedData = $request->validate([
            'nama' => ['required','string','max:255'],
            'jenis' => ['required','string','max:255'],
            'harga' => ['required','numeric'],
            'tanggal_pembuatan' => ['required','date']
        ]);

        // return $request;
        Car::create($validatedData);

        return redirect()->route('show');
    }

    public function show(){
        $car = Car::where('jenis', 'manual')->first();
        return view('show', ['car' => $car]);
    }
}
