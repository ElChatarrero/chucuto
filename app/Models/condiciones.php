<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class condiciones extends Model
{
    public function bien()
    {
        return $this->hasMany(bienes::class);
    }
}
