<?php

use Illuminate\Support\Facades\Route;

Route::get('/ping', fn() => response()->json(['message' => 'pong']));

Route::get('/products', fn() => response()->json(['message' => 'Product Index']))
     ->name('product.index');
