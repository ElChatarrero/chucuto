<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class responsables extends Model
{
    public function cargo()
    {
        return $this->belongsTo(cargos::class);
    }

    public function codigo_uniadmin()
    {
        return $this->belongsTo(codigo_uniadmin::class);
    }
    public function scopecedula($query, $cedula)
	{
		if($cedula)
			return $query->where('cedula', '=', "$cedula" );
	}
}
