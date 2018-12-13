<?php

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

use App\User;
use Illuminate\Support\Facades\Input;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('activation/{key}', 'Auth\RegisterController@activation');
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/profile/{id}', 'HomeController@profile');
Route::post('profile', 'HomeController@update_avatar');

Route::post ( '/search', function () {
    $q = Input::get ( 'q' );
    if($q != ""){
        $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
        if (count ( $user ) > 0)
            return view ( 'search' )->withDetails ( $user )->withQuery ( $q );
        else
            return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
    }
    return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::get('/edit/user{id}','HomeController@edit');
Route::post('/edit/user{id}','HomeController@update');
Route::delete('/delete/user/{id}','HomeController@destroy');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/posts', 'PostsController');
    Route::get('/post/{id}', 'PostsController@post')->name('post.show');
    Route::get('/edit/{id}', 'PostsController@edit')->name('post.edit');
});

Route::resource('comments', 'CommentsController');
Route::post('/comments/store', 'CommentsController@store')->name('comment.add');

Route::group(['middleware' => 'auth'], function () {
    Route::get('users', 'UsersController@index')->name('users');
    Route::get('user/{id}', 'UsersController@user')->name('user.view');
    Route::post('users/{user}/follow', 'UsersController@follow')->name('follow');
    Route::delete('users/{user}/unfollow', 'UsersController@unfollow')->name('unfollow');
    Route::get('/notifications', 'UsersController@notifications');
});


Route::get('/chat', 'ChatController@index')->name('chat');
Route::post('getFriends', 'HomeController@getFriends');
Route::post('/session/create', 'SessionController@create');
Route::post('/session/{session}/chats', 'ChatController@chats');
Route::post('/session/{session}/read', 'ChatController@read');
Route::post('/session/{session}/clear', 'ChatController@clear');
Route::post('/session/{session}/block', 'BlockController@block');
Route::post('/session/{session}/unblock', 'BlockController@unblock');
Route::post('/send/{session}', 'ChatController@send');

Route::get('/image-gallery/', 'ImageGalleryController@index');
Route::post('image-gallery', 'ImageGalleryController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');
Route::get('/show-gallery/', 'ImageGalleryController@show');