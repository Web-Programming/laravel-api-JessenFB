<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/menu', function(Request $request){
    return response()->json(['Home','Profile','About','Contact Us']);
});

Route::get('/donatur', function(Request $request){
    return response()->json([
         'id :1',
         'nama: Nur Ractmat',
         'id :2',
         'nama: Ractmat',
         'id :3',
         'nama: Ractmat Nur',
         'id :4',
         'nama: Jessen',
         'id :5',
         'nama: Fallik',
         'id :6',
         'nama: Bemi',
         'id :7',
         'nama: Valentino',   
]);
});
