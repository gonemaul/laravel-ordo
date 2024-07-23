<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenis = collect(['Sedan', 'SUV', 'Minivan']);
        $manufacture = collect([1,2,3,4,5]);
        foreach ($manufacture as $item) {
            DB::table('cars')->insert([
                'nama' => Str::random(5),
                'jenis' => $jenis->random(),
                'harga' => rand(100000, 500000),
                'tanggal_pembuatan' => now(),
                'manufacture_id' => $item
            ]);
        }
    }
}
