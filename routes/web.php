<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('upload');
});

Route::post('/api/upload', [UploadController::class, 'uploadFile'])->name('uploadFile');
