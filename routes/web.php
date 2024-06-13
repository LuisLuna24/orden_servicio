<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//================================================================Ordenes================================================
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/ordenes', function () {
        return view('ordenes.index');
    })->name('ordenes.index');
    Route::get('/ordenes/create', function () {
        return view('ordenes.create');
    })->name('ordenes.create');
    Route::get('/ordenes/{orden_id}/show', function () {
        return view('ordenes.show');
    })->name('ordenes.show');
});


//================================================================Clientes================================================
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/clientes', function () {
        return view('clientes.index');
    })->name('clientes.index');
    Route::get('/clientes/create', function () {
        return view('clientes.create');
    })->name('clientes.create');
    Route::get('/clientes/{orden_id}/show', function () {
        return view('clientes.show');
    })->name('clientes.show');


});


//================================================================Crear Orden Cliente================================================
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/clientes/muestras', function () {
        return view('clientes.dmuestras');
    })->name('clientes.dmuestras');


    Route::get('/clientes/procedencia', function () {
        return view('clientes.dprocedencia');
    })->name('clientes.dprocedencia');


    Route::get('/clientes/cliente', function () {
        return view('clientes.dclientes');
    })->name('clientes.dclientes');


    Route::get('/clientes/orden', function () {
        return view('clientes.dorden');
    })->name('clientes.dorden');

    Route::get('/clientes/ver_orden', function () {
        return view('clientes.verorden');
    })->name('clientes.verorden');
});