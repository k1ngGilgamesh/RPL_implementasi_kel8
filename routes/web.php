<?php
use App\Http\Controllers\Penginapan\PenginapanController;
use App\Http\Controllers\Wisata\WisataController;
use App\Http\Controllers\Shelter\ShelterController;
use App\Http\Controllers\User\UserController;

use Illuminate\Support\Facades\Route;

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

Route::get('home', [UserController::class,'getUser']);

Route::get('penginapan', [PenginapanController::class,'getPenginapan']);
Route::get('penginapanlist', [PenginapanController::class,'getPenginapanList']);

Route::get('wisata', [WisataController::class, 'getWisata']);
Route::get('wisatalist', [WisataController::class, 'getWisataList']);


Route::get('tambahShelter', [ShelterController::class,'getShelter']);
Route::get('shelter', [ShelterController::class,'getShelterList']);
Route::get('editshelter', [ShelterController::class,'editShelter']);

Route::get('tableuser', [UserController::class,'getTableUser']);

Route::get('edithost', [HostController::class,'editHost']);
Route::get('editpenginapan', [PenginapanController::class,'editPenginapan']);

Route::get('editwisata', [WisataController::class,'editWisata']);

Route::get('dashboard', [UserController::class,'getaAdmin']);

Route::get('map', [MapController::class,'getmap']);

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});