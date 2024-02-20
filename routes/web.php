<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ExpenseCategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeCategoryController;
use App\Http\Controllers\IncomeController;
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
Route::get('/expense/{expenses}/edit', [ExpenseController::class, 'edit'])->name('expense.edit');
Route::put('/expense/{expenses}', [ExpenseController::class, 'update'])->name('expense.update');
Route::delete('/expense/{expenses}', [ExpenseController::class, 'destroy'])->name('expense.destroy');


// income 
Route::get('/income', [IncomeController::class, 'index'])->name('income.index');
Route::get('/income/create', [IncomeController::class, 'create'])->name('income.create');
Route::post('/income', [IncomeController::class, 'store'])->name('income.store');
Route::get('/income/{incomes}/edit', [IncomeController::class, 'edit'])->name('income.edit');
Route::put('/income/{incomes}', [IncomeController::class, 'update'])->name('income.update');
Route::delete('income/{incomes}', [IncomeController::class, 'destroy'])->name('income.destroy');


// expense catgeory
Route::get('/expense-category', [ExpenseCategoryController::class, 'index'])->name('expenseCategory.index');
Route::get('/expense-category/create', [ExpenseCategoryController::class, 'create'])->name('expenseCategory.create');
Route::post('/expense-category', [ExpenseCategoryController::class, 'store'])->name('expenseCategory.store');
Route::get('/expense-category/{expenseCategories}/edit', [ExpenseCategoryController::class, 'edit'])->name('expenseCategory.edit');
Route::put('/expense-category/{expenseCategories}', [ExpenseCategoryController::class, 'update'])->name('expenseCategory.update');
Route::delete('/expense-category/{expenseCategories}', [ExpenseCategoryController::class, 'destroy'])->name('expenseCategory.destroy');


// income category
Route::get('/income-category', [IncomeCategoryController::class, 'index'])->name('incomeCategory.index');
Route::get('/income-category/create', [IncomeCategoryController::class, 'create'])->name('incomeCategory.create');
Route::post('/income-category', [IncomeCategoryController::class, 'store'])->name('incomeCategory.store');
Route::get('/income-category/{incomeCategories}/edit', [IncomeCategoryController::class, 'edit'])->name('incomeCategory.edit');
Route::put('/income-category/{incomeCategories}', [IncomeCategoryController::class, 'update'])->name('incomeCategory.update');
Route::delete('/income-category/{incomeCategories}', [IncomeCategoryController::class, 'destroy'])->name('incomeCategory.destroy');

// accounts
Route::get('/account', [AccountController::class, 'index'])->name('account.index');
Route::get('/account/create', [AccountController::class, 'create'])->name('account.create');
Route::post('/account', [AccountController::class, 'store'])->name('account.store');
Route::get('/account/{account}/edit', [AccountController::class, 'edit'])->name('account.edit');
Route::put('/account/{account}', [AccountController::class, 'update'])->name('account.update');
Route::delete('/account/{account}', [AccountController::class, 'destroy'])->name('account.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
