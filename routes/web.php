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
            ->middleware('auth')->except(['show', 'update', 'destroy',]);
    });
    //クイズ演習画面ルート
    Route::get('/exercise', function () {
        return view('contents.exercise');
    });
});

//ユーザ管理ルート
Route::prefix('users')->name('users.')->group(function () {
    Route::get('/{name}', 'UserController@show')->name('show');
});
