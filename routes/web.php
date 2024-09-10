<?php

use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\DocBlock\Tags\Example;
use App\Http\Controllers\ExampleController;

Route::get('/', function () {
    return view('welcome');
}
);

Route::get('index',[ExampleController::class,'index']);
Route::get('con',[ExampleController::class,'con']);
Route::get('users',[ExampleController::class,'users']);
Route::get('add',[ExampleController::class,'cong']);
Route::get('et',[ExampleController::class,'et']);
Route::get('ates',[ExampleController::class,'ates']);
Route::get('ato',[ExampleController::class,'ato']);
Route::get('au',[ExampleController::class,'au']);
Route::get('topl',[ExampleController::class,'top_li']);


