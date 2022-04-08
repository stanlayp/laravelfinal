<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nim', 'id_kamar', 'nama_depan', 'nama_belakang', 'no_hp', 'jurusan'];
}
