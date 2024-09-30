<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiposede extends Model
{
    public function sedes()
    {
        return $this->hasMany(sedes::class);
    }
}
