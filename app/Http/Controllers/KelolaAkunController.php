<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class KelolaAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['index'] = DB::table('users')
        ->leftJoin('tipe_user', 'users.id_tipe', '=', 'tipe_user.id_tipe')
        ->get();
        return view('halaman_admin.kelola_akun.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data['tipe_user'] = DB::table('tipe_user')->get();

        return view('halaman_admin.kelola_akun.tambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store =  new User;
        $store->nama = $request->nama;
        $store->username = $request->username;
        $store->password = Hash::make($request->password);
        $store->alamat = $request->alamat;
        $store->nomor_hp = $request->nomor_hp;
        $store->status = $request->status;
        $store->id_tipe = $request->id_tipe;
        $store->save();

        Alert::success('Data Berhasil', 'Data Berhasil ditambahkan');
        return redirect()->route('kelola_akun');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = User::find($id);
        return view('halaman_admin.kelola_akun.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = User::find($request->id);

        $update->nama = $request->nama;
        $update->username = $request->username;
        $update->alamat = $request->alamat;
        $update->nomor_hp = $request->nomor_hp;
        $update->status = $request->status;
        $update->save();

        Alert::success('Data Berhasil', 'Data Berhasil diedit');
        return redirect()->route('kelola_akun');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::find($id);

        $delete->delete();

        Alert::success('Data Berhasil', 'Data Berhasil dihapus');
        return redirect()->route('kelola_akun');
    }
}
