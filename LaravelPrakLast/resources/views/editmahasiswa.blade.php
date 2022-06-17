@extends('layouts.main')
@section('title', 'Form Mahasiswa')
@section('content')
<div class="container-fluid mt-4 rounded">
    @php
        $bidangminat = explode(',',$mahasiswa->bidangminat);
    @endphp
        <form action="/mahasiswa/updatemahasiswa/{{ $mahasiswa->id }}" method="POST" class="pt-2 pb-2">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Masukkan NIM</label>
                <div class="col-sm-5">
                    <input type="number" name="nim" class="form-control" value="{{ $mahasiswa->nim }}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Masukkan Nama</label>
                <div class="col-sm-5">
                    <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
                </div>
            </div>

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input type="radio" name="gender" value="Pria" {{ $mahasiswa->gender == 'Pria' ? 'checked':'' }} class="form-check-input">
                            <label>
                                Pria
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="gender" value="Wanita" {{ $mahasiswa->gender == 'Wanita' ? 'checked':'' }} class="form-check-input">
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
                        <option value="Sistem Informasi" {{ $mahasiswa->jurusan == 'Sistem Informasi' ? 'selected':'' }}>Sistem Informasi</option>
                        <option value="Informatika" {{ $mahasiswa->jurusan == 'Informatika' ? 'selected':'' }}>Informatika</option>
                        <option value="Kedokteran" {{ $mahasiswa->jurusan == 'Kedokteran' ? 'selected':'' }}>Kedokteran</option>
                        <option value="Arsitektur" {{ $mahasiswa->jurusan == 'Arsitektur' ? 'selected':'' }}>Arsitektur</option>
                        <option value="Manajemen" {{ $mahasiswa->jurusan == 'Manajemen' ? 'selected':'' }}>Manajemen</option>
                    </select>
                </div>
            </div>
        </div>

        <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Pilih Bidang Minat</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input type="checkbox" name="bidangminat[]" value="Humaniora" {{ in_array('Humaniora',$bidangminat) ? 'checked':'' }} class="form-check-input">
                            <label>
                                Humaniora
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="bidangminat[]" value="Kesehatan" {{ in_array('Kesehatan',$bidangminat) ? 'checked':'' }} class="form-check-input">
                            <label>
                                Kesehatan
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="bidangminat[]" value="Layanan" {{ in_array('Layanan',$bidangminat) ? 'checked':'' }} class="form-check-input">
                            <label>
                                Layanan
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="bidangminat[]" value="Akuntansi" {{ in_array('Akuntansi',$bidangminat) ? 'checked':'' }} class="form-check-input">
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