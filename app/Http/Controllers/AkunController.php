<?php

namespace App\Http\Controllers;

use App\Models\akun;
use App\Models\role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        $roles = role::all();
        return view('tambah-akun', compact('roles'));
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
                'roles_id' => 'required',
                'nama' => 'required',
                'jabatan' => 'required',
                'telepon' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required|string',
            ],
            [
                'roles_id.required' => 'Pilih',
                'nama.required' => 'Tidak Boleh Kosong',
                'jabatan.required' => 'Tidak Boleh Kosong',
                'telepon.required' => 'Tidak Boleh Kosong',
                'email.unique' => 'Email sudah ada',
                'email.required' => 'Tidak Boleh Kosong',
                'password.required' => 'Tidak Boleh Kosong',
            ]
        );

        akun::create([
            "roles_id" => $request['roles_id'],
            "nama" => $request['nama'],
            "jabatan" => $request['jabatan'],
            "telepon" => $request['telepon'],
            "email" => $request['email'],
            "password" => Hash::make($request['password']),
        ]);

        return redirect('kelola-akun');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function show(akun $akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $roles = role::all();
        $akun = akun::where('id', $id)->first();
        return view('ubah-data-akun', compact('roles', 'akun'));
    }

    // public function edit_pwd($id)
    // {
    //     $akun = akun::where('id', $id)->first();
    //     return view('ubah-password', compact('akun'));

    //     $roles = role::all();
    //     $akun = akun::where('id', $id)->first();
    //     return view('ubah-password', compact('roles', 'akun'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'roles_id' => 'required',
                'nama' => 'required',
                'jabatan' => 'required',
                'telepon' => 'required',
                'email' => 'required',
            ],
            [
                'roles_id.required' => 'Pilih',
                'nama.required' => 'Tidak Boleh Kosong',
                'jabatan.required' => 'Tidak Boleh Kosong',
                'telepon.required' => 'Tidak Boleh Kosong',
                // 'email.unique' => 'Email sudah ada',
                'email.required' => 'Tidak Boleh Kosong',
            ]
        );

        $akun = akun::where('id', $id)->update([
            "roles_id" => $request['roles_id'],
            "nama" => $request['nama'],
            "jabatan" => $request['jabatan'],
            "telepon" => $request['telepon'],
            "email" => $request['email'],
        ]);

        return redirect('kelola-akun');
    }

    // public function update_pwd(Request $request, $id)
    // {
    //     $request->validate(
    //         [
    //             'roles' => 'required',
    //             'nama' => 'required',
    //             'jabatan' => 'required',
    //             'telepon' => 'required',
    //             'email' => 'required|unique',
    //             'password' => 'required|string|confirmed',
    //         ],
    //         [
    //             'roles.required' => 'Pilih',
    //             'nama.required' => 'Tidak Boleh Kosong',
    //             'jabatan.required' => 'Tidak Boleh Kosong',
    //             'telepon.required' => 'Tidak Boleh Kosong',
    //             'email.unique' => 'Email sudah ada',
    //             'email.required' => 'Tidak Boleh Kosong',
    //             'password.required' => 'Tidak Boleh Kosong',
    //             'password.confirmed' => 'Password Tidak Sesuai',
    //         ]
    //     );

    //     $akun = akun::where('id', $id)->update([
    //         "roles" => $request['roles'],
    //         "nama" => $request['nama'],
    //         "jabatan" => $request['jabatan'],
    //         "telepon" => $request['telepon'],
    //         "email" => $request['email'],
    //         "password" => Hash::make($request['password']),
    //     ]);

    //     return redirect('ubah-password');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = akun::where('id', $id)->delete();
        return redirect('kelola-akun');
    }
}
