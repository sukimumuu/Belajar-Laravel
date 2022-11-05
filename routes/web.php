<?php

use Illuminate\Support\Facades\Route;

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


// =========== BASIC   ROUTE =========== //

Route::get('/basic', function () {
    return 'BERANDA BASIC';
});
// =========== BASIC   ROUTE =========== //



// =========== VIEW   ROUTE =========== //
Route::get('/', function () {
    return view('beranda');
});

Route::view('/view-route', 'viewroute');
// =========== VIEW   ROUTE =========== //


// =========== Mengirim Argument ke View =========== //
// Route::view('/argument', 'argument', ['nama' => 'Nunu']);

Route::get('/argument', function(){
   return view('argument', ['nama' => 'Zian']);
});
// =========== Mengirim Argument ke View =========== //



// =========== Controller Route =========== //

// Route::get('/user', [UserController::class, 'index']);

// =========== Controller Route =========== //



// =========== Method-Methods Route =========== //
// Route::get -> mendapatkan data saja
// Route::post -> menulis data saja, contoh ketika mengisi form
// Route::Put & Pacth -> meng-update data
// Route::delete -> untuk menghapus
// Route::option ->
// =========== Method-Method Route =========== //

// =========== Redirect Route =========== //

Route::redirect('/pertama', '/kedua');
// memindahkan langsung dari url yang dituju user ke url yang kita inginkan

// =========== Redirect Route =========== //




// =========== Parameter Route =========== //

// Route::get('/parameter/{ke}', function($ke){
//     return 'parameter dengan id '.$ke;
// });

Route::get('/parameter/{ke}', function($ke){
return view('parameter.detail', ['ke'=> $ke]);
});

// =========== Parameter Route =========== //


// =========== Prefix Route =========== //
Route::prefix('grup')->group(function(){

Route::get('/prefix1', function () {
    return 'Prefix 1';
});

Route::get('/prefix2', function () {
    return 'Prefix 2';
});

Route::get('/prefix3', function () {
    return 'Prefix 3';
});

Route::get('/prefix4', function () {
    return 'Prefix 4';
});

Route::get('/prefix5', function () {
    return 'Prefix 5';
});
});
// =========== Prefix Route =========== //



// =========== Cara Menampilkan List Route =========== //

// buka terminal, lalu ketikkan php artisan route:list

// =========== Cara Menampilkan List Route =========== //
