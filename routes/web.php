<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'showIndex']);
Route::get('/index', [PageController::class, 'showIndex']);
Route::get('/about', [PageController::class, 'showAbout']);
Route::get('/blog',[PageController::class, 'showBlog']);
Route::get('/class',[PageController::class, 'showClass']);
Route::get('/contact',[PageController::class, 'showContact']);
Route::get('/gallery',[PageController::class, 'showGallery']);
Route::get('/single',[PageController::class, 'showSingle']);
Route::get('/team',[PageController::class, 'showTeam']);
Route::get('/studentList',[PageController::class, 'showList']);
Route::get('/messageList',[PageController::class, 'msgList']);
Route::post('insert', [PageController::class, 'submitForm']);
Route::post('add',[PageController::class, 'sendForm']);