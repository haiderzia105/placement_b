<?php

use Illuminate\Support\Facades\Route;


   Route::get('/', function () {
   return view('screens.placement');
   });
   Route::get('user/home', function () {
      return view("screens.placement");
  })->name('home');
  
   Route::get('user/collab', function () {
   return view("screens.collab");
   })->name('collab');

   Route::get('user/why', function () {
   return view("screens.why");
   })->name('why');