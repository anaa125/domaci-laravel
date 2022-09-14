<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kviz;
use App\Models\Takmicar;

class Ucesce extends Model
{
    use HasFactory;

    public function kviz()
    {
        return $this->belongsTo(Kviz::class);
    }

    public function takmicar()
    {
        return $this->belongsTo(Takmicar::class);
    }
}
