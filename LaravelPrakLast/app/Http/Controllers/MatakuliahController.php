<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matakuliah;

class MatakuliahController extends Controller
{
    public function matakuliah(){
        $matakuliah = Matakuliah::paginate(10);
        return view('matakuliah', ['matakuliah' => $matakuliah], ['cek' => 'matakuliah']);
    }
}
