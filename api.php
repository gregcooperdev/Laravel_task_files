<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Users;
use App\Http\Controllers\UserController;

  Route::get('users', [UserController::class, 'index']);
  Route::post('users', [UserController::class, 'store']);
  Route::put('users/{id}', [UserController::class, 'update']);
  Route::delete('users/{id}', [UserController::class, 'delete']);
