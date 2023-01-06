<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\DB;


class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan = laporan::all();
        if (isset($_GET['tahun_awal'])) {
            $tahun_awal = strval($_GET['tahun_awal']);
            $tahun_akhir = strval($_GET['tahun_akhir']);
            // $tahun_awal = strval($_GET['tahun_awal']) . "-01-01 00:00:00";

            // $tahun_akhir = strval($_GET['tahun_akhir']) . "-01-01 00:00:00";
            $status = $_GET['status'];
            if ($status == "semua") {
                $data_cari = DB::select("SELECT * FROM penerima WHERE YEAR(updated_at) BETWEEN '$tahun_awal' AND '$tahun_akhir'");
                return view('laporan', compact(
                    'laporan',
                    'tahun_awal',
                    'tahun_akhir',
                    'data_cari',
                    'status'
                ));
            } else {
                $data_cari = DB::select("SELECT * FROM penerima WHERE status='$status' AND YEAR(updated_at) BETWEEN '$tahun_awal' AND '$tahun_akhir'");
                // var_dump($data_cari);
                // die();
                return view('laporan', compact(
                    'laporan',
                    'tahun_awal',
                    'tahun_akhir',
                    'data_cari',
                    'status'
                ));
            }
        }
        return view('laporan', compact(
            'laporan'
        ));
    }

    public function cetak_pdf()
    {
        $laporan = laporan::all();
        if (isset($_GET['tahun_awal'])) {
            $tahun_awal = strval($_GET['tahun_awal']);
            $tahun_akhir = strval($_GET['tahun_akhir']);
            // $tahun_awal = strval($_GET['tahun_awal']) . "-01-01 00:00:00";

            // $tahun_akhir = strval($_GET['tahun_akhir']) . "-01-01 00:00:00";
            $status = $_GET['status'];
            if ($status == "semua") {
                $data_cari = DB::select("SELECT * FROM penerima WHERE YEAR(updated_at) BETWEEN '$tahun_awal' AND '$tahun_akhir'");
                // return view('laporan_pdf', compact(
                //     'laporan',
                //     'tahun_awal',
                //     'tahun_akhir',
                //     'data_cari',
                //     'status'
                // ));
                $pdf = PDF::loadview('laporan_pdf', compact(
                    'laporan',
                    'tahun_awal',
                    'tahun_akhir',
                    'data_cari',
                    'status'
                ));
                return $pdf->download('laporan-pdf');
            } else {
                $data_cari = DB::select("SELECT * FROM penerima WHERE status='$status' AND YEAR(updated_at) BETWEEN '$tahun_awal' AND '$tahun_akhir'");
                // var_dump($data_cari);
                // die();
                // return view('laporan_pdf', compact(
                //     'laporan',
                //     'tahun_awal',
                //     'tahun_akhir',
                //     'data_cari',
                //     'status'
                // ));
                $pdf = PDF::loadview('laporan_pdf', compact(
                    'laporan',
                    'tahun_awal',
                    'tahun_akhir',
                    'data_cari',
                    'status'
                ));
                return $pdf->download('laporan-pdf');
            }
        }

        $pdf = PDF::loadview('laporan_pdf', ['laporan' => $laporan]);
        return $pdf->download('laporan-pdf');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(laporan $laporan)
    {
        //
    }
}
