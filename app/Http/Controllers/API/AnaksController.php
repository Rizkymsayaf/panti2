<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Anak;
use Illuminate\Http\Request;
use DB;

class AnaksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anak = Anak::all();

        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'berhasil',
            'data' => $anak,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $anak = Anak::find($id);
            $anak->nama = $request->nama;
            $anak->umur = $request->umur;
            $anak->tanggal_lahir = $request->tanggal_lahir;
            $anak->image = $request->image;
            $anak->save();
            return response()->json([
                'status' => true,
                'code' => 201,
                'message' => 'Data Anak berhasil dibuat',
                'data' => $anak,
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anak = Anak::find($id);
        if ($anak) {
            return response()->json([
                'status' => true,
                'code' => 200,
                'message' => 'Show Data Anak',
                'data' => $anak,
            ]);

        } else {
            return response()->json([
                'status' => false,
                'code' => 404,
                'message' => 'Data Anak Tidak Ditemukan',
                'data' => [],
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $anak = Anak::find($id);
        if ($anak) {
            $anak->nama = $request->nama;
            $anak->umur = $request->umur;
            $anak->tanggal_lahir = $request->tanggal_lahir;
            $anak->image = $request->image;
            $anak->save();
            return response()->json([
                'status' => true,
                'code' => 201,
                'message' => 'Data Anak Berhasil Dibuat',
                'data' => $anak,
            ]);

        } else {
            return response()->json([
                'status' => false,
                'code' => 404,
                'message' => 'Data Anak Tidak Ditemukan',
                'data' => [],
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anak = Anak::find($id);
        if ($anak) {
            $anak->delete();
            return response()->json([
                'status' => true,
                'code' => 200,
                'message' => 'Data anak Berhasil Di hapus',
                'data' => $anak,
            ]);

        } else {
            return response()->json([
                'status' => false,
                'code' => 404,
                'message' => 'Data Anak Tidak Ditemukan',
                'data' => [],
            ]);
        }
    }
}
