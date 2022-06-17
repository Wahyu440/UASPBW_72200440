@extends('layouts.main')
@section('title', 'Form Mahasiswa')
@section('content')
<div class="container-fluid mt-4 rounded">
        <form action="/mahasiswa/simpanmahasiswa" method="POST" class="pt-2 pb-2">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Masukkan NIM</label>
                <div class="col-sm-5">
                    <input type="number" name="nim" class="form-control" placeholder="Masukan NIM" required>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Masukkan Nama</label>
                <div class="col-sm-5">
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
                </div>
            </div>

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input type="radio" name="gender" value="Pria" class="form-check-input">
                            <label>
                                Pria
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="gender" value="Wanita" class="form-check-input">
                            <label>
                                Wanita
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>
 
            <div class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Pilih Jurusan</legend>
                <div class="col-sm-5">
                    <select name="jurusan" class="form-control">
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Informatika">Informatika</option>
                        <option value="Kedokteran">Kedokteran</option>
                        <option value="Arsitektur">Arsitektur</option>
                        <option value="Manajemen">Manajemen</option>
                    </select>
                </div>
            </div>
        </div>

        <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Pilih Bidang Minat</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input type="checkbox" name="bidangminat[]" value="Humaniora" class="form-check-input">
                            <label>
                                Humaniora
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="bidangminat[]" value="Kesehatan" class="form-check-input">
                            <label>
                                Kesehatan
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="bidangminat[]" value="Layanan" class="form-check-input">
                            <label>
                                Layanan
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="bidangminat[]" value="Akuntansi" class="form-check-input">
                            <label>
                                Akuntansi
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>

        <div class="form-group pt-4">
            <input type="submit" value="Save" class="btn bg-primary text-white">
        </div>
    </form>
</div>
@endsection