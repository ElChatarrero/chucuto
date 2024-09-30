<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class codigo_uniadmin extends Model
{
    public function responsable()
    {
        return $this->hasMany(responsables::class);
    }
}
