<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Galery;
use App\Http\Requests\StoreAnakRequest;
use App\Http\Requests\UpdateAnakRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galery = Galery::all();
        return view('dashboard.galery.index', compact('galery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.galery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnakRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:30000',
        ]);

      if($request->file('image')){
        $validatedData['image'] = $request->file('image')->store('galery-images', ['disk' => 'local']);
    }

      Galery::create($validatedData);
      return redirect('dashboard/galery')->with('success', 'Data Baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galery = Galery::findOrFail($id);
        return view('dashboard.galery.show', compact('galery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        return view('dashboard.anak.edit', [
            'g' => $galery,
            'galerys' => Galery::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnakRequest  $request
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galery $galery)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:30000',
        ]);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('galery-images', ['disk' => 'local']);
        }

        Galery::where('id', $galery->id)
        -> update($validatedData);
      return redirect('dashboard/galery')->with('success', 'data baru berhasil ditambahkan');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {
        if($galery->image){
            Storage::delete($galery->image);
        }
        Galery::destroy($galery->id);
        return redirect('/dashboard/galery')->with('success', 'data berhasil dihapus');
    }
}
