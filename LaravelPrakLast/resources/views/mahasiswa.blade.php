@extends('layouts.main')
@section('title','Mahasiswa')
@section('content')
<div class="card-header">
  <a name="" class="btn btn-primary" href="/mahasiswa/formmahasiswa" role="button"><i class="bi bi-plus-square-fill"></i> ADD MAHASISWA</a>
    <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/cari">
        <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-warning my-2 mr-sm-0" type="submit">Search</button>
    </form>
</div>
@if (session('alertAdd'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('alertAdd') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (session('alertUpdate'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session('alertUpdate') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@elseif (session('alertDelete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session('alertDelete') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<table class="table table-hover text-white table-bordered">
    <thead style="background-color: #764AF1;">
        <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama Mahasiswa</th>
            <th scope="col">Gender</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Bidang Minat</th>
            <th scope="col">Manipulasi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswa as $no => $d)
            <tr>
                <th scope="row" class="text-center">{{ $mahasiswa->firstItem() + $no }}</th>
                <td>{{ $d->nim }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->gender }}</td>
                <td>{{ $d->jurusan }}</td>
                <td>{{ $d->bidangminat }}</td>
                <td class="text-center">
                    <a href="/mahasiswa/editmahasiswa/{{ $d->id }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                    <a href="/mahasiswa/hapusmahasiswa/{{ $d->id }}" class="btn btn-warning"><i class="bi bi-trash3" onclick="return confirm('Apakah data ini akan benar-benar dihapus?')"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    <span class="float-right">{{ $mahasiswa->links() }}</span>
@endsection