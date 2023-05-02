<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::get('logout', LogoutController::class)
        ->name('logout');
});

Route::get('/', [CategoryController::class, 'showAll'])->name('home');

Route::get('/category/{slug}', [BookController::class, 'showBooks'])->name('books');

Route::get('/books/{slug}', [BookController::class, 'showBook'])->name('book');

Route::get('admin', [AdminController::class, 'admin'])->middleware('auth')->name('admin');

Route::get('admin/users', [AdminController::class, 'showUsers'])->middleware('auth')->name('admin.users');
Route::get('admin/categories', [AdminController::class, 'showCategories'])->middleware('auth')->name('admin.categories');
Route::get('admin/books', [AdminController::class, 'showBooks'])->middleware('auth')->name('admin.books');

Route::match(['get', 'post'], 'admin/users/change-role/{id}', [AdminController::class, 'changeRole'])->middleware('auth')->name('change.role');
Route::match(['get', 'post'], 'admin/users/delete/{id}', [AdminController::class, 'deleteUser'])->middleware('auth')->name('delete.user');

Route::match(['get', 'post'], 'create/new/category', [CategoryController::class, 'createForm'])->middleware('auth')->name('new.category');
Route::match(['get', 'post'], 'edit/category/{id}', [CategoryController::class, 'editCategory'])->middleware('auth')->name('edit.category');
Route::match(['get', 'post'], 'delete/category/{id}', [CategoryController::class, 'deleteCategory'])->middleware('auth')->name('delete.category');

Route::match(['get', 'post'], 'create/new/book', [BookController::class, 'createForm'])->middleware('auth')->name('new.book');
Route::match(['get', 'post'], 'edit/book/{id}', [BookController::class, 'editBook'])->middleware('auth')->name('edit.book');
Route::match(['get', 'post'], 'delete/delete/{id}', [BookController::class, 'deleteBook'])->middleware('auth')->name('delete.book');

Route::get('employee', [EmployeeController::class, 'employee'])->middleware('auth')->name('employee');
Route::get('employee/categories', [EmployeeController::class, 'showCategories'])->middleware('auth')->name('employee.categories');
Route::get('employee/books', [EmployeeController::class, 'showBooks'])->middleware('auth')->name('employee.books');

Route::match(['get', 'post'], '/comment/add/{id}', [CommentController::class, 'create'])->name('add.comment');






