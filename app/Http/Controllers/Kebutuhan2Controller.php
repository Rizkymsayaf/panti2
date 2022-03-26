<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Kebutuhan;

use App\Http\Requests\StoreKebutuhanRequest;
use App\Http\Requests\UpdateKebutuhanRequest;
use Illuminate\Http\Request;
// use App\kebutuhan;

class Kebutuhan2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $donasi = Donasi::all();
    return view('dashboard.kebutuhan.index', ['donasi' => $donasi, 'kebutuhan' => Kebutuhan::all()    ]);
    }
}
