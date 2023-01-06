<?php

namespace App\Http\Controllers;

use App\Models\kriteria;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriteria = kriteria::all();
        $orders = DB::table('kriteria')
            ->select('*')
            ->groupBy('jenis_kriteria')
            ->get();
        return view('kriteria', compact(
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
        $model = new kriteria;
        return view('tambah-data-kriteria', compact(
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
                'jenis_kriteria' => 'required',
                'kode_kriteria' => 'required|unique:kriteria',
                'nama_kriteria' => 'required',
            ],
            [
                'jenis_kriteria.required' => 'Pilih',
                'kode_kriteria.unique' => 'Tidak Boleh Sama',
                'kode_kriteria.required' => 'Tidak Boleh Kosong',
                'nama_kriteria.required' => 'Tidak Boleh Kosong',
            ]
        );

        kriteria::create([
            "jenis_kriteria" => $request['jenis_kriteria'],
            "kode_kriteria" => $request['kode_kriteria'],
            "nama_kriteria" => $request['nama_kriteria']
        ]);

        return redirect('kriteria');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function show(kriteria $kriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kriteria = kriteria::where('id', $id)->first();
        return view('ubah-data-kriteria', compact('kriteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'jenis_kriteria' => 'required',
                'kode_kriteria' => 'required',
                'nama_kriteria' => 'required',
            ],
            [
                'jenis_kriteria.required' => 'Pilih',
                'kode_kriteria.required' => 'Tidak Boleh Kosong',
                'nama_kriteria.required' => 'Tidak Boleh Kosong',
            ]
        );

        $kriteria = kriteria::where('id', $id)->update([
            "jenis_kriteria" => $request['jenis_kriteria'],
            "kode_kriteria" => $request['kode_kriteria'],
            "nama_kriteria" => $request['nama_kriteria']
        ]);

        return redirect('kriteria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = kriteria::where('id', $id)->delete();
        return redirect('kriteria');
    }
}
