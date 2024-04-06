<?php

use Illuminate\Support\Facades\Route;



Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {


    Route::get('/dashboard',  function () {
        return view('uiadmin.dashboard');
    })->name('dashboard');
    Route::get('/roles', function () {
        return view('uiadmin.roles');
    })->name('roles');
    Route::get('/permissions', function () {
        return view('uiadmin.permissions');
    })->name('permissions');

    Route::get('/user',  function () {
        return view('uiadmin.users');
    })->name('users');
});
