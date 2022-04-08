<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $fillable = ['id_asrama', 'lantai', 'no_kamar', 'jmlh_penghuni'];
}
