<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;

// website
Route::get('/', function () {
    return view('welcome');
})->name('home');


// expenses
Route::get('/expense', [ExpenseController::class, 'index'])->name('expense.index');
Route::get('/expense/create', [ExpenseController::class, 'create'])->name('expense.create');
Route::post('/expense', [ExpenseController::class, 'store'])->name('expense.store');


// income 




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
