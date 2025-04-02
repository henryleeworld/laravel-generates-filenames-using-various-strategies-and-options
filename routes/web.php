<?php

use App\Http\Controllers\FilenameController;
use Illuminate\Support\Facades\Route;

Route::get('filename/', [FilenameController::class, 'index']);
