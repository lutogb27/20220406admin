<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\ManageUserController;

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

Route::get('/', [FormController::class, 'index'])->name('index');
Route::post('/index/confirm', [FormController::class, 'confirm'])->name('confirm');
Route::post('/index/complete', [FormController::class, 'complete'])->name('complete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

//管理側
Route::group(['middleware' => ['auth.admin']], function () {
	
	//管理側トップ
	Route::get('/admin', [FormController::class, 'show'])->name('admin');;
	//ログアウト実行
	Route::post('/admin/logout', [FormController::class, 'logout'])->name('logout');;
	//ユーザー一覧
	Route::get('/admin/user_list', [ManageUserController::class, 'showUserList'])->name('user_list');;
	//ユーザー詳細
	Route::get('/admin/user/{id}', [ManageUserController::class, 'showUserDetail'])->name('user');;

});

//管理側ログイン
// ログインの処理だけを行う、loginメソッド内でお問い合わせ一覧にリダイレクトする
Route::post('/admin/login', [FormController::class, 'showadminlogin'])->name('showadminlogin');

// お問い合わせ一覧ページ
Route::get('/admin/login', [FormController::class, 'login'])->name('login');