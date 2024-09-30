<?php

namespace App\Http\Controllers;
use app\Mail\CorreoPrueba;
use Illuminate\Support\Facades\Route;


use PhpParser\Node\Stmt\Return_;

require(base_path('routes/route-list/route-auth.php'));

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contacto', [HomeController::class, 'contacto'])->name('contacto');

route::get('/verificaremail', [HomeController::class, 'VerificarEmail'])->name('VerificarEmail');

Route::middleware(['auth'])->group(function()
{
    Route::get('/bienes', [BienesController::class, 'index'])->name('bienes');
    Route::get('/bienes/crear', [BienesController::class, 'crear'])->name('bienes.crear');
    Route::post('/bienes/guardar', [BienesController::class, 'guardar'])->name('bienes.guardar');
    Route::get('/bienes/{id}/editar', [BienesController::class, 'editar'])->name('bienes.editar');
    Route::post('/bienes/{id}/actualizar', [BienesController::class, 'actualizar'])->name('bienes.actualizar');
    Route::delete('/bienes/{id}/deshabilitar/', [BienesController::class, 'deshabilitar'])->name('bienes.deshabilitar');
    Route::get('/bienes/{id}/habilitar/', [BienesController::class, 'habilitar'])->name('bienes.habilitar');
});

Route::middleware(['auth'])->group(function()
{
    Route::get('/mantenimiento', [mantenimientoController::class, 'index'])->name('mantenimiento');
    Route::get('/mantenimiento/crear', [mantenimientoController::class, 'crear'])->name('mantenimiento.crear');
    Route::post('/mantenimiento/guardar', [mantenimientoController::class, 'guardar'])->name('mantenimiento.guardar');
    Route::get('/mantenimiento/{id}/editar', [mantenimientoController::class, 'editar'])->name('mantenimiento.editar');
    Route::post('/mantenimiento/{id}/actualizar', [mantenimientoController::class, 'actualizar'])->name('mantenimiento.actualizar');
    Route::delete('/mantenimiento/{id}/deshabilitar/', [mantenimientoController::class, 'deshabilitar'])->name('mantenimiento.deshabilitar');
    Route::get('/mantenimiento/{id}/habilitar/', [mantenimientoController::class, 'habilitar'])->name('mantenimiento.habilitar');
});

Route::middleware(['auth'])->group(function()
{
    Route::get('/mantenimientoTec', [mantenimientotecgnController::class, 'index'])->name('mantenimientoTec');
    Route::get('/mantenimientoTec/crear', [mantenimientotecgnController::class, 'crear'])->name('mantenimientoTec.crear');
    Route::post('/mantenimientoTec/guardar', [mantenimientotecgnController::class, 'guardar'])->name('mantenimientoTec.guardar');
    Route::get('/mantenimientoTec/{id}/editar', [mantenimientotecgnController::class, 'editar'])->name('mantenimientoTec.editar');
    Route::post('/mantenimientoTec/{id}/actualizar', [mantenimientotecgnController::class, 'actualizar'])->name('mantenimientoTec.actualizar');
    Route::delete('/mantenimientoTec/{id}/deshabilitar/', [mantenimientotecgnController::class, 'deshabilitar'])->name('mantenimientoTec.deshabilitar');
    Route::get('/mantenimientoTec/{id}/habilitar/', [mantenimientotecgnController::class, 'habilitar'])->name('mantenimientoTec.habilitar');
});

Route::middleware(['auth'])->group(function()
{
    Route::get('/solicitantes', [solicitanteController::class, 'index'])->name('solicitantes');
    Route::get('/solicitantes/crear', [solicitanteController::class, 'crear'])->name('solicitantes.crear');
    Route::post('/solicitantes/guardar', [solicitanteController::class, 'guardar'])->name('solicitantes.guardar');
    Route::get('/solicitantes/{id}/editar', [solicitanteController::class, 'editar'])->name('solicitantes.editar');
    Route::post('/solicitantes/{id}/actualizar', [solicitanteController::class, 'actualizar'])->name('solicitantes.actualizar');
    Route::delete('/solicitantes/{id}/deshabilitar/', [solicitanteController::class, 'deshabilitar'])->name('solicitantes.deshabilitar');
    Route::get('/solicitantes/{id}/habilitar/', [solicitanteController::class, 'habilitar'])->name('solicitantes.habilitar');
});

