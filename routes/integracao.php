<?php

use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;

Route::controller(ProductController::class)->group(function() {
    Route::get('produtos/variacoes', 'index');
});