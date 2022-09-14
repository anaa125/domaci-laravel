<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ucesce;

class Takmicar extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'godine',
    ];

    public function ucesca()
    {
        return $this->hasMany(Ucesce::class);
    }
}
