<?php

use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Contact;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('/');
Route::get('/about', About::class)->name('/about');
Route::get('/contact', Contact::class)->name('/contact');
