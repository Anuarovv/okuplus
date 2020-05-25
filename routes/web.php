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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/calendar', function (){
 return view('calendar');
});

//facebook login
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
//google
Route::get('login/google', 'Auth\GoogleController@redirectToProvider');
Route::get('login/google/callback', 'Auth\GoogleController@handleProviderCallback');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');


//courses

Route::resource('courses', 'CourseController');
Route::get('courses/{id}', 'CourseController@show')->name('courses.show');

Route::get('courses/subscribers/{course_id}', 'CourseController@subscribers')->name('courses.subscribers');
Route::get('courses/items/{course_id}/{item_id}', 'CourseController@items')->name('courses.items');

Route::post('courses/disapprove', 'CourseController@disapprove')->name('courses.disapprove');
Route::post('courses/approve', 'CourseController@approve')->name('courses.approve');

//logged in
Route::middleware(['auth'])->group(function () {

//publish/unpublish

Route::post('courses/publishCourse', 'CourseController@publishCourse')->name('courses.publishCourse');
Route::post('courses/unpublishCourse', 'CourseController@unpublishCourse')->name('courses.unpublishCourse');

Route::get('courses/contents/{course_id}', 'CourseController@contents')->name('courses.contents');
Route::get('courses/comments/{course_id}', 'CourseController@comments')->name('courses.comments');


    Route::resource('categories', 'CategoryController');
    Route::resource('comments', 'CommentController');

    /*Route::get('comments/create', 'CommentController@create')->name('comment.create');*/
    Route::resource('coupons', 'CouponController');
    Route::get('courses/items/{course_id}/{item_id}', 'CourseController@items')->name('courses.items');

    Route::resource('courseUsers', 'CourseUserController');
    Route::resource('users', 'UserController');
});


Route::resource('items', 'ItemController');
Route::get('items/create/{course_id?}', 'ItemController@create')->name('items.create');

Route::resource('payments', 'PaymentController');


Route::resource('views', 'ViewController');

Route::resource('roles', 'RoleController');

Route::resource('coupons', 'CouponController');
