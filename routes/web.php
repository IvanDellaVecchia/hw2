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
    return view('login');
});


Route::get('registrazione', 'App\Http\Controllers\RegisterController@ShowRegistrazione'); 
Route::post('registrazione', 'App\Http\Controllers\RegisterController@Errors');

Route::get('login', 'App\Http\Controllers\LoginController@ShowLogin');
Route::post('login', 'App\Http\Controllers\LoginController@AvviaLogin');
Route::get('logout', 'App\Http\Controllers\LoginController@Logout');


Route::get('home', 'App\Http\Controllers\HomeController@ShowHome');

Route::get('personal', 'App\Http\Controllers\PersonalController@ShowPersonal');
Route::post('personal', 'App\Http\Controllers\PersonalController@ProfileForm');
Route::get('checkUser/{id}', 'App\Http\Controllers\PersonalController@checkUser');
Route::get('eliminaUtente', 'App\Http\Controllers\PersonalController@eliminaUtente');

Route::get('searchUser', 'App\Http\Controllers\SearchUserController@Show');

Route::get('personalPosts/{value}', 'App\Http\Controllers\PostController@personalPosts');
Route::get('posts', 'App\Http\Controllers\PostController@ShowPosts');
Route::get('likesQuery', 'App\Http\Controllers\PostController@Likes');
Route::get('eliminaPost/{id}', 'App\Http\Controllers\PostController@eliminaPost');

Route::get('newpost', 'App\Http\Controllers\NewPostController@Show');
Route::post('newpost', 'App\Http\Controllers\NewPostController@Create');


Route::get('addLike/{id}', 'App\Http\Controllers\LikeController@AddLike');
Route::get('removeLike/{id}', 'App\Http\Controllers\LikeController@RemoveLike');

Route::get('dogApi', 'App\Http\Controllers\DogApiController@dogApi');

?>