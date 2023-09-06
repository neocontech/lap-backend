<?php

use App\Http\Controllers\api\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('contact')->group(function(){
    Route::get('/',[ContactController::class,'index']);
    Route::post('/store',[ContactController::class,'store']);
});
