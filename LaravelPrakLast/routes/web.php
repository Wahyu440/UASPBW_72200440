<?php

Route::get('/home', function () {
    return view('home', ['cek' => 'home']);
});

Route::get('/dosen','DosenController@dosen');
Route::get('/mahasiswa','MahasiswaController@mahasiswa')->middleware('auth');
Route::get('/matakuliah','MatakuliahController@matakuliah');

Route::get('/dosen/cari','DosenController@cari');
Route::get('/mahasiswa/cari','MahasiswaController@cari')->middleware('auth');
Route::get('/matakuliah/cari','MatakuliahController@cari');

Route::get('/dosen/formdosen','DosenController@formdosen');
Route::get('/mahasiswa/formmahasiswa','MahasiswaController@formmahasiswa')->middleware('auth');
Route::get('/matakuliah/formmatakuliah','MatakuliahController@formmatakuliah');

Route::post('/dosen/simpandosen','DosenController@savedosen');
Route::post('/mahasiswa/simpanmahasiswa','MahasiswaController@savemahasiswa')->middleware('auth');
Route::post('/matakuliah/simpanmatakuliah','MatakuliahController@savematkul');

Route::get('/mahasiswa/editmahasiswa/{id}','MahasiswaController@editmahasiswa')->middleware('auth');
Route::get('/mahasiswa/hapusmahasiswa/{id}','MahasiswaController@hapusmahasiswa')->middleware('auth');
Route::put('/mahasiswa/updatemahasiswa/{id}','MahasiswaController@updatemahasiswa')->middleware('auth');

Route::get('/user/edituser/{id}','AuthController@edituser')->middleware('auth');
Route::put('/user/updateuser/{id}','AuthController@updateuser')->middleware('auth');
Route::get('/user/hapususer/{id}','AuthController@hapususer')->middleware('auth');

Route::get('/user','AuthController@user')->middleware('auth');
Route::get('/user/formuser','AuthController@formuser')->middleware('auth');
Route::post('/user/simpanuser','AuthController@saveuser')->middleware('auth');
Route::get('/','AuthController@login')->middleware('guest')->name('login');
Route::post('/user/ceklogin','AuthController@ceklogin')->middleware('guest');
Route::get('/logout','AuthController@logout')->middleware('auth');