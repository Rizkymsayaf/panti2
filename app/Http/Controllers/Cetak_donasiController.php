<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasi;
class Cetak_donasiController extends Controller
{
    public function index()
    {
        $donasi = Donasi::all();
        return view('dashboard.laporan.cetak_donasi', compact('donasi'));
    }


}
