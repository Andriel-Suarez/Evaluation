<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProjectController;



Route::post('/store-project-eval', 'ProjectEvalController@store');
Route::post('/members', [MemberController::class, 'store']);
Route::post('/projects',[ProjectController::class, 'store']);

