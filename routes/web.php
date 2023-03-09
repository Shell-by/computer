<?php

use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// 인덱스 페이지, 처음 접속 후 보여지는 페이지
Route::get('/', function() {
    return view('index');
});
Route::post('/', [RecordController::class, 'store']);

// 관리자 로그인 페이지, 들어가는 방법은 링크를 직접 쳐야한다..
Route::view('/login', 'login');

// 로그인 요청을 받는 페이지, UserController에 store 함수에 post를 넘겨주어 아이디와 비밀번호가 맞는지 확인함
Route::post('/loginController', [UserController::class, 'store']);

// 로그인 요청 받는 페이지가 get으로 아무값도 없이 접속하려 하면 메인 페이지로 이동
Route::get('/loginController', function () {
    echo "<script>location.href='/'</script>";
});

// 관리자가 로그인시 접속할 수 있는 페이지, 페이징 기능 미구현,
Route::get('/output/{id}', [UserController::class, 'show']);

// 관리자가 export로 왔을시 데이터베이스에 있는 데이터를 csv로 변환하여 다운받을 수 있음
Route::get('/export', [UserController::class, 'export']);
