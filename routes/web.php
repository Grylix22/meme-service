<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemeController;

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

// Route::get('/', function () {
//     return view('memeList');
// });

Route::get('/', [App\Http\Controllers\MemeController::class, 'index'])->name('meme.list');


Route::get('/memeUpload', function () {
    return view('memeUpload');
});



Route::post('/upload-meme', [App\Http\Controllers\MemeController::class, 'upload'])->name('upload.meme');