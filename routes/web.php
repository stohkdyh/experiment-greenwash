<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PreTestController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('start');;
});
Route::get('/end', function () {
    return view('end');;
});
Route::get('/news-gwash', function () {
    session(['kode_berita' => 'C']);
    if (session()->has('pre_test_id')) {
        \App\Models\PreTest::where('id', session('pre_test_id'))->update(['kode_berita' => 'C']);
    }
    return view('news-gwash');
});
Route::get('/news-partial', function () {
    session(['kode_berita' => 'B']);
    if (session()->has('pre_test_id')) {
        \App\Models\PreTest::where('id', session('pre_test_id'))->update(['kode_berita' => 'B']);
    }
    return view('news-partial');
});
Route::get('/news-vocal', function () {
    session(['kode_berita' => 'A']);
    if (session()->has('pre_test_id')) {
        \App\Models\PreTest::where('id', session('pre_test_id'))->update(['kode_berita' => 'A']);
    }
    return view('news-vocal');
});
Route::get('/pre-test', function () {
    return view('pre-test');;
});
Route::get('/post-test', function () {
    return view('post-test');;
});
Route::get('/select', function () {
    return view('select');;
});


Route::resource('/userInfo', \App\Http\Controllers\UserController::class);
Route::resource('/preTest', \App\Http\Controllers\PreTestController::class);
Route::resource('/postTest', \App\Http\Controllers\PostTestController::class);
Route::post('/user', [UserController::class, 'store'])->name('user.store');
// Route::get('/index/{user_id}', [IndexController::class, 'show'])->name('index.show');
// Route::get('/pre-test/{user_id}', [PreTestController::class, 'create'])->name('preTest.create');
// Route::post('/pre-test/{user_id}', [PreTestController::class, 'store'])->name('preTest.store');
// Route::get('/pretest-success', function () {
//     return view('pretest.success');
// })->name('pretest.success');

require __DIR__.'/auth.php';
