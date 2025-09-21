<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "", $nim = "", $kelas = "") {
        $data = [
            'nama' => $nama,
            'nim' => $nim,  
            'kelas' => $kelas
        ];
        return view('profile', $data);
    }
}
