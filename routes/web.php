<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/phpinfo', function () {
    return phpinfo();
});

Route::get('/osinfo', function () {
    return response()->json([
        'os' => PHP_OS,
        'php' => PHP_VERSION,
        'laravel' => app()->version(),
        'database' => env('DB_CONNECTION'),
        'cert_exists' => file_exists('/etc/ssl/cert.pem'),
    ]);
});

Route::get('/testdb', function () {
    return response()->json(\App\Models\User::all());
});

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

require __DIR__ . '/auth.php';
