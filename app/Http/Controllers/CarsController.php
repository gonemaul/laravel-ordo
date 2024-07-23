<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function create(){
        // return view('create');
        return redirect()->route('insert');
    }

    public function insert(Request $request){

        Car::create([
            'nama' => 'Brio',
            'jenis' => 'Manual',
            'harga' => 21000000,
            'tanggal_pembuatan' => '2004-12-11',
            'manufacture_id' => 1
        ]);

        return redirect()->route('show');
    }

    public function show(){
        $car = Car::where('jenis', 'manual')->first();
        return view('show', ['car' => $car]);
    }
}
