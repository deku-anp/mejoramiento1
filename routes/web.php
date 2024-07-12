<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

//JUGADOR
Route::get('jugador/listar',[PlayerController::class,'listar'])->name('player.listar');
Route::get('jugador/create',[PlayerController::class,'create'])->name('player.create');
Route::post('jugador/store',[PlayerController::class,'store'])->name('player.store');
Route::get('jugador/{player}',[PlayerController::class,'show'])->name('player.show');
Route::put('jugador/{player}',[PlayerController::class,'update'])->name('player.update');
Route::delete('jugador/{player}',[PlayerController::class,'destroy'])->name('player.destroy');
Route::get('jugador/{player}/editar',[PlayerController::class,'edit'])->name('player.edit');


//EQUIPO
Route::get('equipo/listar',[TeamController::class,'listar'])->name('team.listar');
Route::get('equipo/create',[TeamController::class,'create'])->name('team.create');
Route::post('equipo/store',[TeamController::class,'store'])->name('team.store');
Route::get('equipo/{team}',[TeamController::class,'show'])->name('team.show');
Route::put('equipo/{team}',[TeamController::class,'update'])->name('team.update');
Route::delete('equipo/{team}',[TeamController::class,'destroy'])->name('team.destroy');
Route::get('equipo/{team}/editar',[TeamController::class,'edit'])->name('team.edit');