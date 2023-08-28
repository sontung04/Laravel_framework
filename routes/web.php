<?php

use Illuminate\Support\Facades\Route;
Route::get('/' , function() {
    return view('/home');
})->name('home');
Route::prefix('post') -> group( function () {

    Route::get('/index' , 'PostController@index') //hiển thị danh sách post trong blog
    ->name('index');

    Route::get('/create' , function() { //hiển thị form để thêm 1 post
        return view('create');
    })->name('create');

    Route::post('/store' , 'PostController@store'  //nhận dữ liệu tạo mới post từ form
    )->name('store');
    
    Route::get('/detail/{id}' , function($id) { //hiển thị nội dung chi tiết của 1 post theo id
        return view( 'detail' , ['id' => $id] );
    })->name('detail')->where('id','[0-9+]');
    
    Route::get('/edit' , function(){ //hiển thị form điền ID cần cập nhật
        return view('editID');
    })->name('editID');

    Route::post('/update' , function(){ //nhận ID của post cần cập nhật từ form
        
    })->name('updateID');

    Route::get('/edit/{id}' , function($id) { //hiển thị form cập nhật nội dung theo id
        return view( 'editContent' , ['id' => $id] );
    })->name('editContent')->where('id','[0-9+]');

    Route::post('/update/{id}' , function($id){ //nhận dữ liệu cập nhật nội dùng post từ form

    })->name('updateContent')->where('id','[0-9+]');

    Route::post('/delete/{id}' ,'PostController@delete' //Xóa 1 post theo id

    )->name('delete')->where('id','[0-9+]');

});
