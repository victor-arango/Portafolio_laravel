<?php

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactFormController;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use Illuminate\Support\Facades\Auth;



Route::view('/inicio', 'home')->name('home');
Route::view('/', 'index')->name('index');
Route::view('/Sobre mi', 'about')->name('about');


// RUTAS DEL PORTAFOLIO 




Route::get('portafolio', [ProjectController::class,'index'])->name('projects.index'); 

Route::get('portafolio/crear', [ProjectController::class, 'create'])->name('projects.create'); 

Route::get('portafolio/{project}/editar', [ProjectController::class, 'edit'])->name('projects.edit'); 

Route::patch('portafolio/{project}', [ProjectController::class, 'update'])->name('projects.update'); 

Route::post('portafolio', [ProjectController::class,'store'])->name('projects.store'); 

Route::get('portafolio/{project}', [ProjectController::class, 'show'])->name('projects.show'); 


Route::delete('/portafolio/{project}', [ProjectController::class,'destroy'])->name('projects.destroy');







Route::view('/contacto', 'contact')->name('contact');

 Route::post('contact', [ContactFormController::class,'store'])->name('contact.store');



Auth::routes(['register' => false ]);

