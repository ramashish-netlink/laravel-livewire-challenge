<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use Livewire\Volt\Volt;

Volt::route('/tasks', 'tasks');
