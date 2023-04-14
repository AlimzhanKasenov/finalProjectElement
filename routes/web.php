<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['prefix' => 'categories'], function (){
    Route::get('/', [\App\Http\Controllers\Category\IndexController::class, 'index']) -> name('category.index');
    Route::get('/create', [\App\Http\Controllers\Category\IndexController::class, 'create']) -> name('category.create');
    Route::post('/', [\App\Http\Controllers\Category\IndexController::class, 'store']) -> name('category.store');
    Route::get('/{category}/edit', [\App\Http\Controllers\Category\IndexController::class, 'edit']) -> name('category.edit');
    Route::get('/{category}', [\App\Http\Controllers\Category\IndexController::class, 'show']) -> name('category.show');
    Route::patch('/{category}', [\App\Http\Controllers\Category\IndexController::class, 'update']) -> name('category.update');
    Route::delete('/{category}', [\App\Http\Controllers\Category\IndexController::class, 'delete']) -> name('category.delete');
});

Route::group(['prefix' => 'colors'], function (){
    Route::get('/', [\App\Http\Controllers\Color\IndexController::class, 'index']) -> name('colors.index');
    Route::get('/create', [\App\Http\Controllers\Color\IndexController::class, 'create']) -> name('color.create');
    Route::post('/', [\App\Http\Controllers\Color\IndexController::class, 'store']) -> name('color.store');
    Route::get('/{color}/edit', [\App\Http\Controllers\Color\IndexController::class, 'edit']) -> name('color.edit');
    Route::get('/{color}', [\App\Http\Controllers\Color\IndexController::class, 'show']) -> name('color.show');
    Route::patch('/{color}', [\App\Http\Controllers\Color\IndexController::class, 'update']) -> name('color.update');
    Route::delete('/{color}', [\App\Http\Controllers\Color\IndexController::class, 'delete']) -> name('color.delete');
});

Route::group(['prefix' => 'tags'], function (){
    Route::get('/', [\App\Http\Controllers\Tag\IndexController::class, 'index']) -> name('tags.index');
    Route::get('/create', [\App\Http\Controllers\Tag\IndexController::class, 'create']) -> name('tag.create');
    Route::post('/', [\App\Http\Controllers\Tag\IndexController::class, 'store']) -> name('tag.store');
    Route::get('/{tag}/edit', [\App\Http\Controllers\Tag\IndexController::class, 'edit']) -> name('tag.edit');
    Route::get('/{tag}', [\App\Http\Controllers\Tag\IndexController::class, 'show']) -> name('tag.show');
    Route::patch('/{tag}', [\App\Http\Controllers\Tag\IndexController::class, 'update']) -> name('tag.update');
    Route::delete('/{tag}', [\App\Http\Controllers\Tag\IndexController::class, 'delete']) -> name('tag.delete');
});

Route::group(['prefix' => 'users'], function (){
    Route::get('/', [\App\Http\Controllers\User\IndexController::class, 'index']) -> name('users.index');
    Route::get('/create', [\App\Http\Controllers\User\IndexController::class, 'create']) -> name('user.create');
    Route::post('/', [\App\Http\Controllers\User\IndexController::class, 'store']) -> name('user.store');
    Route::get('/{user}/edit', [\App\Http\Controllers\User\IndexController::class, 'edit']) -> name('user.edit');
    Route::get('/{user}', [\App\Http\Controllers\User\IndexController::class, 'show']) -> name('user.show');
    Route::patch('/{user}', [\App\Http\Controllers\User\IndexController::class, 'update']) -> name('user.update');
    Route::delete('/{user}', [\App\Http\Controllers\User\IndexController::class, 'delete']) -> name('user.delete');
});

Route::group(['prefix' => 'products'], function (){
    Route::get('/', [\App\Http\Controllers\Product\IndexController::class, 'index']) -> name('products.index');
    //Route::post('/', [\App\Http\Controllers\Product\IndexController::class, 'store']) -> name('product.store');
    Route::get('/create', [\App\Http\Controllers\Product\IndexController::class, 'create']) -> name('product.create');
    Route::post('/', \App\Http\Controllers\Product\IndexController::class) -> name('product.store');
    Route::get('/{product}/edit', [\App\Http\Controllers\Product\IndexController::class, 'edit']) -> name('product.edit');
    Route::get('/{product}', [\App\Http\Controllers\Product\IndexController::class, 'show']) -> name('product.show');
    Route::patch('/{product}', [\App\Http\Controllers\Product\IndexController::class, 'update']) -> name('product.update');
    Route::delete('/{product}', [\App\Http\Controllers\Product\IndexController::class, 'delete']) -> name('product.delete');
});
