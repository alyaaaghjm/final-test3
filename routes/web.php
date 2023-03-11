<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');

});
Route :: get('about' , function(){
    $name = 'ola';
    return view('about' ,compact('name'));
});

