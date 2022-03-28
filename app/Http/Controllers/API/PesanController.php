<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pesan;
use Illuminate\Http\Request;
use DB;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesan = Pesan::all();

        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'berhasil',
            'data' => $pesan,
        ]);

    }
}