Route::middleware(['auth'])->group(function()
{
    Route::get('/prestamos', [PrestamosController::class, 'index'])->name('Prestamos');
    Route::get('/prestamos/crear', [PrestamosController::class, 'crear'])->name('Prestamos.crear');
    Route::post('/prestamos/guardar', [PrestamosController::class, 'guardar'])->name('Prestamos.guardar');
    Route::get('/prestamos/{id}/crear', [PrestamosController::class, 'mostrar'])->name('Prestamos.mostrar');
    Route::post('/asignar/bien', [PrestamosController::class, 'asignar'])->name('Prestamos.asignar');
    Route::get('/prestamos/{id}/editar', [PrestamosController::class, 'editar'])->name('Prestamos.editar');
    Route::get('/prestamos/{id}/descartar', [PrestamosController::class, 'descartar'])->name('Prestamos.descartar');
    Route::post('/prestamos/{id}/actualizar', [PrestamosController::class, 'actualizar'])->name('Prestamos.actualizar');
    Route::post('/prestamos/{id}/confirmar', [PrestamosController::class, 'confirmar'])->name('Prestamos.confirmar');
    Route::delete('/prestamos/{id}/deshabilitar/', [PrestamosController::class, 'deshabilitar'])->name('Prestamos.deshabilitar');
    Route::get('/prestamos/{id}/habilitar/', [PrestamosController::class, 'habilitar'])->name('Prestamos.habilitar');
    Route::post('buscarcedula/', [PrestamosController::class, 'buscarcedula'])->name('buscarcedula');
    Route::get('/deshabilitar/{id}/bien', [PrestamosController::class, 'desabilitarBien'])->name('desabilitarBien');

});


Route::middleware(['auth'])->group(function()
{
    Route::get('/autoridadrs', [autoridadrsController::class, 'index'])->name('autoridadrs');
    Route::get('/autoridadrs/crear', [autoridadrsController::class, 'crear'])->name('autoridadrs.crear');
    Route::post('/autoridadrs/guardar', [autoridadrsController::class, 'guardar'])->name('autoridadrs.guardar');
    Route::get('/autoridadrs/{id}/editar', [autoridadrsController::class, 'editar'])->name('autoridadrs.editar');
    Route::post('/autoridadrs/{id}/actualizar', [autoridadrsController::class, 'actualizar'])->name('autoridadrs.actualizar');
    Route::delete('/autoridadrs/{id}/deshabilitar/', [autoridadrsController::class, 'deshabilitar'])->name('autoridadrs.deshabilitar');
    Route::get('/autoridadrs/{id}/habilitar/', [autoridadrsController::class, 'habilitar'])->name('autoridadrs.habilitar');
});


Route::middleware(['auth'])->group(function()
{
    Route::get('/responsables', [responsablesController::class, 'index'])->name('responsables');
    Route::get('/responsables/crear', [responsablesController::class, 'crear'])->name('responsables.crear');
    Route::post('/responsables/guardar', [responsablesController::class, 'guardar'])->name('responsables.guardar');
    Route::get('/responsables/{id}/editar', [responsablesController::class, 'editar'])->name('responsables.editar');
    Route::post('/responsables/{id}/actualizar', [responsablesController::class, 'actualizar'])->name('responsables.actualizar');
    Route::delete('/responsables/{id}/deshabilitar/', [responsablesController::class, 'deshabilitar'])->name('responsables.deshabilitar');
    Route::post('buscarcedula/', [responsablesController::class, 'buscarcedula'])->name('buscarcedula');
    Route::get('/responsables/{id}/habilitar/', [responsablesController::class, 'habilitar'])->name('responsables.habilitar');
});


Route::middleware(['auth'])->group(function()
{
    Route::get('/sedes', [sedesController::class, 'index'])->name('sedes');
    Route::get('/sedes/crear', [sedesController::class, 'crear'])->name('sedes.crear');
    Route::post('/sedes/guardar', [sedesController::class, 'guardar'])->name('sedes.guardar');
    Route::get('/sedes/{id}/editar', [sedesController::class, 'editar'])->name('sedes.editar');
    Route::post('/sedes/{id}/actualizar', [sedesController::class, 'actualizar'])->name('sedes.actualizar');
    Route::delete('/sedes/{id}/deshabilitar/', [sedesController::class, 'deshabilitar'])->name('sedes.deshabilitar');
    Route::get('/sedes/{id}/habilitar/', [sedesController::class, 'habilitar'])->name('sedes.habilitar');
});


