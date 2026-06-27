<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (): string {

    return view('welcome');
});
