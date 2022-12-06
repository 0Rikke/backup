<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/*
        categorias
*/

Route::get('categories/{id}', [ApiController::class, 'getCategories']);
Route::post('categories/create', [ApiController::class, 'createCategories']);
Route::put('categories/update/{id}', [ApiController::class, 'updateCategories']);
Route::delete('categories/delete/{id}',[ApiController::class, 'deleteCategories']);
/*
        tasks
*/
Route::get('tasks/{id}', [ApiController::class,'getTasks'] );
