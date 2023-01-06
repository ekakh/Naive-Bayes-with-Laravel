<?php

namespace App\Http\Controllers;

use App\Models\penerima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerima = penerima::all();
        return view('data-penerima', compact(
            'penerima'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new penerima;
        return view('tambah-data-penerima', compact(
            'model'
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
                'status' => 'required',
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
                'status.required' => 'Pilih Status Rumah',
            ]
        );

        penerima::create([
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
            "sk_rumah" => $request['sk_rumah'],
            "status" => $request['status']
        ]);

        return redirect('data-calon');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penerima  $penerima
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penerima = penerima::where('id', $id)->first();
        return view('detail-penerima', compact('penerima'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penerima  $penerima
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penerima  $penerima
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penerima $penerima)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penerima  $penerima
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = penerima::where('id', $id)->delete();
        return redirect('data-penerima');
    }
}
