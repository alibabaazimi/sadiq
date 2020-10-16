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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('/{vue_capture?}', function () {
    return view('spa.index');
})->where('vue_capture', '[\/\w\.-]*');



// Route::view('/', 'spa.index')->name('home');


// Route::redirect('/home', '/');

// Route::get('/category/*', 'PostController@byCategory');

// Route::get('/post/{post}', 'PostController@show')->name('show_post');

// Route::get('/cats', function() {


//     $array = \App\Category::with('children')->where('parent', null)->get();
//     $array = json_decode($array, true);


//     function build_list($array) {
//         $list = '<ol>';
//         foreach($array as $key => $value) {
//             foreach($value as $key => $index) {
//                 if(is_array($index)) {
//                     $list .= build_list($index);
//                 } else {
//                     $list .= "<li>$index</li>";
//                 }
//             }
//         }

//         $list .= '</ol>';
//         return $list;
//     }

//     return build_list($array);
// });


// Route::group(['middleware' => 'auth'], function() {
//     Route::get('/logout', function() {
//         Auth::logout();
//         return redirect('/');
//     });

//     Route::get('/admin', 'HomeController@admin');

//     Route::get('/dashboard/category', 'CategoryController@index');


//     Route::get('/ads', 'PostController@index')->name('posts');

//     Route::get('/create_post', 'PostController@create')->name('create_post');

//     Route::post('/add_post', 'PostController@store')->name('store_post');

//     Route::post('/post/{post}/add_comment', 'PostController@addComment')->name('add_comment');

//     Route::get('/post/{post}/like', 'PostController@addLike')->name('post_like');


//     Route::get('/inbox', 'MessageController@inbox')->name('message.inbox');

//     Route::get('/sent', 'MessageController@sent')->name('message.sent');

//     Route::get('/inbox/compose', 'MessageController@compose')->name('message.compose');

//     Route::post('/inbox/compose', 'MessageController@send')->name('message.send');

//     Route::get('/inbox/message/{message}', 'MessageController@show')->name('message.show');


//     Route::get('/profile', 'ProfileController@index')->name('profile');

//     Route::post('/profileUpload', 'FileUploadController@profileUpload');


//     Route::post('/postPhotoUpload', 'FileUploadController@postPhotoUpload')->name('postPhotoUpload');

//     Route::get('/test', function() {
//         $messages = App\Message::inbox()->where('seen', '=', false);
//         if ($messages->count()>0)
//         {
//             foreach ($messages as $message)
//             {
//                 return $message->recipient->profile();
//             }
//         }
//         else
//         {
//             return 'adfadf';
//         }
//     });

//     Route::get('/settings', function() {
//         return view('settings');
//     });
// });



// Route::get('/log/{message}', function ($message) {
//     Log::info("Hello my log, message: $message");
//     return view('welcome');
// });
