<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;



Route::get('/categories', [CategoryController::class, 'getCategories']);
Route::post('/categories', [CategoryController::class, 'createCategory']);
Route::get('/categories/{categoryId}', [CategoryController::class, 'getCategory']);
Route::patch('/categories/{categoryId}', [CategoryController::class, 'updateCategory']);
Route::delete('/categories/{categoryId}', [CategoryController::class, 'deleteCategory']);

// Product APIs
Route::get('/products', [ProductController::class, 'getProducts']);
Route::post('/products', [ProductController::class, 'createProduct']);
Route::get('/products/{productId}', [ProductController::class, 'getProduct']);
Route::patch('/products/{productId}', [ProductController::class, 'updateProduct']);
Route::delete('/products/{productId}', [ProductController::class, 'deleteProduct']);
Route::get('/authors/{id}/articles', function($id){
    return Author::find($id)->articles;
});
Route::get('/articles/{id}/audiences', function($id){
    return Article::find($id)->audiences;
});
Route::get('/authors/{id}/audiences', function($id){
    return Author::find($id)->audiences;
});
Route::get('/audiences/{id}/comments', function($id){
    return Audience::find($id)->comments;
});
Route::get('/comments', function(){
    return Comment::with('commentable')->get();
});
