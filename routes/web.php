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

Route::get('/', function () {
    return view('welcome_page');
});

Route::get('/inscription', function () {
    return view('inscription');
});

Route::post('/inscription', function () {
    request()->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'confirmed', 'min:8'],
        'password confirmation' => ['required'],
        'nom' => ['required'],
        'prenom' => ['required'],
    ]);

    $utilisateur = App\users::create([
            'email' => request('email',),
            'password' => bcrypt(request('password')),
            'nom' => request ('nom'),
            'prenom' => request ('prenom'),
    ]);

    return 'shit';
});

Route::get ('/utilisateurs', function () {
    $utilisateurs = App\users::all();

    return view ('utilisateurs', [
        'utilisateurs' => $utilisateurs,
    ]);
});


