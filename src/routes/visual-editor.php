<?php

use Illuminate\Support\Facades\Route;
use Rchitector\VisualEditor\App\Http\Controllers\AdminController;
use Rchitector\VisualEditor\App\Http\Controllers\HomeController;

Route::prefix('visual-editor')->middleware('visual-editor')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('visual-editor');

    Route::prefix('admin')->middleware('visual-editor-admin')->group(function(){
        Route::get('/', [AdminController::class, 'index'])->name('visual-editor.admin');
    });
});