<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function user(){
        $user = User::paginate(5);
        return view('user', ['user' => $user], ['cek' => 'user']);
    }
    public function cari(Request $req){
        $cari = $req->cari;
        $user = User::where('nama_user', 'like', '%'.$cari.'%')->orWhere('email', 'like', '%'.$cari.'%')->paginate();
        return view('user', ['user' => $user], ['cek' => 'user']);
    }
    public function formuser(){
        return view('formuser', ['cek' => 'user']);
    }
    public function saveuser(Request $req){
        $user = User::create([
            'nama_user' => $req->nama_user,
            'email' => $req->email,
            'nik_user' => $req->nik_user,
            'no_hp' => $req->no_hp,
            'password' => md5($req->password)
        ]);
        return redirect("/user")->with('alertAdd', 'Data Tersimpan');
    }
    public function edituser($id){
        $user = User::find($id);
        return view('edituser', ['user' => $user], ['cek' => 'user']);
    }
    public function updateuser(Request $req, $id){
        $user = User::find($id);
        $user->nik_user = $req->nik_user;
        $user->nama_user = $req->nama_user;
        $user->no_hp = $req->no_hp;
        $user->save();
        return redirect("/user")->with('alertUpdate', 'Data Terubah');
    }
    public function hapususer($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('alertDelete', 'Data Terhapus');
    }
    public function login(){
        return view('login');
    }
    public function ceklogin(Request $req){
        $user = User::where('email', $req->email)
                  ->where('password',md5($req->password))
                  ->first();
        if ($user){
            Auth::login($user);
            return redirect('/home');
        }
        else {
            return redirect('/');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect("/")->with('alertLogout', 'Anda Berhasil Logout!');
    }
}