<?php

namespace App\Exports;

use App\Models\Calon;
use Maatwebsite\Excel\Concerns\FromCollection;

class CalonExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Calon::all();
    }
}
