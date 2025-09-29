<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\userModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new userModel();
        $this->kelasModel = new kelas();
    }

    public function store(Request $request){
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'nim' => $request->input("npm"),
            'kelas_id' => $request->input('kelas_id'),
        ]);
        return redirect()->to('/user');
    }
    public function create(){
        $kelasModel = new kelas();
        $kelas = $kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];
        return view('create_user', $data);
    }

    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }
}
