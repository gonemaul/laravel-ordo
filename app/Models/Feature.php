<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function cars()
    {
        return $this->belongsToMany(Car::class, 'car_feature');
    }
}
