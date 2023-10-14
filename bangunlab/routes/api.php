<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// models
use App\Models\CourseMaterials;

// controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\RoadmapController;


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
Route::get('/user',[App\Http\Controllers\UserController::class,'index']);
Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::group(['middleware' => ['is_verifed']], function () {
        Route::group(['middleware' => ['is_active']], function () {
             Route::get('/mentor',[MentorController::class,'index']);
        }); 
    });
    Route::get('/logout',[AuthController::class,'logout']);
    Route::post('/email_verif',[AuthController::class,'verify']);

    // modul survey
    Route::prefix('survey')->group(function () {
        Route::get('/submit/{unique_code}',[SurveyController::class,'submit']);
        Route::post('/store',[SurveyController::class,'store']);
    });

    Route::prefix('business')->group(function () {
        Route::post('/store',[BusinessController::class,'store']);
        Route::post('/add_type',[BusinessController::class,'add_type']);
    });

    Route::prefix('course')->group(function () {
        Route::post('/store',[CourseController::class,'store']);
        Route::post('/store_material',[CourseController::class,'store_material']);
        Route::post('/store_video',[CourseController::class,'store_video']);
        Route::post('/store_offline',[CourseController::class,'store_offline']);
        Route::post('/add_type',[CourseController::class,'add_type']);
        
        Route::get('/get_offline/{material}',[CourseController::class,'get_offline_material']);
        
    });
    Route::prefix('mentor')->group(function () {
        Route::post('/add_type',[MentorController::class,'add_type']);
        Route::post('/store',[MentorController::class,'store']);
    });

    Route::prefix('roadmap')->group(function () {
        Route::post('/store',[RoadmapController::class,'store']);
        Route::post('/store_step',[RoadmapController::class,'store_step']);
        Route::get('/get_step/{roadmap}',[RoadmapController::class,'get_step']);
    });
    
});


