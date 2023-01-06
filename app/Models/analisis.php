<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class analisis extends Model
{
    protected $table = "penerima";
    protected $fillable = [
        'no_kk', 'nik', 'nama_kk', 'jk', 'dusun', 'rt', 'rw',
        'tanggungan', 'pekerjaan', 'penghasilan', 'jenis_lantai',
        'jenis_dinding', 'sumber_listrik', 'sumber_air', 'sk_mck', 'sk_rumah', 'status'
    ];

    public function getLabel($a)
    {
        $this->db->select('*');
        $this->db->from('penerima');
        $this->db->where('status', $a);
        return $this->db->get()->result();
    }
}

class analisiss extends Model
{
    protected $table = 'calon';
    protected $fillable  = [
        'no_kk', 'nik', 'nama_kk', 'jk', 'dusun', 'rt', 'rw',
        'tanggungan', 'pekerjaan', 'penghasilan', 'jenis_lantai',
        'jenis_dinding', 'sumber_listrik', 'sumber_air', 'sk_mck', 'sk_rumah'
    ];
}

class analisisss extends Model
{
    protected $table = 'kriteria';
    protected $fillable  = [
        'jenis_kriteria', 'kode_kriteria', 'nama_kriteria'
    ];
}
