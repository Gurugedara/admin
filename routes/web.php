<?php
Route::get('/', function () { return view('index'); });

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

    Route::get('/dashboard',function (){
       return view('admin.dashboard');
    });
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

    // Message
    Route::get('/message/view','messageController@index');

    //Forum
    Route::get('/forum','forumController@index');
//    Route::resource('roles', 'Admin\RolesController');
//    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
//    Route::resource('users', 'Admin\UsersController');
//    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

    
});

Route::get('/institute/register', 'RegisterInstitutesController@index');
Route::resource('institutes','instituteController');
