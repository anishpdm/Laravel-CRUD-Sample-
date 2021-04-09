<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FacultyController;


route::get('/', [FacultyController::class,'create']);

route::post('/facultyread', [FacultyController::class,'store']);

route::get('/viewall', [FacultyController::class,'index']);

route::get('/search', [FacultyController::class,'searchview']);

route::post('/searchprocess', [FacultyController::class,'search']);


route::put('/facultyedit/{id}', [FacultyController::class,'update']);


route::delete('/facultydelete/{id}', [FacultyController::class,'destroy']);



route::get('/faculty/{id}/edit', [FacultyController::class,'edit']);

route::get('/faculty/{id}/delete', [FacultyController::class,'deleteview']);






// Route::get('/stud','App\Http\Controllers\StudentController@index');
