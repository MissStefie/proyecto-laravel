<?php

use App\Http\Controllers\Admin\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Admin\PermisoController;

Route::get('/', [InicioController::class, 'index']);
//
Route::get('admin/permiso', [PermisoController::class, 'index'])->name('permiso');
Route::get('admin/permiso/crear', [PermisoController::class, 'crear'])->name('crear_permiso');
//
Route::get('admin/menu', [MenuController::class, 'index'])->name('menu');
Route::get('admin/menu/crear', [MenuController::class, 'crear'])->name('crear_menu');
Route::post('admin/menu', [MenuController::class, 'guardar'])->name('guardar_menu');
Route::post('admin/menu/guardar-orden', 'MenuController@guardarOrden')->name('guardar_orden');
