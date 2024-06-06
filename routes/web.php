<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/Contattaci', function () {
    $contacts = [
        "Contact 1",
        "Contact 2",
        "Contact 3",
        "Contact 4",
        "Contact 5",
        "Contact 6",
        "Contact 7",
        "Contact 8",
        "Contact 9",
        "Contact 10",
    ];

    $data = [
        'contacts' => $contacts
    ];

    return view('contact', $data);
})->name("contact");

Route::get('/About-Us', function () {
    return view('about');
})->name("about");

Route::get('/script-download', function () {
    $scripts = [
        "Script 1",
        "Script 2",
        "Script 3",
        "Script 4",
        "Script 5",
        "Script 6",
        "Script 7",
        "Script 8",
        "Script 9",
        "Script 10",
    ];

    $data = [
        'scripts' => $scripts
    ];

    return view('script', $data);
})->name("script");
