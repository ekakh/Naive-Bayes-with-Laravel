<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
