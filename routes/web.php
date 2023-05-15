<?php
//use App\Http\Controllers\PostsController;

use App\Http\Controllers\PostsController;
use App\Mail\DiscountOffer;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('welcome');
});

//     s  hello viewهذا المعامل المسار في مجلد 
//   /hell  هذا المعامل اسم العرض 
Route::get('/hell/{name}', function($name){
   // return view('hello', ['name' => $name]);
   return view('hello', compact('name'));                           //هذي طريقه اخري 
});

Route::resource('posts', PostsController::class);
Route::get('/posts/create/', [PostsController::class, 'create']);
Route::post('/posts/create', [CommentsController::class, 'store']);               //  commentsController هذا المسار حق اضف تعلبقك وانشانا ملف متحكم اسمه

//Route::get('/signup', function() {
  // return view('signup');
//});




Route::get('/signup/{lang}', function($lang) {
    App::setlocale($lang);
    return view('signup');
 });

 //Route::get('/signup/{lang}', function($lang) {
// App::setlocale($lang);
//});

//Route::get('/signup', function() {
  //  return view('signup');
//});


Route::post('mail/', function(){
    $email = request()->validate([
        'email' => 'required|email'
    ]);
    Mail::to($email)->send(new DiscountOffer());
    
    return back();
});