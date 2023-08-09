<?php

use Illuminate\Support\Facades\Route;

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


// 自分の名前で (/emilien) Controllerを介して　事項紹介的なview (HTML page) .blade.php を返す



Route::get('/test', [App\Http\Controllers\TestController::class, 'index']);