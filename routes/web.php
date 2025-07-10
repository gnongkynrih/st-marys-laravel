<?php

use App\Livewire\Login;
use App\Livewire\Registration;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/login',Login::class)->name('login');

Route::get('/',App\Livewire\HomePage::class);
Route::get('contact-us',App\Livewire\ContactUs::class);
Route::get('about',App\Livewire\AboutUs::class);

//only authenticated user should be able to see this page
Route::middleware('auth')->group(function () {
    Route::get('todo',App\Livewire\TodoManagement::class)->name('add-todo');
});


Route::get('solfa',[App\Http\Controllers\SolfaController::class,'index'])->name('solfa');
Route::get('register',Registration::class)->name('register');

Route::get('/logout', function(Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/')->with('success', 'You have been logged out.');
})->name('logout');