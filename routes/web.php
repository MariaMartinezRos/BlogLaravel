<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::view('/','welcome')->name('home');
Route::view('/contact','contact')->name('contact');

Route::resource('blog', PostController::class)
    ->names('posts')
    ->parameters(['blog' => 'post']);
//Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
//Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
//Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
//Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
//Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
//Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');
//Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::view('/about','about')->name('about');

//->middleware('auth'); POR SI QUISIERAMOS PROTEGER LA RUTA ABOUT


//COMPROBAR QUE ESTA BIEN ESCRITO


Route::get('/dashboard', function () {
    return view('dashboard');   //solo puedo acceder a esta vista si estoy autenticado/logueado
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
