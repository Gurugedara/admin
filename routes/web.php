<?php

//Home Controllers
Route::get('/','HomeController@index');
Route::get('/institute/register','instituteController@create');
Route::post('/institute/register','instituteController@store');
Route::post('/contact','contactController@store');

// MCQ view
Route::get('/app/mcq/{id}','mcqAppviewController@index');

//search results
Route::post('/search', 'instituteController@searchIns');

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/dashboard','dashboardController@index');
    Route::get('/home',function (){
        return redirect('/admin/dashboard');
    });
    //Student Section
    Route::get('/verify/student', 'studentController@index');
    Route::get('/verify/student/{institute_id}/{student_id}', 'studentController@changeStatus');
    Route::get('/deny/student/{institute_id}/{student_id}', 'studentController@deny');
    Route::get('/search/student', 'studentController@search');
    Route::get('/search/student/{student_id}', 'studentController@viewProfile');

    //Teacher Section
    Route::get('/verify/teacher', 'teacherController@index');
    Route::get('/verify/teacher/{institute_id}/{teacher_id}', 'teacherController@changeStatus');
    Route::get('/deny/teacher/{institute_id}/{teacher_id}', 'teacherController@deny');
    Route::get('/search/teacher', 'teacherController@search');
    Route::get('/search/teacher/{teacher_id}', 'teacherController@viewProfile');

    // Course Section
    Route::get('/institute/course','courseController@index');
    Route::get('/institute/course/delete/{institute_id}/{course_id}','courseController@delete');
    Route::get('/institute/course/add','courseController@addCourse');
    Route::post('/institute/course/add','courseController@checkCourse');
    Route::get('/institute/course/edit/{institute_id}/{course_id}','courseController@edit')->name('course.edit');
    Route::post('/institute/course/update/{syllabus_id}','courseController@update')->name('course.update');

    // Reviews Section
    Route::get('/institute/reviews','reviewsController@index');
    Route::get('/institute/reviews/publish/{review}','reviewsController@publish');
    Route::get('/institute/reviews/hide/{review}','reviewsController@hide');
    Route::get('/institute/reviews/comment/{review}','reviewsController@comment');
    Route::post('/institute/review/{review_id}/comment/add','reviewsController@addComment');

    //Syllabus Section
    Route::resource('/institute/syllabus','syllabusController');

    //Modules Section
    Route::get('/institute/syllabus/{syllabus_id}/modules','moduleController@index')->name('modules.view');
    Route::resource('/institute/syllabus/modules','moduleController');

    // SucessStories
    Route::resource('/institute/stories','successStoriesController');

    //Papers
    Route::resource('/institute/papers','paperController');

    //mcq
    Route::get('/institute/papers/mcq/{id}/create','mcqController@create')->name('mcq.addnew');
    Route::resource('/institute/papers/mcq','mcqController');
    Route::get('/institute/paper/{id}','paperController@getResults');

    // Message
    Route::get('/message/view','messageController@index');
    Route::get('/message/getUsers/{id}', 'messageController@getUsers');
    Route::get('message/get/{sender}/{reciever}','messageController@getMessages');
    Route::get('message/avatar/{userId}','messageController@getAvatar');
    Route::post('message/send','messageController@sendMessage');

    //Forum
    Route::get('/forum','forumController@index');
    Route::post('/forum/post','forumController@post');
    Route::post('/forum/comment','forumController@comment');

    // Institute 
    Route::get('/institute/details','instituteController@index');
    Route::get('/institute/edit/{id}','instituteController@edit');
    Route::post('/institute/update/{id}','instituteController@update');
    Route::get('/institute/hide/{id}','instituteController@hide');
    Route::get('/institute/unhide/{id}','instituteController@unhide');

    //contact
    Route::get('/contact','contactController@index');

    //courses
    Route::get('/courses','courseController@viewCourses');
    Route::get('/courses/create','courseController@addCourses');
    Route::post('/courses/add','courseController@saveCourses');
    Route::get('/courses/edit/{id}','courseController@editCourses');
    Route::post('/courses/edit/{id}','courseController@courseUpdate');
    Route::get('/courses/delete/{id}','courseController@destroy');


//    Route::resource('roles', 'Admin\RolesController');
//    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
//    Route::resource('users', 'Admin\UsersController');
//    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

    
});


