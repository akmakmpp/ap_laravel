<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("/live" ,function() {
    return array([
        

        "league" => "🏆 Serie A",

         "date"=> "April 30",

         "time"=> "5:00 PM",

         "himg"=> "https://images.fotmob.com/image_resources/logo/teamlogo/8636_small.png",

         "aimg"=> "https://images.fotmob.com/image_resources/logo/teamlogo/8543_small.png",

         "teams"=> "Inter Vs Lazio",

         "hteam" =>"Inter",

         "ateam"=> "Lazio",

         "hotmat"=>"yes",

         "link"=> array(
            [  "type"=> "SD",

         "livelink"=>"abc"]
         )

               


             

         


]);
});