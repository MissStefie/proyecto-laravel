<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Admin\PermisoController;

Route::get('/', [InicioController::class, 'index']);
Route::get('admin/permiso', [PermisoController::class, 'index'])->name('permiso');
Route::get('admin/permiso/crear', [PermisoController::class, 'crear'])->name('crear_permiso');
