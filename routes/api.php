<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Api\LoginController;
use App\Http\Controllers\Auth\Api\RegisterController;
use App\Http\Controllers\MesureUnitController;
use App\Http\Controllers\SpedCodeController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ProductController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function(){
    Route::post('login', [LoginController::class, 'login']);
    Route::post('logout', [LoginController::class, 'logout']);
    Route::post('register', [RegisterController::class, 'register']);
    Route::get('teste', function() { return "GET API OK!"; });
});

Route::prefix('units')->group(function(){
    Route::get('list', [MesureUnitController::class, 'index']);
    Route::post('new', [MesureUnitController::class, 'store']);
});

Route::prefix('codes')->group(function(){
    Route::get('list', [SpedCodeController::class, 'index']);
    Route::post('new', [SpedCodeController::class, 'store']);
});

Route::prefix('types')->group(function(){
    Route::get('list', [ProductTypeController::class, 'index']);
    Route::post('new', [ProductTypeController::class, 'store']);
});

Route::prefix('products')->group(function(){
    Route::get('list', [ProductController::class, 'index']);
    Route::post('new', [ProductController::class, 'store']);
});