Route::middleware(['auth'])->group(function()
{
    Route::get('/marcas', [marcasController::class, 'index'])->name('marcas');
    Route::get('/marcas/crear', [marcasController::class, 'crear'])->name('marcas.crear');
    Route::post('/marcas/guardar', [marcasController::class, 'guardar'])->name('marcas.guardar');
    Route::get('/marcas/{id}/editar', [marcasController::class, 'editar'])->name('marcas.editar');
    Route::post('/marcas/{id}/actualizar', [marcasController::class, 'actualizar'])->name('marcas.actualizar');
    Route::delete('/marcas/{id}/deshabilitar/', [marcasController::class, 'deshabilitar'])->name('marcas.deshabilitar');
    Route::get('/marcas/{id}/habilitar/', [marcasController::class, 'habilitar'])->name('marcas.habilitar');
});

Route::middleware(['auth'])->group(function()
{
    Route::get('/modelos', [modelosController::class, 'index'])->name('modelos');
    Route::get('/modelos/crear', [modelosController::class, 'crear'])->name('modelos.crear');
    Route::post('/modelos/guardar', [modelosController::class, 'guardar'])->name('modelos.guardar');
    Route::get('/modelos/{id}/editar', [modelosController::class, 'editar'])->name('modelos.editar');
    Route::post('/modelos/{id}/actualizar', [modelosController::class, 'actualizar'])->name('modelos.actualizar');
    Route::delete('/modelos/{id}/deshabilitar/', [modelosController::class, 'deshabilitar'])->name('modelos.deshabilitar');
    Route::get('/modelos/{id}/habilitar/', [modelosController::class, 'habilitar'])->name('modelos.habilitar');
});


Route::middleware(['auth'])->group(function()
{
    Route::get('/proveedores', [proveedoresController::class, 'index'])->name('proveedores');
    Route::get('/proveedores/crear', [proveedoresController::class, 'crear'])->name('proveedores.crear');
    Route::post('/proveedores/guardar', [proveedoresController::class, 'guardar'])->name('proveedores.guardar');
    Route::get('/proveedores/{id}/editar', [proveedoresController::class, 'editar'])->name('proveedores.editar');
    Route::post('/proveedores/{id}/actualizar', [proveedoresController::class, 'actualizar'])->name('proveedores.actualizar');
    Route::delete('/proveedores/{id}/deshabilitar/', [proveedoresController::class, 'deshabilitar'])->name('proveedores.deshabilitar');
    Route::get('/proveedores/{id}/habilitar/', [proveedoresController::class, 'habilitar'])->name('proveedores.habilitar');
});


Route::middleware(['auth'])->group(function()
{
    Route::get('/categorias', [categoriasController::class, 'index'])->name('categorias');
    Route::get('/categorias/crear', [categoriasController::class, 'crear'])->name('categorias.crear');
    Route::post('/categorias/guardar', [categoriasController::class, 'guardar'])->name('categorias.guardar');
    Route::get('/categorias/{id}/editar', [categoriasController::class, 'editar'])->name('categorias.editar');
    Route::post('/categorias/{id}/actualizar', [categoriasController::class, 'actualizar'])->name('categorias.actualizar');
    Route::delete('/categorias/{id}/deshabilitar/', [categoriasController::class, 'deshabilitar'])->name('categorias.deshabilitar');
    Route::get('/categorias/{id}/habilitar/', [categoriasController::class, 'habilitar'])->name('categorias.habilitar');
});


Route::middleware(['auth'])->group(function()
{
    Route::get('/condiciones', [condicionesController::class, 'index'])->name('condiciones');
    Route::get('/condiciones/crear', [condicionesController::class, 'crear'])->name('condiciones.crear');
    Route::post('/condiciones/guardar', [condicionesController::class, 'guardar'])->name('condiciones.guardar');
    Route::get('/condiciones/{id}/editar', [condicionesController::class, 'editar'])->name('condiciones.editar');
    Route::post('/condiciones/{id}/actualizar', [condicionesController::class, 'actualizar'])->name('condiciones.actualizar');
    Route::delete('/condiciones/{id}/deshabilitar/', [condicionesController::class, 'deshabilitar'])->name('condiciones.deshabilitar');
    Route::get('/condiciones/{id}/habilitar/', [condicionesController::class, 'habilitar'])->name('condiciones.habilitar');
});


