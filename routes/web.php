<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TextController;
use App\Models\About;
use App\Models\Hero;
use App\Models\Skill;
use App\Models\Text;
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
    $skills = Skill::all();
    $heroes = Hero::first();
    $texts = Text::all();
    return view('welcome', compact('abouts', 'skills', 'heroes', 'texts'));
});

Route::get('/admin', function () {
    return view('welcomeAdmin');
});

Route::get('/about', [AboutController::class, 'about']);
Route::get('/about/{id}', [AboutController::class, 'edit']);
Route::put('/update/{id}', [AboutController::class, 'update']);


Route::get('/skill/create', [SkillController::class, 'create']);
Route::post('/skill/store', [SkillController::class, 'store']);
Route::get('/skill/{id}', [SkillController::class, 'edit']);
Route::put('/skill/update/{id}', [SkillController::class, 'update']);
Route::delete('/skill/delete/{id}', [SkillController::class, 'destroy']);

Route::get('hero/{id}', [HeroController::class, 'edit']);
Route::put('/hero/update/{id}', [HeroController::class, 'update']);

Route::get('/text/create', [TextController::class, 'create']);
Route::post('/text/store', [TextController::class, 'store']);
Route::get('/text/{id}', [TextController::class, 'edit']);
Route::put('/text/update/{id}', [TextController::class, 'update']);
Route::delete('/text/delete/{id}', [TextController::class, 'destroy']);

