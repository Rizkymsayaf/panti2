<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anak;
class Cetak_anakController extends Controller
{
    public function index()
    {
        $anak = Anak::all();
        return view('dashboard.laporan.cetak_anak', compact('anak'));
    }

    public function cetakForm(){
        return view('dashboard.laporan.cetak_anaktanggal');
    }

}
