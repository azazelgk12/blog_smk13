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



// Route::post('/login', 'LoginController@postlogin');
// Route::view('/login', 'login');
// Route::view('/logout', 'LoginController@logout');
Route::get('/',function(){
    return view('login');
});     
Route::get('/cek_login','LoginController@cek_login')->name('konten');
Route::post('/cek_login','LoginController@cek_login');
// Route::get('/konten','LoginController@logout');
// Route::get('/index','KontenController@index');
Route::get('/konten','KontenController@index');

// Route::get('/' , function(){

    // if(Auth::guest())
    // {
        // return redirect::to('login');
    // }
    // if(Auth::check())
     // {
       // return redirect::to('welcome');
     // }


// });


// Auth::routes();
Route::get('/logout' , 'LoginController@logout')->name('logout');
// Route::get('/welcome' , 'Auth\HomeController@index')->name('home');
// Route::post('/logout', 'LoginController@logout');
// Route::get('/logout', 'LoginController@logout');
// Route::get('/logout','LoginController@logout')->name('login');


// Route::get('/konten',function(){
    // return view('konten');
// });

Route::get('/edit_mobilunit',function(){
    return view('edit_mobilunit');
});



Route::resource('/jadwal_mobilunit', 'JadwalUnitController');


// 


//Route::resource('/jadwal','JadwalUnitController');
// Route::resource('/konten','KontenController'); 

//Route::resource('/konten','KontenController');
// Route::get('/konten',function(){
//     return view('konten');
// });

Route::get('/inbox', function () {
    return view('inbox');
});


Route::get('/visimisi', function () {
    return view('visimisi');
});


Route::get('/general', function () {
    return view('general');
});

Route::get('/organisasi', function () { 
    return view('organisasi');
});

Route::get('/kegiatan', function () {
    return view('kegiatan');
});

Route::get('/galeri', function () {
    return view('galeri');
});
 
Route::get('/unitdonordarah', function () {
    return view('unitdonordarah');
});

Route::get('/donasi', function () {
    return view('donasi');
});

Route::get('/kontak', function () {
    return view('kontak');
});


Route::get('/berita', function () {
    return view('berita');
});


Route::resource('/stokdarah','StokDarahController');



// Route::resource('/edit_stokdarah','StokDarahController');

// Route::post('/edit_stokdarah','StokDarahController@edit');
// Route::post('/edit_stokdarah','StokDarahController@update');
// Route::get('/edit_stokdarah','StokDarahController@index');
// Route::get('/edit_stokdarah', function () {
//     return view('edit_stokdarah');
// });


Route::get('/user', function () {
    return view('user');
});

Route::get('/ketentuandonor', function () {
    return view('ketentuandonor');
});
Route::get('/syaratdonor', function () {
    return view('syaratdonor');
});
Route::get('/manfaatdonor', function () {
    return view('manfaatdonor');
});

Route::get('/edit_tentang', function(){
    return view('edit_tentang');
});

Route::get('/edit_organisasi', function(){
    return view('edit_organisasi');
});

Route::get('/edit_visimisi', function(){
    return view('edit_visimisi');
});

Route::get('/edit_ketentuandonor', function(){
    return view('edit_ketentuandonor');
});

Route::get('/edit_syaratdonor', function(){
    return view('edit_syaratdonor');
});

Route::get('/edit_manfaatdonor', function(){
    return view('edit_manfaatdonor');
});

Route::get('/edit_berita', function(){
    return view('edit_berita');
});

Route::get('/edit_kotak', function(){
    return view('edit_kotak');
});
// Route::get('/index', 'KontenController@index');
// Route::get('/create','KontenController@create');
