<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Galery;
use App\Http\Requests\StoreAnakRequest;
use App\Http\Requests\UpdateAnakRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Galery2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galery = Galery::all();
        return view('galery.index', compact('galery'));
    }
    public function show($id)
    {
        $galery = Galery::findOrFail($id);
        return view('galery.show', compact('galery'));
    }
}
