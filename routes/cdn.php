<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cdn\PixelController;

Route::get('public/pixel/{mailId}.png', [PixelController::class, 'show']);
