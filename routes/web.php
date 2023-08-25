<?php

use App\Http\Controllers\ProyekController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
});
// proyek
Route::resource('/proyek',ProyekController::class);

Route::get('/tambahproyek', function () {
    return view('admin.pages.tambahproyek');
});
Route::get('/editproyek', function () {
    return view('admin.pages.editproyek');
});
// volume
Route::get('/volume', function () {
    return view('admin.pages.volume');
});
Route::get('/tambahvolume', function () {
    return view('admin.pages.tambahvolume');
});
Route::get('/koefisien', function () {
    return view('admin.pages.koefisien');
});
Route::get('/daftaruser', function () {
    return view('admin.pages.daftaruser');
});
Route::get('/rab', function () {
    return view('admin.pages.rab');
});
Route::get('/profile', function () {
    return view('admin.pages.profile');
});

// extra
Route::get('/login', function () {
    return view('admin.extra.login');

});


// landing
Route::get('/landingpage', function () {
    return view('landing.landingpage');

});
