<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GroupController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/groups', [GroupController::class, 'index'])->name('group.index');
    Route::get('/groups/create', [GroupController::class, 'create'])->name('group.create');
    Route::post('/groups', [GroupController::class, 'store'])->name('group.store');
    Route::post('/groups/{group}/addMember', [GroupController::class, 'addMember'])->name('group.addMember');
    Route::get('/groups/{group}', [GroupController::class, 'show'])->name('group.show');
});

require __DIR__.'/auth.php';
