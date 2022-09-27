<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\RecordController;
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
Route::view('/', 'index');

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

// 사용자의 기본 정보를 입력받는 폼
Route::get('/form', [FormController::class, 'index']);

/*
    사용자의 기본 정보를 받은 폼에서 값을 넘겨주는 곳,
    값을 받아 데이터를 저장하고 필요한 값을 성적을 입력하는곳으로 넘김
 */
Route::post('/record', [FormController::class, 'store']);

// 정보를 입력받지 않고 링크로만 접속할시 메인페이지로 이동
Route::get('/record', function () {
    echo "<script>location.href='/'</script>";
});

/*
    성적을 입력받고 계산하여 사용자에게 보여주는곳,
    사용자 정보 저장 동의를 했을 경우 저장
*/
Route::put('/result', [RecordController::class, 'store']);


// 정보를 입력받지 않고 링크로만 접속할시 메인페이지로 이동
Route::get('/result', function () {
    echo "<script>location.href='/'</script>";
});

// 관리자가 export로 왔을시 데이터베이스에 있는 데이터를 csv로 변환하여 다운받을 수 있음
Route::get('/export', [UserController::class, 'export']);
