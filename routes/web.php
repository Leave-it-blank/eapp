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
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::group(
    ['middleware' => ['auth']] , function () {
    Route::get('/schedule/create', [\App\Http\Controllers\OrdersController::class, 'createOrder' ])->name('eWasteForm');
    Route::get('/schedule/{id}/fill', \App\Http\Livewire\Backend\Form\FillDetails::class)->name('eWasteForm_phase_two');
    Route::get('/schedule/{id}/success', \App\Http\Livewire\Backend\Form\Successful::class)->name('eWasteForm_phase_three');
    Route::get('/address/create',  \App\Http\Livewire\Backend\Address\Create::class)->name('address.create');
    Route::get('/address/{id}/edit',  \App\Http\Livewire\Backend\Address\Edit::class)->name('address.edit');
    Route::get('/orders',  \App\Http\Livewire\Backend\History\TrackOrders\Index::class)->name('orders.list');
    });
