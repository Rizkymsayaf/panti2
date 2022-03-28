<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Donasi;
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
        $donasi = Donasi::all();

        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'berhasil',
            'data' => $donasi,
        ]);

    }
}
