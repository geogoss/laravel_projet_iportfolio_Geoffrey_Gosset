<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Models\About;
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
    $abouts = About::all();
    return view('welcome', compact('abouts'));
});

Route::get('/admin', function () {
    return view('welcomeAdmin');
});

Route::get('/about', [AboutController::class, 'about']);
Route::get('/about/{id}', [AboutController::class, 'edit']);
Route::put('/update/{id}', [AboutController::class, 'update']);

Route::get('/skill/{id}', [SkillController::class, 'edit']);
Route::put('/skill/update/{id}', [SkillController::class, 'update']);