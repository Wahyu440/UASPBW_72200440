<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class APIMahasiswaController extends Controller
{
    public function list(){
        $mahasiswa = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => 'Show Success',
            'data' => $mahasiswa
        ], 200);
    }
    public function add(request $req){
        $mahasiswa = Mahasiswa::create([
            'nim' => $req->nim,
            'nama' => $req->nama,
            'gender' => $req->gender,
            'jurusan' => $req->jurusan,
            'bidangminat' => $req->bidangminat,
        ]);
        if($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'Saving Success',
            ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Saving Failed',
            ], 401);
        }
    }
    public function edit(request $req){
        $mahasiswa = Mahasiswa::whereId($req->id)->update([
            'nim' => $req->nim,
            'nama' => $req->nama,
            'gender' => $req->gender,
            'jurusan' => $req->jurusan,
            'bidangminat' => $req->bidangminat,
        ]);
        if($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'Update Success',
            ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Update Failed',
            ], 400);
        }
    }
    public function delete($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        if($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'Delete Success',
            ], 200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Delete Failed',
            ], 400);
        }
    }
}