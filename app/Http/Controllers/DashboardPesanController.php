<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Pesan;
use App\Http\Requests\StoreAnakRequest;
use App\Http\Requests\UpdateAnakRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesan = Pesan::all();
        return view('dashboard.pesan.index', compact('pesan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnakRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }



    public function show($id)
    {
        $pesan = Pesan::findOrFail($id);
        return view('dashboard.pesan.show', compact('pesan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function edit(Anak $anak)
    {

    }


    public function update(Request $request, )
    {



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesan $pesan)
    {
        Pesan::destroy($pesan->id);
        return redirect('/dashboard/pesan')->with('success', 'Data Berhasil Dihapus');
    }
}
