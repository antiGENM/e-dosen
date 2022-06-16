<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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
    return view('home');
});

Route::get('login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('register', [RegisterController::class, 'create']);
route::post('/register/store', [RegisterController::class, 'store']);

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/search', function () {
    return view('searchdosen');
});


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-detail', function () {
    return view('blog-detail');
});

Route::get('dashboard admin', function (){
    return view('dashboard/admin');
});

Route::get('dashboard dosen', function (){
    return view('dashboard/dosen');
});

Route::get('listdosen', function (){
    return view('dashboard/listdosen');
});

Route::get('portodosen', function (){
    return view('dashboard/portodosen');
});

Route::get('listposts', function (){
    return view('dashboard/listposts');
});

Route::get('formpost', function (){
    return view('dashboard/formpost');
});

Route::get('mydata', function (){
    return view('dashboard/mydata');
});

Route::get('formprofil', function (){
    return view('dashboard/formprofil');
});

Route::get('formporto', function (){
    return view('dashboard/formporto');
});

Route::get('membership', function (){
    return view('dashboard/membership');
});

Route::get('formmember', function (){
    return view('dashboard/formmember');
});

Route::get('portofolio', function (){
    return view('resume/index');
});

Route::get('daftarblog', function (){
    return view('/daftarblog');
});




