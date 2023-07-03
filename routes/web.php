<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeGeneratorController;


Route::get('/qr-code', [QrCodeGeneratorController::class, 'index']);
