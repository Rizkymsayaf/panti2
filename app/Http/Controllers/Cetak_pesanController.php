<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
class Cetak_pesanController extends Controller
{
    public function index()
    {
        $pesan = Pesan::all();
        return view('dashboard.laporan.cetak_pesan', compact('pesan'));
    }



}
