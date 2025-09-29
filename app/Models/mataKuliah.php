<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mataKuliah extends Model
{
    use HasFactory;

    protected $table='mata_kuliah';
    protected $guarded = ['id'];

    protected $fillable = [
        'nama_mk',
        'sks',
    ];
}
