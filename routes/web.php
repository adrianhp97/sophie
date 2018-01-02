<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Client Pages
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/Contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/OrderTutorial', function () {
    return view('pages.how_to_order');
})->name('orderTutorial');

Route::get('/Catalogue', function () {
    return view('pages.catalogue');
})->name('catalogue');

Route::get('/Store', function () {
    return view('pages.store');
})->name('store');

Route::get('/Barang/{nama_barang}', function () {
    return view('pages.barang');
});

/*
|--------------------------------------------------------------------------
| Admin Pages
|--------------------------------------------------------------------------
*/
Route::get('/Dashboard', function () {
    return view('admin.home');
})->name('dashboard-home');

Route::get('/Dashboard/Login', function () {
    return view('admin.login');
})->name('dashboard-login');

Route::get('/Dashboard/Subscriber', function () {
    return view('admin.subscriber');
})->name('dashboard-subscriber');

Route::get('/Dashboard/Member', function () {
    return view('admin.member');
})->name('dashboard-member');

Route::get('/Dashboard/Barang', function () {
    return view('admin.barang');
})->name('dashboard-barang');