<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calon extends Model
{
    protected $table = 'calon';
    protected $fillable  = [
        'id', 'no_kk', 'nik', 'nama_kk', 'jk', 'dusun', 'rt', 'rw',
        'tanggungan', 'pekerjaan', 'penghasilan', 'jenis_lantai',
        'jenis_dinding', 'sumber_listrik', 'sumber_air', 'sk_mck', 'sk_rumah'
    ];

    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
            ->format('Y');
    }

    public function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at'])
            ->diffForHumans();
    }
}

class kriteria extends Model
{
    protected $table = 'kriteria';
    protected $fillable  = [
        'jenis_kriteria', 'kode_kriteria', 'nama_kriteria'
    ];

    function getDataKriteria()
    {
        return $orders = kriteria::table('kriteria')
            ->select('*')
            ->groupByRaw('jenis_kriteria')
            ->get();
    }

    function get_data_kriteria_where_jenis_kriteria($parameter)
    {
        return $query = kriteria::table('kriteria')
            ->select('*')
            ->groupByRaw('jenis_kriteria')
            ->where('jenis_kriteria', $parameter)
            ->get();
    }
}
