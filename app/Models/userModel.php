<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class userModel extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'user';
    protected $guarded = ['id'];

    protected $keyType = 'string'; // penting untuk UUID
    public $incrementing = false;  // nonaktifkan auto increment

    public function kelas(){
        return $this->belongsTo(kelas::class, 'kelas_id');
    }

    public function getUser(){
        return $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                    ->select('user.*', 'kelas.nama_kelas as nama_kelas')
                    ->get();
    }
}
