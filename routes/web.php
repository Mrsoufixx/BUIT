<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\IssuesList;
use App\Http\Livewire\OldIssuesList;
use App\Http\Livewire\DelayIssuesList;
use App\Http\Livewire\ItemsList;
use App\Http\Livewire\LivewireCharts;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified']);
    // ->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Google Login

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('/auth/google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

//Datatable

Route::get('oldIssuesList', OldIssuesList::class)->name('oldIssuesList');
Route::get('delayIssuesList', DelayIssuesList::class)->name('delayIssuesList');
Route::get('issuesList',IssuesList::class)->name('issuesList');
Route::get('itemsList',itemsList::class)->name('itemsList');
Route::get('dashboard',Dashboard::class)->name('dashboard');

//charts
Route::get('livewire-charts',LivewireCharts::class);

//test
// Route::get('list', [BookController::Class,'list']);

