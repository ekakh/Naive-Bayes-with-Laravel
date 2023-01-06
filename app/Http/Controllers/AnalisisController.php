<?php

namespace App\Http\Controllers;


use App\Models\analisis;
use App\Models\analisiss;
use App\Models\analisisss;
use App\Models\kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AnalisisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $analisis = analisisss::all(); //tabel kriteria
        // $jk = analisisss::where('jenis_kriteria', '=', 'Tanggungan')->result;
        // $dataTA = analisisss::where('jenis_kriteria', '=', 'Tanggungan')->count();
        // $dataTB = analisisss::where('jenis_kriteria', '=', 'Tanggungan')->count();

        $tanggungan =  DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Tanggungan')
            ->get();
        $pekerjaan =  DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Pekerjaan')
            ->get();
        $penghasilan =  DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Penghasilan')
            ->get();
        $jenis_lantai =  DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Jenis Lantai')
            ->get();
        $jenis_dinding =  DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Jenis Dinding')
            ->get();
        $sumber_listrik =  DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Sumber Listrik')
            ->get();
        $sumber_air =  DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'Sumber Air')
            ->get();
        $sk_mck =  DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'SK MCK')
            ->get();
        $sk_rumah =  DB::table('kriteria')
            ->select('*')
            ->where('jenis_kriteria', 'SK Rumah')
            ->get();
        $penerima = DB::table('penerima')
            ->select('*')
            ->get();

        $analisis = analisis::all(); //tabel penerima
        $countL = analisis::where('status', '=', 'Layak')->count() + 1;
        $countTL = analisis::where('status', '=', 'Tidak Layak')->count() + 1;
        // $countTA = analisis::where('tanggungan', '=', '' | 'status', '=', 'Layak')->count() + 1;
        // $countTB = analisis::where('tanggungan', '=', '' && 'status', '=', 'Tidak Layak')->count() + 1;

        // var_dump($countL);
        // die();
        $analisiss = analisiss::all();
        return view('analisis', compact(
            'analisis',
            'countL',
            'countTL',
            'analisiss',
            'pekerjaan',
            'penerima',
            'tanggungan',
            'penghasilan',
            'jenis_lantai',
            'jenis_dinding',
            'sumber_listrik',
            'sumber_air',
            'sk_mck',
            'sk_rumah'
            // 'analisisss'
        ));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate(
        //     [

        //         'nik' => 'required',
        //         'status' => 'required',
        //     ],
        //     [

        //         'nik.required' => 'NIK sudah digunakan',
        //         'status.required' => 'Pilih Status Rumah',
        //     ]
        // );

        $nik = $request['nik'];
        echo $nik[0];
        // for ($i = 0; $i < count($nik); $i++) {
        // }

        // penerima::create([
        //     "no_kk" => $request['no_kk'],
        //     "nik" => $request['nik'],
        //     "nama_kk" => $request['nama_kk'],
        //     "jk" => $request['jk'],
        //     "dusun" => $request['dusun'],
        //     "rt" => $request['rt'],
        //     "rw" => $request['rw'],
        //     "tanggungan" => $request['tanggungan'],
        //     "pekerjaan" => $request['pekerjaan'],
        //     "penghasilan" => $request['penghasilan'],
        //     "jenis_lantai" => $request['jenis_lantai'],
        //     "jenis_dinding" => $request['jenis_dinding'],
        //     "sumber_air" => $request['sumber_air'],
        //     "sumber_listrik" => $request['sumber_listrik'],
        //     "sk_mck" => $request['sk_mck'],
        //     "sk_rumah" => $request['sk_rumah'],
        //     "status" => $request['status']
        // ]);
        return view('analisis');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\analisis  $analisis
     * @return \Illuminate\Http\Response
     */
    public function show(analisis $analisis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\analisis  $analisis
     * @return \Illuminate\Http\Response
     */
    public function edit(analisis $analisis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\analisis  $analisis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, analisis $analisis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\analisis  $analisis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
