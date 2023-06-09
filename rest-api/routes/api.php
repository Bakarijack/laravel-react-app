<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\SkillController;


Route::prefix('v1')->group( function () {
    Route::apiResource('skills', SkillController::class);
});