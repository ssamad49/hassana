<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
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
});




Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');






    // Route::get('/patient', function(){
    //     return view('patient');
    // })->name('patient');
       Route::resource('patient', PatientController::class);






    Route::get('/doctorGénéral', function(){
        return view('doctorGénéral');
    })->name('doctorGénéral');
    Route::get('/doctorGénéral', [UserController::class, 'index'])->name('doctorGénéral');


    Route::get('/ophtalmologue', function(){
        return view('ophtalmologue');
    })->name('ophtalmologue');
    Route::get('/ophtalmologue', [UserController::class, 'index'])->name('ophtalmologue');


    Route::get('/nephrologue', function(){
        return view('nephrologue');
    })->name('nephrologue');
    Route::get('/nephrologue', [UserController::class, 'index'])->name('nephrologue');


    Route::get('/vasculaire', function(){
        return view('vasculaire');
    })->name('vasculaire');

    Route::get('/utilisateur', function(){
        return view('utilisateur');
    })->name('utilisateur');


    Route::get('/search', [PatientController::class, 'search']);
});


Route::resource('docs', 'DocController');