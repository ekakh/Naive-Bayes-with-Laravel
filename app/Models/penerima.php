<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class penerima extends Model
{

    protected $table = "penerima";
    protected $fillable = [
        'no_kk', 'nik', 'nama_kk', 'jk', 'dusun', 'rt', 'rw',
        'tanggungan', 'pekerjaan', 'penghasilan', 'jenis_lantai',
        'jenis_dinding', 'sumber_listrik', 'sumber_air', 'sk_mck', 'sk_rumah', 'status'
    ];
}
