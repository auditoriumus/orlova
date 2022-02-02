<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1'], function () {
    Route::post('/', [\App\Http\Controllers\api\v1\HelperBotHomeController::class, 'index']);
});
