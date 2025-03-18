<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FelhasznaloController;
use App\Http\Controllers\CimController;
use App\Http\Controllers\PekaruController;
use App\Http\Controllers\RendelesController;



Route::get('/pekseg',[FelhasznaloController::class,'index']);
Route::post('/pekseg',[FelhasznaloController::class,'store']);
Route::get('/pekseg/{id}', [FelhasznaloController::class, 'getByid']);
Route::get('/pekseg/felhasz/{fid}',[FelhasznaloController::class,'FilterByFelhasznaloid']);
Route::put('/pekseg/{id}', [FelhasznaloController::class, 'update']);
Route::delete('/pekseg/{id}', [FelhasznaloController::class, 'destroy']);

Route::get('/pekseg1', [CimController::class, 'index']);
Route::post('/pekseg1', [CimController::class, 'store']);
Route::get('/pekseg1/{id}', [CimController::class, 'getByid']);
Route::put('/pekseg1/{id}', [CimController::class, 'update']);
Route::delete('/pekseg1/{id}', [CimController::class, 'destroy']);

Route::get('/pekseg2',[PekaruController::class,'index']);
Route::post('/pekseg2',[PekaruController::class,'store']);
Route::get('/pekseg2/search',[PekaruController::class,'search']);
Route::get('/pekseg2/{id}',[PekaruController::class,'getByid']);
Route::get('/pekseg2/higher/{ar}',[PekaruController::class,'getHigherThan']);
Route::get('/pekseg2/lower/{ar}',[PekaruController::class,'getLowerThan']);
Route::put('/pekseg2/{id}',[PekaruController::class,'update']);
Route::delete('/pekseg2/{id}', [PekaruController::class, 'destroy']);
/* Route::get('/pekseg2/tipusok',[PekaruController::class,'types']); */



Route::get('/pekseg3',[RendelesController::class,'index']);
Route::post('/pekseg3',[RendelesController::class,'store']);
Route::get('/pekseg3/{id}',[RendelesController::class,'getByid']);
Route::get('/pekseg3/filter/{fm}',[RendelesController::class,'FilterByFizetesimod']);
Route::get('/pekseg3/felhasz/{fid}',[RendelesController::class,'FilterByFelhasznaloid']);
Route::put('/pekseg3/{id}',[RendelesController::class,'update']);
Route::delete('/pekseg3/{id}', [RendelesController::class, 'destroy']);


