<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\categorias;
use App\Models\condiciones;
use App\Models\modelos;
use App\Models\marcas;

class bienes extends Model
{
    public function condiciones()
    {
        return $this->belongsTo(condiciones::class);
    }
    public function categoria()
    {
        return $this->belongsTo(categorias::class);
    }
    public function modelos()
    {
        return $this->belongsTo(modelos::class);
    }
    public function marca()
    {
        return $this->belongsTo(marcas::class);
    }

    public function scopecategorias($query, $categorias)
	{
		if($categorias)
			return $query->where('categoria_id', '=', "$categorias" );
	}
    public function scopemarca($query, $marca)
	{
		if($marca)
			return $query->where('marca_id', '=', "$marca" );
	}
    public function scopemodelo($query, $modelo)
	{
		if($modelo)
			return $query->where('modelos_id', '=', "$modelo" );
	}
    public function scopeN_bien($query, $N_bien)
	{
		if($N_bien)
			return $query->where('N_bien', '=', "$N_bien" );
	}
    public function scopecondicionId($query, $condicionId)
	{
		if($condicionId)
			return $query->where('condiciones_id', '=', "$condicionId" );
	}
    public function scopedisponibilidadId($query, $disponibilidadId)
	{
		if($disponibilidadId)
			return $query->where('disponible', '=', "$disponibilidadId" );
	}
    public function prestamos()
    {
        return $this->belongsToMany(prestamo::class, 'bien_prestamos');
    }
}

