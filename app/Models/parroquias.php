<?php

namespace App\Models;
use App\Models\lsb;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parroquias extends Model
{
    public function municipios()
    {
        return $this->belongsTo(municipios::class);
    }
    public static function parroquias($id)
    {
        return parroquias::where('municipio_id','=',$id)->get();
    }
    public static function paq()
    {
        return parroquias::select('nombre', 'id')->distinct('id')->get();
    }
}
