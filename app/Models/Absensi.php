<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal', 'asrama_id', 'kamar_id', 'mahasiswa_id', 'kehadiran'];

    public function asrama ()
    {
        return $this->belongsTo('App\Models\Asrama');
    }

    public function kamar ()
    {
        return $this->belongsTo('App\Models\Kamar');
    }

    public function mahasiswa ()
    {
        return $this->belongsTo('App\Models\Mahasiswa');
    }

}
