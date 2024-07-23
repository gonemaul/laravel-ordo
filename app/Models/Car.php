<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'jenis', 'harga', 'tanggal_pembuatan'];

    public function manufacture()
    {
        return $this->belongsTo(Manufacture::class);
    }
}
