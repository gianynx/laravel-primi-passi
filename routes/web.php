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
    $titleH1 = 'Hello World!';
    $titleH2 = 'Documentation';
    $titleH3 = 'Welcome to Laravel!';
    $prologueTitle = 'Prologue';
    $gettingStartedTitle = 'Getting Started';
    $installationTitle = 'Installation';
    $footerSpan = 'About Laravel first experience';
    return view('home', compact('titleH1', 'titleH2', 'titleH3', 'prologueTitle', 'gettingStartedTitle', 'installationTitle', 'footerSpan'));
});

Route::get('/prologue', function () {
    $title = 'Prologue';
    return view('prologue', compact('title'));
});

Route::get('/start', function () {
    $title = 'Getting Started';
    return view('start', compact('title'));
});

Route::get('/installation', function () {
    $title = 'Installation';
    return view('installation', compact('title'));
});
