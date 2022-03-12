<?php

use App\Http\Controllers\ShortlyController;
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


/**
 * run the command: php artisan route:list -v --except-vendor to see why I use 'parameters' or just 
 * go to the official documentation 'https://laravel.com/docs/9.x/controllers#restful-naming-resource-route-parameters'
 */
Route::resource('/', ShortlyController::class)->parameters([ '' => 'shortURL' ]);