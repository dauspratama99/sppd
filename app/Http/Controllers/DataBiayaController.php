<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DataBiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'bandara' => DB::table('transportasi_to_bandara')->get(),
            'terminal' => DB::table('transportasi_to_terminal')->get(),
        ];
        return view('halaman_admin.data_biaya.index', $data);
    }

    public function bandara_edit($id)
    {
        $edit = DB::table('transportasi_to_bandara')->where('id', $id)->first();
        return view('halaman_admin.data_biaya.bandara_edit', compact('edit'));
    }

    public function bandara_update(Request $request, $id)
    {
        DB::table('transportasi_to_bandara')->where('id', $id)->update([
            'besaran' => $request->besaran,
        ]);

        Alert::success('Transportasi bendahara', 'Data Berhasil Diedit');
        return redirect()->route('biaya_transportasi');
    }

    public function terminal_edit($id)
    {
        $edit_terminal =  DB::table('transportasi_to_terminal')->where('id', $id)->first();
        return view('halaman_admin.data_biaya.terminal_edit', compact('edit_terminal'));
    }

    public function terminal_update(Request $request, $id)
    {
        DB::table('transportasi_to_terminal')->where('id', $id)->update([
            'besaran' => $request->terminal
        ]);

        Alert::success('Transportasi Terminal', 'Data Berhasil Diedit');
        return redirect()->route('biaya_transportasi');
    }

    public function hotel()
    {
        $hotel = DB::table('biaya_hotel')->get();
        return view('halaman_admin.biaya_hotel.index_hotel', compact('hotel'));
    }

    public function hotel_edit($id)
    {
        $hotel_edit =  DB::table('biaya_hotel')->where('id', $id)->first();
        return view('halaman_admin.biaya_hotel.edit_hotel', compact('hotel_edit'));
    }

    public function hotel_update(Request $request, $id)
    {
        DB::table('biaya_hotel')->where('id', $id)->update([
            'tarif_a' => $request->tarif_a,
            'tarif_b' => $request->tarif_b,
            'tarif_c' => $request->tarif_c,
            'tarif_d' => $request->tarif_d,
            'tarif_e' => $request->tarif_e,
            'tarif_f' => $request->tarif_f
        ]);

        Alert::success('Biaya Hotel', 'Data Berhasil Diedit');
        return redirect()->route('biaya_hotel');
    }
}
