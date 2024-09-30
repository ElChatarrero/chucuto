<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marcas extends Model
{
    public function modelos()
    {
        return $this->hasMany(modelos::class);
    }

    public function bien()
    {
        return $this->hasMany(bienes::class);
    }
    public static function marcas($id)
    {
        return marcas::where('categoria_id','=',$id)->get();
    }
}
