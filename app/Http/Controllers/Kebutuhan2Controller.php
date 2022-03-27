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
    public function create()
    {
        return view('dashboard.kebutuhan.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|max:255',
            'harga_barang' => 'required',
            'jumlah_barang' => 'required',
        ]);


      Kebutuhan::create($validatedData);
      return redirect('dashboard/kebutuhan')->with('success', 'New Post has been added');
    }

    public function show($id)
    {
        $kebutuhan = Kebutuhan::findOrFail($id);
        return view('dashboard.kebutuhan.show', compact('kebutuhan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kebutuhan $kebutuhan)
    {
        return view('dashboard.donasi.edit', [
            'k' => $kebutuhan,
            'donasis' => Kebutuhan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKebutuhanRequest  $request
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kebutuhan $kebutuhan)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'harga_barang' => 'required',
            'jumlah_barang' => 'required',
        ]);


        Kebutuhan::where('id', $kebutuhan->id)
        -> update($validatedData);
      return redirect('dashboard/kebutuhan')->with('success', 'New Post has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kebutuhan  $kebutuhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kebutuhan $kebutuhan)
    {
        Kebutuhan::destroy($kebutuhan->id);
        return redirect('/dashboard/kebutuhan')->with('success', 'Post has been deleted');
    }
}
