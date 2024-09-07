<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\{
    DashboardAdm,
    NoticiaShow
};

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::match(['get', 'post'], '/dashboard-adm', DashboardAdm::class)
    ->name('dashboard-adm');
});

Route::match(['get', 'post'], '/noticia/{slug}', NoticiaShow::class)->name('noticia.show');
