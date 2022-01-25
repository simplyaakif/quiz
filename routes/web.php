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

    Route::get('/', 'LandingController@index');


    Route::post('/mcq', 'QuestionController@store');

    Route::get('/questionadd', 'QuestionController@create');
    Route::post('/quizcheck', 'LandingController@quiz');


//    Route::get('initTable', 'InitTable')->name('initTable');
//    Route::get('tableData', 'TableData')->name('tableData');
    Route::get('/eresult', function () {
        return view('eresults');
    });


    Route::get('/eresults', 'LandingController@eresults');
