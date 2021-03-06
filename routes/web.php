<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Routes 
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('index','UsersController@index')->name('index');

Route::post('feedback','UsersController@feedback')->name('feedback');
// Route::get('feedback','UsersController@feedback')->name('feedback');

Route::get('publishedResults','Student\DashboardController@results');
Route::get('rules','Student\QuizController@rules');
Route::get('tips','Student\QuizController@tips');

// Get subject wise exam in result
Route::get('gExam/{id}','Student\DashboardController@exams');

Route::get('exammmQuestion/{id}','Student\DashboardController@examQuestion');

// To publish result
Route::post('publish-result/{id}','ExamResultController@publish')->name('publish-result');



Route::group(['middleware' => 'disablepreventback'] , function () {
    Auth::routes();
    Route::get('/home', 'HomeController@index');

    //Admin Routes
    Route::resource('grades', 'gradeController');
    Route::resource('subjects', 'subjectController');
    Route::resource('studentinfos', 'studentinfoController');
    Route::resource('feed', 'FeedbackController');
    Route::resource('exams', 'examController');
    Route::resource('quizzes', 'quizController');
    Route::resource('examquestions', 'examquestionController');
    Route::resource('quizquestions', 'quizquestionController');
    Route::get('examresults', 'ExamResultController@index');
    Route::get('showGrade/{id}', 'ExamResultController@show')->name('showGrade');
    Route::get('showSubject/{id}', 'ExamResultController@subject')->name('showSubject');
    Route::get('showExam/{id}', 'ExamResultController@exam')->name('showExam');
    Route::get('showPaper/{id}', 'ExamResultController@paper')->name('showpaper');
    Route::get('showResult/{id}', 'ExamResultController@result')->name('showResult');

    Route::get('/changePassword','StudentProfileController@showChangePasswordForm');
    

    // student routes
    Route::get('student-login', 'Auth\StudentLoginController@showLoginForm');
    Route::get('dashboard', 'Auth\StudentLoginController@getDashboard');
    Route::post('student-login', ['as' => 'student-login', 'uses' => 'Auth\StudentLoginController@login']);
    
    //for showing quiz according to subject
    Route::get('filterQuiz/{id?}','Student\QuizController@filterQuiz')->name('filterQuiz');
    
    //for showing exams according to subject
    Route::get('showExamStu/{id?}','Student\ExamController@exams')->name('showExamStu');
    
    //for giving exam
    Route::get('giveExam/{id?}','Student\ExamController@startExam')->name('giveExam');
    
    //For submitting exam
    Route::post('submitExam','Student\ExamController@send')->name('submitExam');
    
    
});







// Auth::routes();
// Route::get('/home', 'HomeController@index');



// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');




