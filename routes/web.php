<?php

use App\Models\Option;
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

Route::get('/', function () {
    $pros = [
        'GitHub Actions based AWS ECS Deployment',
        'Laravel 9',
        'Customized User Registration',
        'Messy first-time alpine.js experiment',
        'Tailwind 3'
    ];
    $cons = [
        'Admin CRUD for building questions and answers',
        'Save quizes to track answers',
        'Realtime notification, or step through scoring',
        'Middleware for user submissions',
        'Timed tests'
    ];
    return view('welcome', compact('pros', 'cons'));
});

Route::post('/results', function () {
    $result = Option::whereIn('id', collect(request('answers'))->values())->sum('correct');
    return view('test.result', compact('result'));
})->middleware(['auth'])->name('test.result');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