Route::middleware(['auth'])->group(function()
{
    Route::get('/cargos', [cargosController::class, 'index'])->name('cargos');
    Route::get('/cargos/crear', [cargosController::class, 'crear'])->name('cargos.crear');
    Route::post('/cargos/guardar', [cargosController::class, 'guardar'])->name('cargos.guardar');
    Route::get('/cargos/{id}/editar', [cargosController::class, 'editar'])->name('cargos.editar');
    Route::post('/cargos/{id}/actualizar', [cargosController::class, 'actualizar'])->name('cargos.actualizar');
    Route::delete('/cargos/{id}/deshabilitar/', [cargosController::class, 'deshabilitar'])->name('cargos.deshabilitar');
    Route::get('/cargos/{id}/habilitar/', [cargosController::class, 'habilitar'])->name('cargos.habilitar');
});


Route::middleware(['auth'])->group(function()
{
    Route::get('/municipios/{id}', [GeoController::class, 'municipio'])->name('municipios');
    Route::get('/parroquias/{id}', [GeoController::class, 'parroquia'])->name('parroquias');
    Route::get('/marca/{id}', [FiltroController::class, 'categoria'])->name('categoria');
    Route::get('/modelo/{id}', [FiltroController::class, 'marca'])->name('marca');
    Route::get('/filtrarbienes/{id}', [BienesController::class, 'filtrarbienes'])->name('filtrarbienes');

});

Route::middleware(['auth'])->group(function()
{
    Route::get('/tecnicos', [TecnicosController::class, 'index'])->name('tecnicos.index');
    Route::get('/tecnicos/create', [TecnicosController::class, 'crear'])->name('tecnicos.create');
    Route::post('/tecnicos/save', [TecnicosController::class, 'guardar'])->name('tecnicos.save');
    Route::get('tecnicos/{id}/edit', [TecnicosController::class, 'editar'])->name('tecnicos.edit');
    Route::post('tecnicos/{id}/update', [TecnicosController::class, 'actualizar'])->name('tecnicos.update');
    Route::delete('/tecnicos/{id}/deshabilitar/', [TecnicosController::class, 'deshabilitar'])->name('tecnicos.deshabilitar');
    Route::get('/tecnicos/{id}/habilitar/', [tecnicosController::class, 'habilitar'])->name('tecnicos.habilitar');
});
Route::middleware(['auth'])->group(function()
{
    Route::get('/reportes', [reportesController::class, 'index'])->name('reportes');
    Route::get('/reportes/prestamos', [reportesController::class, 'prestamos'])->name('reportes.prestamos');
    Route::get('/reportes/bienes', [reportesController::class, 'bienes'])->name('reportes.bienes');
    Route::get('/reportes/{id}/planilla', [reportesController::class, 'planilla'])->name('reportes.planilla');
    Route::get('/reportes/solicitantes', [reportesController::class, 'solicitantes'])->name('reportes.solicitantes');
});

Route::middleware(['auth'])->group(function()
{
    Route::get('/vehiculos', [VehiculosController::class, 'index'])->name('vehiculos');
    Route::get('/vehiculos/crear', [VehiculosController::class, 'crear'])->name('vehiculos.crear');
    Route::post('/vehiculos/guardar', [VehiculosController::class, 'guardar'])->name('vehiculos.guardar');
    Route::get('/vehiculos/{id}/editar', [VehiculosController::class, 'editar'])->name('vehiculos.editar');
    Route::post('/vehiculos/{id}/actualizar', [VehiculosController::class, 'actualizar'])->name('vehiculos.actualizar');
    Route::delete('/vehiculos/{id}/deshabilitar/', [VehiculosController::class, 'deshabilitar'])->name('vehiculos.deshabilitar');
    Route::get('/vehiculos/{id}/habilitar/', [VehiculosController::class, 'habilitar'])->name('vehiculos.habilitar');
});
