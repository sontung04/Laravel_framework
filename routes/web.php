<?php

use Illuminate\Support\Facades\Route;
Route::get('/' , function() {
    return view('/post/home');
})->name('home');
Route::prefix('post') -> group( function () {

    Route::get('/index' , [\App\Http\Controllers\PostController::class , 'index']) //hiển thị danh sách post trong blog
    ->name('index');

    Route::get('/create' , [\App\Http\Controllers\PostController::class , 'create']) //hiển thị form để thêm 1 post
    ->name('create');

    Route::post('/store' , [\App\Http\Controllers\PostController::class , 'store'])  //nhận dữ liệu tạo mới post từ form
    ->name('store');
    
    Route::post('/detail',[\App\Http\Controllers\PostController::class , 'detailID']) //nhận post ID từ form ở navigation
    ->name('detailID');

    Route::get('/detail/{id}' , [\App\Http\Controllers\PostController::class , 'detail']) //hiển thị nội dung chi tiết của 1 post theo id
    ->name('detail')->where('id','[0-9+]');
    
    Route::get('/edit' , [\App\Http\Controllers\PostController::class , 'editID']) //hiển thị form điền ID cần cập nhật
    ->name('editID');

    Route::post('/update' , [\App\Http\Controllers\PostController::class , 'updateID']) //nhận ID của post cần cập nhật từ form
    ->name('updateID');

    Route::get('/edit/{id}' , [\App\Http\Controllers\PostController::class , 'editContent']) //hiển thị form cập nhật nội dung theo id
    ->name('editContent')->where('id','[0-9+]');

    Route::post('/update/{id}' , [\App\Http\Controllers\PostController::class , 'updateContent']) //nhận dữ liệu cập nhật nội dùng post từ form
    ->name('updateContent')->where('id','[0-9+]');

    Route::get('/delete/{id}' ,[\App\Http\Controllers\PostController::class , 'delete']) //Xóa 1 post theo id
    ->name('delete')->where('id','[0-9+]');

});
