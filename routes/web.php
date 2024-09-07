<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('home');
});



Route::prefix('admin/')->name('admin.')->group(function() {
    Route::get('dashboard', function() {
        return view('admin.dashboard');
    })->name('dashboard');

    // Edukasi Section
    Route::get('edukasi', function(){
        return view('admin.edukasi.index');
    })->name('edukasi.index');

    Route::get('edukasi/create', function(){
        return view('admin.edukasi.create');
    })->name('edukasi.create');

    Route::get('edukasi/edit', function(){
        return view('admin.edukasi.edit' );
    })->name('edukasi.edit');

    // Kuesioner Section
    Route::get('kuesioner', function(){
        return view('admin.kuesioner.index');
    })->name('kuesioner.index');

    Route::get('kuesioner/create', function(){
        return view('admin.kuesioner.create');
    })->name('kuesioner.create');

    Route::get('kuesioner/edit', function(){
        return view('admin.kuesioner.edit' );
    })->name('kuesioner.edit');

    // Responden Section
    Route::get('responden', function(){
        return view('admin.responden.index');
    })->name('responden.index');

    Route::get('responden/create', function(){
        return view('admin.responden.create');
    })->name('responden.create');

    Route::get('responden/edit', function(){
        return view('admin.responden.edit' );
    })->name('responden.edit');

    // Artikel Section
    Route::get('artikel', function(){
        return view('admin.artikel.index');
    })->name('artikel.index');

    Route::get('artikel/create', function(){
        return view('admin.artikel.create');
    })->name('artikel.create');

    Route::get('artikel/edit', function(){
        return view('admin.artikel.edit' );
    })->name('artikel.edit');

});