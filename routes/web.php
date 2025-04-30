<?php

use App\Http\Controllers\VrController;
use Illuminate\Support\Facades\Route;

Route::get('/', [VrController::class, 'vr'])->name('vr');

