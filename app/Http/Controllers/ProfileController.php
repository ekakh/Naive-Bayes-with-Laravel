<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = profile::all();
        return view('profile', compact(
            'profile'
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = profile::where('id', $id)->first();
        return view('ubah-profile', compact('profile'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [

                'nama' => 'required',
                'jabatan' => 'required',
                'telepon' => 'required',
                'email' => 'required',

            ],
            [
                'nama.required' => 'Tidak Boleh Kosong',
                'jabatan.required' => 'Tidak Boleh Kosong',
                'telepon.required' => 'Tidak Boleh Kosong',
                'email.required' => 'Tidak Boleh Kosong',
            ]
        );

        $profile = profile::where('id', $id)->update([
            "nama" => $request['nama'],
            "jabatan" => $request['jabatan'],
            "telepon" => $request['telepon'],
            "email" => $request['email'],
        ]);

        return redirect('profile');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(profile $profile)
    {
        //
    }
}
