<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenerateQrCodeController;

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
    return view('welcome');
});
// Route::get('simple-qr-code', [GenerateQrCodeController::class, 'simpleQrCode']);
Route::get('simple-qr-code', [GenerateQrCodeController::class, 'simpleQrCode']);
Route::get('color-qr-code', [GenerateQrCodeController::class, 'colorQrCode']);
Route::get('image-qr-code', [GenerateQrCodeController::class, 'imageQrCode']);