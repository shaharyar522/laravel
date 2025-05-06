<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() 
{
   return view('welcome');
});



// Route::get('/post/{id}',function(string $id){
//         return "<h1>Post Id: ".$id."</h1>";
// });

// i want to send optinal id 

// Route::get('/post/{id?}', function (string $id = null) {
//     if ($id) {
//         return "<h1>Id: " . e($id) . "</h1>";
//     } else {
//         return "<h1>Not Found</h1>";
//     }
// });

// Route::get('/post/{id?}/comment/{commentid?}',function(string $id = null, string $comment){
//     if($id){
//         return "<h1></h1>".$id."<h2>".$comment."</h2>";
//     }
// });

//if you want to user only numaric values then use this method 

Route::get('/post/{id}',function(string $id){
return 'post'.$id;
})->where('id','[a-zA-Z]+');



Route::get('/post/firstpost',function()
{
   return view('firstpost');
});


//agar koe banda  es tahran say karay kay 


Route::get('/category',[CategoryController::class,'create']);


Route::get('product/create',[ProductController::class,'create']);
Route::get('product/index',[ProductController::class,'index']);
Route::post('product/store',[ProductController::class,'store'])->name('product.store');

Route::get('producttwo/create',[PracticeController::class,'insert'])->name('producttwo.insert');






Route::get('/dashboard', function (){
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
