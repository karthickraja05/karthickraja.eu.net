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

Route::get('/','ResumeController@index')->name('index');


Route::get('/profile', function () {
            return view('profile');
        });
        
        
Route::get('/setskill', function () {
    return view('skill');
});

Route::get('/setport', function () {
    return view('port');
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/skill','ResumeController@viewSkill')->name('skill');
Route::get('/port','ResumeController@viewPort')->name('port');


Route::post('/sendmail','ResumeController@mail')->name('mail');
Route::prefix('resume/public/')->group(function () {
        Route::post('update','ResumeController@profile')->name('update');
        Route::post('skillupdate','ResumeController@skill')->name('skillupdate');
        Route::post('portupdate','ResumeController@port')->name('portupdate');

});

