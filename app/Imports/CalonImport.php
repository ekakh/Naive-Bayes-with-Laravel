<?php

namespace App\Imports;

use App\Models\calon;
use Maatwebsite\Excel\Concerns\ToModel;

class CalonImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new calon([
            'no_kk' => $row[0],
            'nik' => $row[1],
            'nama_kk' => $row[2],
            'jk' => $row[3],
            'dusun' => $row[4],
            'rt' => $row[5],
            'rw' => $row[6],
            'tanggungan' => $row[7],
            'pekerjaan' => $row[8],
            'penghasilan' => $row[9],
            'jenis_lantai' => $row[10],
            'jenis_dinding' => $row[11],
            'sumber_listrik' => $row[12],
            'sumber_air' => $row[13],
            'sk_mck' => $row[14],
            'sk_rumah' => $row[15],
        ]);
    }
}
