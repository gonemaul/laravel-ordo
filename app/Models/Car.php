<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'jenis', 'harga', 'tanggal_pembuatan','manufacture_id'];

    public function manufacture()
    {
        return $this->belongsTo(Manufacture::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'car_feature');
    }
}
