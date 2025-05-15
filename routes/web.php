<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\dosen_Controller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/cth', function () {
//     return view('contoh');
// });

// Route::fallback (function (){
//     return view('notfound');
// });

// Route :: get('mahasiswa/{nama}', function ($nama){
//     echo "Ini Halaman Mahasiswa dengan Nama $nama";
// });

// Route::get('/hello/hello2/hellolagi', function () {
//     echo "Hello Kamu";
// });

// Route::get('/mahasiswa', function (){
//     $kelas ="IS62";
//     $data = ["Putri Chantika","Kania Nabila Muntaz","Sri Maharani","Cut Putri Efrina","Penti Anggraini"];
//     // return view('mahasiswa.index')->with('mhs','$data')->('kls',$kelas));
//     return view('mahasiswa.index',compact('kelas','data'));
// });

// Route::get('mahasiswa', function () {
//     $nama ="Penti Anggraini";
//     $nilai =98;

//     $nilai2 = [85,70,50,70,35,100];

//     return view('mahasiswa',compact('nama','nilai','nilai2'));
// });


// Route::get('/master', function () {
//     $data_mhs = ["Abdul","Adha","Aidil","Alif","Asfal"];
//     return view('data.master',compact('data_mhs'));
// });

// Route::get('/mahasiswa', function () {
//     $data_mhs = ["Rani","Kania","Putri","Pece","Dini"];
//     return view('data.mahasiswa',compact('data_mhs'));
// });

// Route::get('/dosen', function () {
//     $data_dos = ["Ismanuddin","Mustofa Lutfi","Rita Warni","Ridha Ansari","Dzulgunar M Nasir"];
//     return view('data.dosen',compact('data_dos'));
// });

// Route::get('/galeri', function () {
//     return view('data.galeri');
// });
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Data dosen
// Route::get('/dosen', [dosen_Controller::class, 'index']);
// Route::get('/dosen\tambah', [dosen_Controller::class, 'create']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Data Dosen
Route::get('/dosen', [dosen_Controller::class, 'index'])->name('Dosen.index');
// Form Tambah Data Dosen
Route::get('/Dosen/tambah', [dosen_Controller::class, 'tambah'])->name('dosens.tambah');
// Simpan Data Dosen
Route::post('/dosen', [dosen_Controller::class, 'store'])->name('dosens.store');