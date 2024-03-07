<?php

use App\Http\Controllers\Admin\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Admin\PermisoController;
use App\Http\Controllers\Admin\RolController;

Route::get('/', [InicioController::class, 'index']);
Route::get('admin/permiso', [PermisoController::class, 'index'])->name('permiso');
Route::get('admin/permiso/crear', [PermisoController::class, 'crear'])->name('crear_permiso');
Route::get('admin/menu', [MenuController::class, 'index'])->name('menu');
Route::get('admin/menu/crear', [MenuController::class, 'crear'])->name('crear_menu');
Route::post('admin/menu', [MenuController::class, 'guardar'])->name('guardar_menu');
Route::post('admin/menu/guardar-orden', [MenuController::class, 'guardarOrden'])->name('guardar_orden');
Route::get('admin/rol', [RolController::class, 'index'])->name('rol');
Route::get('admin/rol/crear', [RolController::class, 'crear'])->name('crear_rol');
Route::post('admin/rol', [RolController::class, 'guardar'])->name('guardar_rol');
Route::get('admin/rol/{id}/editar', [RolController::class, 'editar'])->name('editar_rol');
Route::put('admin/rol/{id}', [RolController::class, 'actualizar'])->name('actualizar_rol');
Route::delete('admin/rol/{id}', [RolController::class, 'eliminar'])->name('eliminar_rol');
