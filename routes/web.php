<?php

use App\Http\Controllers\ProfileController;
use App\Models\Author;
use App\Models\Book;
use App\Models\Client;
use App\Models\Plumber;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Relationship routes

//HasMany
Route::get('/hasmany', function () {

    $plumbers = Plumber::with('clients')->get();

    return Inertia::render('HasMany', [
        'plumbers' => $plumbers,
    ]);
})->name('hasmany');

//HasManyThrough
Route::get('/hasmanythrough', function () {

    $plumbers = Plumber::with('referrals', 'clients')->get();

    return Inertia::render('HasManyThrough', [
        'plumbers' => $plumbers,

    ]);
})->name('hasmanythrough');

//ManyToMany
Route::get('/manytomany', function () {

    $books = Book::with('authors')->get();
    $authors = Author::with('books')->get();

    return Inertia::render('ManyToMany', [
        'authors' => $authors,
        'books' => $books
    ]);
})->name('manytomany');


//PolyHasMany
Route::get('/polytomany', function () {
});

require __DIR__ . '/auth.php';
