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
}
