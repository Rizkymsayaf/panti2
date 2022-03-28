<?php

namespace App\Http\Controllers;
use App\Models\Donasi;
use App\Models\Kebutuhan;

use Illuminate\Http\Request;

class Cetak_kebutuhanController extends Controller
{
    public function index()
    { $donasi = Donasi::all();
    return view('dashboard.laporan.cetak_kebutuhan', ['donasi' => $donasi, 'kebutuhan' => Kebutuhan::all()    ]);
    }
}
