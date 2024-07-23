<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manufacture extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat'];

    public function car(): HasOne
    {
        return $this->hasOne(Car::class);
    }
}
