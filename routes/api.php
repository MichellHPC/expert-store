<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/ping', fn() => response()->json(['message' => 'pong']));

/**
 * GET /products
 * GET /products/{id}
 * POST /products
 * PUT/PATCH /products/{id}
 * DELETE /products/{id}
 */

Route::get('/products', fn(Product $product) => $product->all());
Route::get('/products/{product}', fn(Product $product) => $product);