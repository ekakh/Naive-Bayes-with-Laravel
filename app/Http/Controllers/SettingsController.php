<?php

namespace App\Http\Controllers;

use App\Models\settings;
use App\Models\settingss;
use App\Models\User;
use App\Models\akun;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'settings'
        );
    }

    public function update_password()
    {
        $user = User::all();
        return view('ubah-password', compact(
            'user'
        ));
    }
    public function kelola()
    {
        $akun = akun::all();
        return view('kelola-akun', compact(
            'akun'
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
     * @param  \App\Models\settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function show(settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('ubah-password', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'password' => 'required|string|confirmed',
            ],
            [

                'password.required' => 'Tidak Boleh Kosong',
                'password.confirmed' => 'Password Tidak Sesuai',
            ]
        );

        $user = User::where('id', $id)->update([
            "password" => Hash::make($request['password']),
        ]);

        return redirect('settings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function destroy(settings $settings)
    {
        //
    }
}
