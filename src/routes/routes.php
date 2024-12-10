<?php


use Cryptonix\Roles\Controllers\SecurityController;
use Illuminate\Support\Facades\Route;

Route::get('setip', [SecurityController::class, "refeshDb"]);
Route::get('ips', [SecurityController::class, "ipCheck"]);
