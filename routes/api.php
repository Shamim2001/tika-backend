<?php

use App\Http\Controllers\api\VerifyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test', function () {
    return 'Ok';
});

Route::post('/verify', [VerifyController::class, 'verify']);
