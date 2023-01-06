<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\calon;
use App\Models\kriteria;
use Illuminate\Http\Request;
use App\Imports\CalonImport;
// use App\Imports\CalonExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;



class CalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calon = calon::all();
        $kriteria = kriteria::all();
        $orders = DB::table('kriteria')
            ->select('*')
            ->groupBy('jenis_kriteria')
            ->get();
        return view('data-calon', compact(
            'calon',
            'kriteria',
            'orders'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new calon;
        $kriteria = kriteria::all();
        $tanggungan = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Tanggungan')
            ->get();
        $pekerjaan = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Pekerjaan')
            ->get();
        $penghasilan = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Penghasilan')
            ->get();
        $jl = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Jenis Lantai')
            ->get();
        $jd = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Jenis Dinding')
            ->get();
        $sl = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Sumber Listrik')
            ->get();
        $sa = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Sumber Air')
            ->get();
        $mck = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'SK MCK')
            ->get();
        $rumah = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'SK Rumah')
            ->get();
        return view('tambah-data-calon', compact(
            'model',
            'kriteria',
            'tanggungan',
            'pekerjaan',
            'penghasilan',
            'jl',
            'jd',
            'sl',
            'sa',
            'mck',
            'rumah'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'no_kk' => 'required|unique:calon',
                'nik' => 'required|unique:calon',
                'nama_kk' => 'required',
                'jk' => 'required',
                'dusun' => 'required',
                'rt' => 'required',
                'rw' => 'required',
                'tanggungan' => 'required',
                'pekerjaan' => 'required',
                'penghasilan' => 'required',
                'jenis_lantai' => 'required',
                'jenis_dinding' => 'required',
                'sumber_air' => 'required',
                'sumber_listrik' => 'required',
                'sk_mck' => 'required',
                'sk_rumah' => 'required',
            ],
            [
                'no_kk.unique' => 'No KK sudah digunakan',
                'nik.unique' => 'NIK sudah digunakan',
                'nama_kk.required' => 'Nama tidak boleh kosong',
                'jk.required' => 'Pilih Jenis Kelamin',
                'dusun.required' => 'Pilih RT',
                'rt.required' => 'Pilih RW',
                'rw.required' => 'Pilih RT',
                'tanggungan.required' => 'Pilih Tanggungan',
                'pekerjaan.required' => 'Pilih Pekerjaan',
                'penghasilan.required' => 'Pilih Penghasilan',
                'jenis_lantai.required' => 'Pilih Jenis Lantai',
                'jenis_dinding.required' => 'Pilih Jenis Dinding',
                'sumber_air.required' => 'Pilih Sumber Air',
                'sumber_listrik.required' => 'Pilih Sumber Listrik',
                'sk_mck.required' => 'Pilih Status MCK',
                'sk_rumah.required' => 'Pilih Status Rumah',
            ]
        );

        calon::create([
            "no_kk" => $request['no_kk'],
            "nik" => $request['nik'],
            "nama_kk" => $request['nama_kk'],
            "jk" => $request['jk'],
            "dusun" => $request['dusun'],
            "rt" => $request['rt'],
            "rw" => $request['rw'],
            "tanggungan" => $request['tanggungan'],
            "pekerjaan" => $request['pekerjaan'],
            "penghasilan" => $request['penghasilan'],
            "jenis_lantai" => $request['jenis_lantai'],
            "jenis_dinding" => $request['jenis_dinding'],
            "sumber_air" => $request['sumber_air'],
            "sumber_listrik" => $request['sumber_listrik'],
            "sk_mck" => $request['sk_mck'],
            "sk_rumah" => $request['sk_rumah']
        ]);

        return redirect('data-calon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\calon  $calon
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $calon = calon::where('id', $id)->first();
        return view('detail-calon', compact('calon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\calon  $calon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calon = calon::where('id', $id)->first();
        $kriteria = kriteria::all();
        $tanggungan = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Tanggungan')
            ->get();
        $pekerjaan = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Pekerjaan')
            ->get();
        $penghasilan = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Penghasilan')
            ->get();
        $jl = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Jenis Lantai')
            ->get();
        $jd = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Jenis Dinding')
            ->get();
        $sl = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Sumber Listrik')
            ->get();
        $sa = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Sumber Air')
            ->get();
        $mck = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'SK MCK')
            ->get();
        $rumah = DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'SK Rumah')
            ->get();
        return view('ubah-data-calon', compact(
            'calon',
            'kriteria',
            'tanggungan',
            'pekerjaan',
            'penghasilan',
            'jl',
            'jd',
            'sl',
            'sa',
            'mck',
            'rumah'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\calon  $calon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'no_kk' => 'required',
                'nik' => 'required',
                'nama_kk' => 'required',
                'jk' => 'required',
                'dusun' => 'required',
                'rt' => 'required',
                'rw' => 'required',
                'tanggungan' => 'required',
                'pekerjaan' => 'required',
                'penghasilan' => 'required',
                'jenis_lantai' => 'required',
                'jenis_dinding' => 'required',
                'sumber_air' => 'required',
                'sumber_listrik' => 'required',
                'sk_mck' => 'required',
                'sk_rumah' => 'required',
            ],
            [
                'no_kk.required' => 'No KK sudah digunakan',
                'nik.required' => 'NIK sudah digunakan',
                'nama_kk.required' => 'Nama tidak boleh kosong',
                'jk.required' => 'Pilih Jenis Kelamin',
                'dusun.required' => 'Pilih RT',
                'rt.required' => 'Pilih RW',
                'rw.required' => 'Pilih RT',
                'tanggungan.required' => 'Pilih Tanggungan',
                'pekerjaan.required' => 'Pilih Pekerjaan',
                'penghasilan.required' => 'Pilih Penghasilan',
                'jenis_lantai.required' => 'Pilih Jenis Lantai',
                'jenis_dinding.required' => 'Pilih Jenis Dinding',
                'sumber_air.required' => 'Pilih Sumber Air',
                'sumber_listrik.required' => 'Pilih Sumber Listrik',
                'sk_mck.required' => 'Pilih Status MCK',
                'sk_rumah.required' => 'Pilih Status Rumah',
            ]
        );

        $calon = calon::where('id', $id)->update([
            "no_kk" => $request['no_kk'],
            "nik" => $request['nik'],
            "nama_kk" => $request['nama_kk'],
            "jk" => $request['jk'],
            "dusun" => $request['dusun'],
            "rt" => $request['rt'],
            "rw" => $request['rw'],
            "tanggungan" => $request['tanggungan'],
            "pekerjaan" => $request['pekerjaan'],
            "penghasilan" => $request['penghasilan'],
            "jenis_lantai" => $request['jenis_lantai'],
            "jenis_dinding" => $request['jenis_dinding'],
            "sumber_air" => $request['sumber_air'],
            "sumber_listrik" => $request['sumber_listrik'],
            "sk_mck" => $request['sk_mck'],
            "sk_rumah" => $request['sk_rumah']
        ]);

        return redirect('data-calon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\calon  $calon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = calon::where('id', $id)->delete();
        return redirect('data-calon');
    }
}
