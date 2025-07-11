<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\StudentDataController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/', [StudentController::class, 'index'])->name('index');


// Route::get('students/show', [StudentDataController::class, 'showStudents'])->name('showStudents');

Route::resource('/photo', PhotoController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::prefix('students')->name('students.')->controller(StudentController::class)->group(function () {
    Route::get('/show', 'index')->name('showStudents');
    Route::get('/view', 'student_addView')->name('view');
    Route::get('/edit/{id}', 'student_edit_form')->name('edit.form');
    Route::put('/edit', 'student_edit')->name('edit');
    Route::post('/add', 'student_add')->name('add');
    Route::delete('/delete/{id}', 'student_delete')->name('delete');
});

Route::resource('/users', UserController::class);

// Route::middleware('/auth')

require __DIR__.'/auth.php';
