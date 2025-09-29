<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $table='kelas';

    protected $fillable = [
        'nama_kelas',
    ];

    public function kelas(){
        return $this->hasMany(userModel::class);
    }

    public function getKelas(){
        return $this->all();
    }
}
