<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\TeacherController;
use App\Models\Admin;
use App\Models\Distric;
use App\Models\Division;
use App\Models\Info;
use App\Models\post;
use App\Models\Product;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Div;

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
    $users = User::all();

    //   return  $user = User::create([
    //         'name' => "test34",
    //         'email' => "test4@gmail.com",
    //         "password" => "password"
    //     ]);
    // $user->info()->create([
    //     "address" => "UAE"
    // ]);

    // return Info::with('infoable')->find(4);
    // return view('poly');
    return view('welcome', compact('users'));
});





Route::get('/poly', function () {

    // $p1 = Product::create([
    //     "name"=>'p1'
    // ]);
    // $p1->comments()->create([
    //     'body' => "tension ace onk"
    // ]);

    //  $p1 = post::create([
    //     "name"=>'p1'
    // ]);
    // $p1->comments()->create([
    //     'body' => "tension ace onk"
    // ]);

    // // $users = User::all();

    // $user = User::create([
    //     'name' => "e",
    //     'email' => "eccdfv@gmail.com",
    //     "password" => "pass"
    // ]);
    // $user->info()->create([
    //     "address" => "pakistan"
    // ]);
    // return view('poly');
    return Product::with("comments")->find(1);
    // return view('welcome', compact('users'));
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



Route::get('first', [DemoController::class, 'firstmethod'])->name('first');
Route::get('user/{name}', [DemoController::class, 'user']);
Route::get('single', SingleController::class);

Route::resource("photo", PhotoController::class);

// Route::apiResources([
//     'photos' => PhotoController::class,
//     'posts' => PostController::class,
// ]);

Route::get('/view', function () {
    return view('another.first', [
        "title" => "this is title of me",
        // "name" => "this is name"
    ]);
});

Route::get('/second', function () {
    return view('another.second', [
        "title" => "this is title of se onde",
        // "name" => "this is name"
    ]);
});
//form


//query
Route::get('insert', [TeacherController::class, 'insert']);
// Route::get('scope', [ClientController::class, 'scope']);
Route::get('create', [ClientController::class, 'index']);
Route::get('fetch', [ClientController::class, 'fetch']);
Route::get('clinetupdate', [ClientController::class, 'update']);
Route::get('scope', [ClientController::class, 'scope']);
Route::get('clinetDelte', [ClientController::class, 'delete']);


Route::get('select', [TeacherController::class, 'select']);
Route::get('update', [TeacherController::class, 'update']);

//
Route::post('form-submit', function () {
    return "Success";
})->name('submit');

// Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');


Route::get('/form', [RequestController::class, 'index'])->name('form');

// Route::post('/form', [RequestController::class, 'store'])->name('store');
// Route::get('/form', [RequestController::class, 'store'])->name('store');


Route::get('response', [ResponseController::class, 'index']);
Route::get('another-response', [ResponseController::class, 'another']);

Route::get('blade', function () {
    return view('layouts.abc', [
        "title" => "This is title of abc",
        "html" => "  <h1>this is mnext line headiong</h1>",
        "isActive" => false,
        "users" => User::all()
    ]);
});


#session
Route::get('set', function () {
    session()->flash("flash", "Flash");
    session()->put(["test" => "test data"]);
    session(["title" => "sesssion title", "another" => "another title"]);
});

Route::get('get', function () {
    // if (session()->has("tests")) {
    //     # code...
    //     return session("test");
    // }else{
    //     return "not Exists";
    // }
    dd(session()->all());
    return session("flash");
});

Route::get('delete', function () {
    // session()->forget(["another","test"]);
    session()->flush();
});


Route::get('one-to-one', function () {

    // $data = User::find(1)->info;

    // $users = User::whereHas('info', function ($q) {
    //     return $q->whereNotNull('zip_code');
    // })->get();
    $users = User::get();



    return view('show', compact('users'));
});


Route::get('belongsto', function () {

    $info = info::find(2);
    return $info->user;
});


Route::get('n-1', function () {

    // $users = User::with('info')->get();
    $users = User::get();
    // $users->load('info'); //for n+1 problem 

    return view('n1', compact('users'));
});


Route::get('one-to-many', function () {
    // $user = User::find(1);
    // // post::create([
    // //     "user_id"=>$user->id,
    // //     "name"=>'Post two'
    // // ]);
    // $user->posts()->create([
    //     'name' => 'post 3'
    // ]);


    $post = post::find(1);
    // return $user->posts;

    return $post->user;
});




Route::controller(AuthController::class)->group(function(){

Route::get('/login','login' )->name('login');
Route::get('/registration','registration')->name('registration');
Route::post('/authenticate','authenticate')->name('authenticate');
Route::post('/register','store')->name('auth.store');
Route::post('/logout','logout')->name('logout');

});


Route::controller(DashboardController::class)->group(function () {

    Route::get('/dashboard', 'index')->name('dashboard')->middleware('auth');

    Route::get('/home', 'home');

    Route::get('/products/create', 'createProduct')->name('products.create');
    Route::get('/product/edit/{id}', 'product_edit')->name('product.edit');
    Route::post('/product/update/{id}', 'product_update')->name('product.update');
    Route::get('product/{id}', 'product_delete')->name('product.delete');
    Route::post('/store', 'store')->name('store');

    Route::get('/users', 'users');

    Route::get('/settings', 'settings');
});



Route::get('many', function () {
    $user = User::find(5);
    return  $skill = Skill::with('users')->find(1);
    // $user->skilss()->attach([1,2]);
    // $user->skilss()->detach([1]);
    // $user->skilss()->sync([1,3]);

    // return $user->load('skilss');



});



Route::get('/has', function () {

    $div = Division::find(2);
    return $div->load('thanas');
});
