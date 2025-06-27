<?php

use Illuminate\Support\Facades\Route;

Route::get('/',App\Livewire\HomePage::class);
Route::get('contact-us',App\Livewire\ContactUs::class);
Route::get('about',App\Livewire\AboutUs::class);