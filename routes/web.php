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

//トップ画面ルート
Route::get('/', function () {
    return view('contents.toplogin');
})->name('top')->middleware('guest');

//認証関係ルート
Auth::routes([
    'register' => true,  // ユーザー登録用のルート。デフォルトは true
    'reset'    => false,  // パスワードリセット用のルート。デフォルトは true
    'confirm'  => false,  // パスワード確認用のルート。Auth\ConfirmPasswordController が存在すればデフォルトは true
    'verify'   => false,  // メール確認用のルート。デフォルトは false
]);


Route::prefix('quizzes')->group(function () {

    //クイズ関係のメインルート
    Route::name('quizzes.')->group(function () {
        Route::resource('/', 'QuizController')
            ->middleware('auth')->except(['show', 'edit', 'update', 'destroy',]);
        Route::get('/{question_id}/edit', 'QuizController@edit')->middleware('auth')->name('edit');
        Route::post('/{question_id}/update', 'QuizController@update')->middleware('auth')->name('update');
        Route::post('/{question_id}/destroy', 'QuizController@destroy')->middleware('auth')->name('destroy');

        Route::post('/exercise', 'QuizController@exercise')->middleware('auth')->name('exercise');
        Route::post('/exercise/confirm', 'QuizController@confirm')->middleware('auth')->name('exercise.confirm');
    });
});

//ユーザ管理ルート
Route::prefix('users')->name('users.')->group(function () {
    Route::get('/{name}', 'UserController@show')->middleware('auth')->name('show');
});
