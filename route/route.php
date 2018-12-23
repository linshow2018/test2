<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// Route::get('think', function () {
//     return 'hello,ThinkPHP5!';
// });

// Route::get('hello/:name', 'index/hello');

// Route::get('hello', 'index/hello');

// Route::get('hello', function () {
//     return 'hello closures';
// });

// Route::get('hello', 'index/index/hello');

// Route::get('hello/:name', function ($name) { 
//     return 'Hello,' . $name; 
// });

// Route::get('hello',function(){
//     return view('index@index/hello');
// });

Route::get('', 'welcome/index/home'); 
Route::get('/help', 'welcome/index/help'); 
Route::get('/about', 'welcome/index/about');



