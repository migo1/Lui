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
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');
Route::get('/clients', 'ClientController@index')->name('clients')->middleware('auth');
Route::post('/client_store', 'ClientController@store')->name('client.store');
Route::patch('/client_update', 'ClientController@update')->name('client.update');
Route::get('/client/{id}', 'ClientController@show')->name('client.show')->middleware('auth');
Route::delete('/client_destroy', 'ClientController@destroy')->name('client.destroy');
Route::get('/client/{client_id}/assesment', 'ClientAssessment@index')->name('assessment.index')->middleware('auth');
Route::get('assessment_settings', 'AssesmentSettingsController@index')->name('settings.index');
Route::get('assessment_settings/{id}', 'AssesmentSettingsController@show')->name('settings.show');

// Route::view('choices','livewire.home');