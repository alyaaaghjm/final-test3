<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');

});
Route :: get('testo' , function(){
    $name = 'ola';
    return view('testo' ,compact('name'));
});

