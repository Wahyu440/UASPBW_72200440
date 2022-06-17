@extends('layouts.main')
@section('title', 'Form Account')
@section('content')
<div class="container-fluid mt-4 rounded">
    <form action="/user/simpanuser" method="POST" class="pt-2 pb-2">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-5">
                <input type="text" name="nama_user" class="form-control" placeholder="Username" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-5">
                <input type="number" name="nik_user" class="form-control" placeholder="NIK" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">No HP</label>
            <div class="col-sm-5">
                <input type="text" name="no_hp" class="form-control" placeholder="No HP" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
                <input type="text" name="email" class="form-control" placeholder="Email" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-5">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
        </div>
        <div class="form-group pt-4">
            <input type="submit" value="Save" class="btn bg-primary text-white">
        </div>
    </form>
</div>
@endsection
