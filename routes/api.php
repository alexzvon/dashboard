<?php

use Illuminate\Support\Facades\Route;


Route::prefix('api')
	->group(function () {
        Route::get('/meta', fn () => dd('meta'))->name('new_meta');
        Route::get('/new', function(){
            dd('newnewnew');
        })->name('new');
});
