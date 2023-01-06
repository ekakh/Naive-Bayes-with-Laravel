<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Exports\CalonExport;
use App\Imports\CalonImport;
use App\Models\calon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;


class CalonPenerimaController extends Controller
{
    public function index()
    {
        $calon = calon::all();
        return view('data-calon', compact(
            'calon'
        ));
    }

    public function tetapkan(Request $request)
    {
        $nik = $request['nik'];
        $status = $request['status'];


        for ($i = 0; $i < count($nik); $i++) {
            $data_calon = DB::table('calon')->select('*')->where('nik', $nik[$i])->first();
            DB::table('penerima')->insert([
                "no_kk" => $data_calon->no_kk,
                "nik" => $data_calon->nik,
                "nama_kk" => $data_calon->nama_kk,
                "jk" => $data_calon->jk,
                "dusun" => $data_calon->dusun,
                "rt" => $data_calon->rt,
                "rw" => $data_calon->rw,
                "tanggungan" => $data_calon->tanggungan,
                "pekerjaan" => $data_calon->pekerjaan,
                "penghasilan" => $data_calon->penghasilan,
                "jenis_lantai" => $data_calon->jenis_lantai,
                "jenis_dinding" => $data_calon->jenis_dinding,
                "sumber_air" => $data_calon->sumber_air,
                "sumber_listrik" => $data_calon->sumber_listrik,
                "sk_mck" => $data_calon->sk_mck,
                "sk_rumah" => $data_calon->sk_rumah,
                "status" => $status[$i],
                "created_at" => Date("Y-m-d H:i:s"),
                "updated_at" => Date("Y-m-d H:i:s")
            ]);
            DB::table('calon')->where('nik', $nik[$i])->delete();
        }

        return redirect('/analisis');
    }

    public function export_excel()
    {
        return Excel::download(new CalonExport, 'data_calon.xlsx');
    }

    public function import_excel(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();

        // upload ke folder file_siswa di dalam folder public
        $file->move('file_calon', $nama_file);

        // import data
        Excel::import(new CalonImport, public_path('/file_calon/' . $nama_file));

        // notifikasi dengan session
        Session::flash('sukses', 'Data Calon Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect('/data-calon');
    }
}
