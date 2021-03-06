<?php

use App\Http\Controllers\TodoController;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::get('todos',[TodoController::class,'index']);
Route::post('store-todo',[TodoController::class,'store']);
Route::delete('delete-todo/{id}',[TodoController::class,'destroy']);
Route::post('mark-as-done/{id}',[TodoController::class,'markAsDone']);
Route::post('mark-as-undone/{id}',[TodoController::class,'markAsUndone']);
Route::post('edit-todo',[TodoController::class,'update']);
