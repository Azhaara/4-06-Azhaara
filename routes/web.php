<?php

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('index', [
    "title" => "Beranda" ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
    "nama" => "Azhaara",
    "email" => "azhaaraara@gmail.com
    ",
    "gambar" => "ciss.jpg"
]);
});
Route::get('/delete_contact/{id}', ContactController::class . '@destroy');

Route::get('/edit/{id}', ContactController::class . '@edit');

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
}); 

Route:


//Route::get('/contacts', function () {
    //return view('contacts', [
      //  "title" => "Contacts"
    //]);


//}); 

Route::resource('/contacts', ContactController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home');

});