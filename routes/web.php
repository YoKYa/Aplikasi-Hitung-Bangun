<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::middleware(['auth'])->group(function () {
    Volt::route('dashboard', 'dashboard')->name('dashboard');
    
    Volt::route('/hitung/luas-bangun-datar', 'hitung.volume-bangun-datar')->name('luas-bangun-datar');
    Volt::route('/hitung/volume-bangun-ruang', 'hitung.volume-bangun-ruang')->name('volume-bangun-ruang');
    Volt::route('/data', 'data')->name('data');


    // Bangun Datar
    Volt::route('/hitung/segitiga', 'hitung.segitiga')->name('segitiga');
    Volt::route('/hitung/persegi', 'hitung.persegi')->name('persegi');
    Volt::route('/hitung/lingkaran', 'hitung.lingkaran')->name('lingkaran');

    Volt::route('/hitung/kubus', 'hitung.kubus')->name('kubus');
    Volt::route('/hitung/limas', 'hitung.limas')->name('limas');
    Volt::route('/hitung/tabung', 'hitung.tabung')->name('tabung');
    // Bangun Ruang
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
