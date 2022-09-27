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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/loginController', [UserController::class, 'store']);

Route::get('/loginController', function () {
    echo "<script>location.href='/'</script>";
});

Route::get('/output/{id}', [UserController::class, 'show']);

Route::get('/form', [FormController::class, 'index']);

Route::post('/record', [FormController::class, 'store']);

Route::get('/record', function () {
    echo "<script>location.href='/'</script>";
});

Route::put('/result', [RecordController::class, 'store']);

Route::get('/result', function () {
    echo "<script>location.href='/'</script>";
});

Route::get('/export', [UserController::class, 'export']);

Route::get('/dataBase.csv', function () {
    redirect('/');
});

