<?php

use App\Livewire\Accordion\AccordionList;
use App\Livewire\Component\Comp;
use App\Livewire\Menu\Menu;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', Menu::class)->name('dashboard');
Route::get('/comp', Comp::class)->name('comp');
Route::get('/accordion', AccordionList::class)->name('accordion');
