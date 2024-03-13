<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Livewire\{Escola, Estagiario, User};

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('users-acrtivity', User\ActivityIndex::class)->name('users.activity.index');

    Route::get('user', User\Index::class)->name('user.index');
    Route::get('escola', Escola\Index::class)->name('escola.index');
    Route::get('estagiario', Estagiario\Index::class)->name('estagiario.index');

    Route::get('pdf-view/{estagiario}', PdfController::class)->name('pdf.view');
});
