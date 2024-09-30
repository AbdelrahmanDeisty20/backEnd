<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\database;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('show');
    $data = DB::table("job")->get();
        return view("show", compact('data'));
});

Route::get("create",[database::class,"create"]);
Route::post('insert',[database::class,'insert']);
Route::get("show",[database::class,"index"]);
Route::get("edit/{id}",[database::class,"edit"]);
Route::post("update/{id}",[database::class,"update"]);
Route::get("delete/{id}",[database::class,"delete"]);
// Route::post('/upload-image', [ImageController::class, 'store']);
