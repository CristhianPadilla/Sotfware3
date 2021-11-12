<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
/* Conjunto de rutas a las cuales se accede mediante un prefijo */
Route::prefix('dashboard')->group(function(){
/*Llamamos las rutas del controlador PostController tipo resource route:resource */
Route::resource('post', PostController::class);
});

