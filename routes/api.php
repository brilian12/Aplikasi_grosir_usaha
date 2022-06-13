<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\MemberController;
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
Route::get('/v1/member', [MemberController::class,'index']);
Route::post('/v1/member/store', [MemberController::class,'store']);
Route::put('/v1/member/edit/{id}', [MemberController::class,'update']);
Route::delete('/v1/member/delete/{id}', [MemberController::class,'delete']);