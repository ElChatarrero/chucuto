<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelos extends Model
{
    public function marca()
    {
        return $this->belongsTo(marcas::class);
    }
    public function categoria()
    {
        return $this->belongsTo(categorias::class);
    }
    public function bien()
    {
        return $this->hasMany(bienes::class);
    }
    public static function modelos($id)
    {
        return modelos::where('marca_id','=',$id)->get();
    }
}
