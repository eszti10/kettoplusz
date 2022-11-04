<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $user = "Andras";
    return view('welcome', [

        'name' => $user
    ]);
});
/*
Route::get('/aloldal', function () {
    return view('aloldal');
});

Route::get('/arraytest', function () {

    $task = ['1. adat', '2. adat', "3. adat"];
    $asd = "valami";
    return view('arraytest') -> with(["asd" => $asd, "task" => $task]);
});

*/
//localhost:8000/urllekeres?ertek=amilyen erteket meg akarunk adni
//http://localhost:8000/urllekeres?ertek=alma&adat=asd
/*
Route::get('/urllekeres', function () {

    return view('urllekeres', [
        'ertek' => request('ertek'),
        'adat' =>  request('adat'),
        'alert' => '<script>alert("alert");</script>'
    ]);
});

Route::get('/post/{post}', function ($post) {

    $posts = [
        "ez-az-elso" => "Hello ez az elso oldal.",
        "ez-a-masodik"=> "Hello ez a masodik oldal."
    ];

    if(!array_key_exists($post,$posts)){
        abort(404);
    }

    return view('post',[
        'post' => $posts[$post] ?? "Nincs ilyen oldal"
    ]);
});
*/


//Route::get("/posts/{post}", [App\Http\Controllers\PostController::class, "show"]);

//Route::get("/{sajatnev}", [App\Http\Controllers\sajatController::class, "show"]);

//Route::get("/flights", [App\Http\Controllers\FlightsController::class,"asd"]);

Route::get("/flights/{flight}", [App\Http\Controllers\FlightsController::class, "show"]);



Route::get("/utasok/create", [App\Http\Controllers\PassengerController::class, "create"]);

Route::get("/utasok/{utas}", [App\Http\Controllers\PassengerController::class, "show"]);
Route::post("/utasok", [App\Http\Controllers\PassengerController::class, "store"]);


Route::get("/legitarsasag", [App\Http\Controllers\AirlinesController::class, "index"]);
Route::get("/legitarsasag/{legi}", [App\Http\Controllers\AirlinesController::class, "show"]);

Route::get("/legitarsasag/create", [App\Http\Controllers\AirlinesController::class, "postcreate"]);
Route::post("/legitarsasag", [App\Http\Controllers\AirlinesController::class, "store"]);

Route::get("/varos/create", [App\Http\Controllers\CityController::class, "postcreate"]);
Route::post("/varos", [App\Http\Controllers\CityController::class, "store"]);


