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
    return view('welcome');
})->name('homepage');

// servizi
Route::get('/servizi', function () {
    $services = [
        ['id' => 1,'type' => 'antifurto', 'number' => 011-578-9641],
        ['id' => 2,'type' => 'tagliandi', 'number' => 011-345-7821],
        ['id' => 3,'type' => 'elaborazioni', 'number' => 011-223-4506],
        ['id' => 4,'type' => 'riverniciatura', 'number' => 011-448-7351],
    ];
    return view('servizi', ['services' => $services]);
})-> name('servizi');

Route::get('/servizi/details/{id}', function($id){
    $services = [
        ['id' => 1,'type' => 'antifurto', 'number' => 011-578-9641],
        ['id' => 2,'type' => 'tagliandi', 'number' => 011-345-7821],
        ['id' => 3,'type' => 'elaborazioni', 'number' => 011-223-4506],
        ['id' => 4,'type' => 'riverniciatura', 'number' => 011-448-7351],
    ];

    foreach($services as $service){
        if($id == $service['id']){
            return view('servizi-dettaglio', ['service' => $service]);
        }
    }
})->name('servizi-dettaglio');


// chi siamo
Route::get('/chi-siamo', function () {
    $whoWeAre = [
        ['id' => 1,'name' => 'Shanks', 'nickname' => 'The red'],
        ['id' => 2,'name' => 'Luffy', 'nickname' => 'Mugiwara'],
        ['id' => 3,'name' => 'Zoro', 'nickname' => 'Pirates hunter'],
        ['id' => 4,'name' => 'Law', 'nickname' => 'Doctore of death'],
    ];
    return view('chi_siamo', ['whoWeAre' => $whoWeAre]);
})-> name('chi_siamo');

Route::get('/chi-siamo/details/{id}', function($id){
    $whoWeAre = [
        ['id' => 1,'name' => 'Shanks', 'nickname' => 'The red'],
        ['id' => 2,'name' => 'Luffy', 'nickname' => 'Mugiwara'],
        ['id' => 3,'name' => 'Zoro', 'nickname' => 'Pirates hunter'],
        ['id' => 4,'name' => 'Law', 'nickname' => 'Doctore of death'],
    ];

    foreach($whoWeAre as $whoWeARE){
        if($id == $whoWeARE['id']){
            return view('chi_siamo_dettaglio', ['services' => $whoWeAre]);
        }
    }
})->name('chi_siamo_dettaglio');


