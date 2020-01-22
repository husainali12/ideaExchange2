<?php
use App\User;
use App\Expert;

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




// Route::get('/','AnswerController@index');

Route::get('/users', function(){

    return App\Question::find(3)->answers;
    
});

Route::get('/', function () {
    return view('home');
});
// Route::group(['prefix' => 'admin'], function () {
//   Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
//   Route::post('/login', 'AdminAuth\LoginController@login');
//   Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

//   Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
//   Route::post('/register', 'AdminAuth\RegisterController@register');

//   Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
//   Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
//   Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
//   Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
// });

// Route::group(['prefix' => 'expert'], function () {
//   Route::get('/login', 'ExpertAuth\LoginController@showLoginForm')->name('login');
//   Route::post('/login', 'ExpertAuth\LoginController@login');
//   Route::post('/logout', 'ExpertAuth\LoginController@logout')->name('logout');

//   Route::get('/register', 'ExpertAuth\RegisterController@showRegistrationForm')->name('register');
//   Route::post('/register', 'ExpertAuth\RegisterController@register');

//   Route::post('/password/email', 'ExpertAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
//   Route::post('/password/reset', 'ExpertAuth\ResetPasswordController@reset')->name('password.email');
//   Route::get('/password/reset', 'ExpertAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
//   Route::get('/password/reset/{token}', 'ExpertAuth\ResetPasswordController@showResetForm');
// });

Route::get('login/google', 'AuthController@redirectToProvider');
Route::get('login/google/callback', 'AuthController@handleProviderCallback');