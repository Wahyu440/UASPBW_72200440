@extends('layouts.main')
@section('title', 'Form Dosen')
@section('content')
<div class="container-fluid mt-4 rounded">
        <form action="/dosen/simpandosen" method="POST" class="pt-2 pb-2">
            @csrf
            <div class="form-group w-25">   
                <label>NIDN</label>
                <input type="number" name="nidn" class="form-control" placeholder="Masukan NIDN" required>
            </div><br>
            <div class="form-group w-25">   
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
            </div><br>
            <label>Fakultas</label>
            <div class="form-group w-25">   
                <input type="radio" name="fakultas" value="Teknologi Informasi" class="form-check-input">
                <label>Teknologi Informasi</label>
            </div>
            <div class="form-group w-25">   
                <input type="radio" name="fakultas" value="Arsitektur dan Desain" class="form-check-input">
                <label>Arsitektur dan Desain</label>
            </div><br>
            <div class="form-check w-25">   
                <label>Prodi</label>
                <select name="jurusan" class="form-control">
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Arsitektur">Arsitektur</option>
                    <option value="Desain Produk">Desain Produk</option>
                </select>
            </div><br>
            <div class="form-group pt-4">
                <input type="submit" value="Save" class="btn btn-outline-primary">
            </div>
        </form>
    </div>
@endsection