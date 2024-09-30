<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    public function modelo()
    {
        return $this->hasMany(modelos::class);
    }
    public function bien()
    {
        return $this->hasMany(bienes::class);
    }
}
