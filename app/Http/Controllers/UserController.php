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

    public function edit ($id){
        $user = $this->userModel->findOrFail($id);
        $kelas = $this->kelasModel->getKelas();

        return view('edit_user', ['title' => 'Edit User', 'user' => $user, 'kelas' => $kelas]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $user =$this->userModel->findOrFail($id);
        $user->update([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id){
        $user = $this->userModel->findOrFail($id);
        $user->delete();

        return redirect()->to('/user')->with('success', 'Data berhasil dihapus');
    }
}
