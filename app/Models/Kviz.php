<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ucesce;

class Kviz extends Model
{
    use HasFactory;

    public function ucesca()
    {
        return $this->hasMany(Ucesce::class);
    }
}
