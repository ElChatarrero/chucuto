<?php

namespace App\Models;
use App\Models\municipios;
use App\Models\lsbs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estados extends Model
{
    public function municipio()
    {
        return $this->hasMany(municipios::class);
    }
}
