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
    return view('contents.toplogin');
})->middleware('guest');

Auth::routes([
    'register' => true,  // ユーザー登録用のルート。デフォルトは true
    'reset'    => false,  // パスワードリセット用のルート。デフォルトは true
    'confirm'  => false,  // パスワード確認用のルート。Auth\ConfirmPasswordController が存在すればデフォルトは true
    'verify'   => false,  // メール確認用のルート。デフォルトは false
]);

Route::resource('/quizzes', 'QuizController')
    ->middleware('auth');
