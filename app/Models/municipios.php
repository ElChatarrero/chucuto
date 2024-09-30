<?php

namespace App\Models;
use App\Models\lsb;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipios extends Model
{
    public function parroquia()
    {
        return $this->hasMany(parroquias::class);
    }
    public function estado()
    {
        return $this->belongsTo(estados::class);
    }
    public static function municipios($id)
    {
        return municipios::where('estado_id','=',$id)->get();
    }
    public static function mun()
    {
        return municipios::select('nombre', 'id')->distinct('id')->get();
    }
}
