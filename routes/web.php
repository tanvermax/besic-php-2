<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\TeacherController;
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
    return view('welcome');
});


// require __DIR__ . "/admin.php";


// Route::get('/first',function(){
//     return redirect('seconde');
//     return  "First ROute Response";
// });

// Route::redirect('/first','/seconde');

// Route::get('/seconde', function () {
//     return  "seconde Route Response";
// })->name('seconde_route');


// Route::view('test', "welcome", [
//     "anme" => "laravel"
// ]);


// Route::get("user/{name}/{id?}",function($name,$id=null){
// return "hello $name , Your Id is  $id";
// })->where(['name' => '[A-Za-z]+', 'id' => '[0-9]+']);



// Route::get("user/{name}/{id?}", function ($name, $id = null) {
//     return "hello $name , Your Id is  $id";
// })->whereNumber('id');


// Route::prefix('product')->name('product.')->middleware(['auth','api'])->group(function () {
//     Route::get('create', function () {
//         return "Product Create";
//     })->name('create');
//     Route::get('index', function () {
//         return "Product Index";
//     })->name('index');
//     Route::get('show', function () {
//         return "Product Show";
//     })->name('show');
// });


// Route::fallback(function () {
//     return "Route Not Founde";
// });


// Route::get('middleware',function () {
//     return "Middleware Response";
// })->middleware('check_age:29');



Route::get('first',[DemoController::class,'firstmethod'])->name('first');
Route::get('user/{name}',[DemoController::class,'user']);
Route::get('single',SingleController::class);

Route::resource("photo",PhotoController::class);

Route::apiResources([
    'photos' => PhotoController::class,
    'posts' => PostController::class,
]);

Route::get('/view',function(){
    return view('another.first',[
        "title" => "this is title of me",
        // "name" => "this is name"
    ]);
});

Route::get('/second',function(){
    return view('another.second',[
        "title" => "this is title of se onde",
        // "name" => "this is name"
    ]);
});


//query
Route::get('insert',[TeacherController::class,'insert']);
Route::get('scope',[ClientController::class,'scope']);

//\
Route::post('form-submit',function(){
return "Success";
})->name('submit');

// Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');


Route::get('/form',[RequestController::class,'index']);

Route::post('/form',[RequestController::class,'store'])->name('store');
Route::get('/form',[RequestController::class,'store'])->name('store');


Route::get('response',[ResponseController::class,'index']);
Route::get('another-response',[ResponseController::class,'another']);
