<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipeUserController extends Controller
{
    public function index(){
      $data['tipe_user'] = DB::table('tipe_user')->get();

      return view('halaman_admin.tipe_user.index', $data);
    }


}
