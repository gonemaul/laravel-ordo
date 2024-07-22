<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index(){
        return "Hello World";
    }

    public function perkalian($angka){
        return $angka * 2;
    }

    public function tambah(Request $request){
        return $request->query('angka1') + $request->query('angka2');
    }
}
