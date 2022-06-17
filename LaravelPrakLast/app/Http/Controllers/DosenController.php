<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;

class DosenController extends Controller
{
    public function dosen(){
        $dosen = Dosen::paginate(10);
        return view('dosen', ['dosen' => $dosen], ['cek' => 'dosen']);
    }
}
