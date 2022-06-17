<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function mahasiswa(){
        $mahasiswa = Mahasiswa::paginate(10);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa], ['cek' => 'mahasiswa']);
    }
    public function cari(Request $req){
        $cari = $req->cari;
        $mahasiswa = Mahasiswa::where('nama', 'like', '%'.$cari.'%')->orWhere('nim', 'like', '%'.$cari.'%')->paginate();
        return view('mahasiswa', ['mahasiswa' => $mahasiswa], ['cek' => 'mahasiswa']);
    }
    public function formmahasiswa(){
        return view('formmahasiswa', ['cek' => 'mahasiswa']);
    }
    public function savemahasiswa(Request $req){
        $bidangminat = implode(",", $req->get('bidangminat'));
        Mahasiswa::create([
            'nim' => $req->nim,
            'nama' => $req->nama,
            'gender' => $req->gender,
            'jurusan' => $req->jurusan,
            'bidangminat' => $bidangminat
        ]);
        return redirect("/mahasiswa")->with('alertAdd', 'Data Tersimpan');
    }
    public function editmahasiswa($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('editmahasiswa', ['mahasiswa' => $mahasiswa], ['cek' => 'mahasiswa']);
    }
    public function updatemahasiswa(Request $req, $id){
        $bidangminat = implode(",", $req->bidangminat);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $req->nim;
        $mahasiswa->nama = $req->nama;
        $mahasiswa->gender = $req->gender;
        $mahasiswa->jurusan = $req->jurusan;
        $mahasiswa->bidangminat = $bidangminat;
        $mahasiswa->save();
        return redirect("/mahasiswa")->with('alertUpdate', 'Data Terubah');
    }
    public function hapusmahasiswa($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('alertDelete', 'Data Terhapus');
    }
}