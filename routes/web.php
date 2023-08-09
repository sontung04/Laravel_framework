<?php

use Illuminate\Support\Facades\Route;
Route::prefix('post') -> group( function () {

    Route::get('/index' , function(){ //hiển thị danh sách post trong blog

    });

    Route::get('/create' , function() { //hiển thị form để thêm 1 post
       
    });

    Route::post('/create' , function() { //nhận dữ liệu tạo mới post từ form
        
    });

    Route::get('/detail/{id}' , function($id) { //hiển thị nội dung chi tiết của 1 post theo id
        
    });

    Route::get('/update/{id}' , function($id) { //hiển thị form cập nhật nội dung theo id

    });

    Route::post('/update/{id}' , function($id){ //nhận dữ liệu cập nhật nội dùng post từ form

    });

    Route::post('/delete/{id}' , function($id){ //Xóa 1 post theo id

    });

});
