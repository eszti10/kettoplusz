<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cityflight extends Model
{
    use HasFactory;

    public function cities()
    {
        return $this->belongToMany(City::class);
    }
    public function flight()
    {
        return $this->belongToMany(Flight::class);
    }
}
