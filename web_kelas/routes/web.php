<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\memoriesController;
use App\Models\Member;
use App\Models\Memories;

// Web Publik
Route::get('/', function () {
    $members = Member::all();
    $memories = Memories::latest()->get();

    return view('WebKelas', compact('members', 'memories'));
})->name('home');

// Route Guest (Hanya Akses Jika Belum Login)
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Route Action Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Group Dashboard Admin (Memerlukan Auth Login)
Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        $members = Member::latest()->get();
        $memories = Memories::latest()->get();

        return view('Admin.dashboard', compact('members', 'memories'));
    })->name('Admin.dashboard');

    // Route Action Member
    Route::post('/members', [memberController::class, 'store'])->name('members.store');
    Route::delete('/members/{id}', [memberController::class, 'destroy'])->name('members.destroy');

    // Route Action Memories
    Route::post('/memories', [memoriesController::class, 'store'])->name('memories.store');
    Route::delete('/memories/{id}', [memoriesController::class, 'destroy'])->name('memories.destroy');
});
