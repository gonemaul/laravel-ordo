<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FirstController extends Controller
{
    public function index(){
        return "Hello World";
    }

    public function perkalian($angka){
        return $angka * 2;
    }

    public function tambah(Request $request){
        $validatedData = $request->validate([
            'angka1' => 'required|numeric',
            'angka2' => 'required|numeric',
        ]);

        $hasil = $request->query('angka1') + $request->query('angka2');
        return view('view')->with('hasil', $hasil);
    }

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
        DB::table('cars')->insert([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'tanggal_pembuatan' => $request->tanggal_pembuatan
        ]);

        return redirect()->route('show');
    }

    public function show(){
        $cars = DB::table('cars')->where('jenis', 'manual')->first();
        return view('show', ['car' => $cars]);
    }
}
