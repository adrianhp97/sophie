<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Kategori;
use App\KategoriBarang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Barang::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Barang::firstOrCreate($request->all());
    }

    public function store_image(Request $request)
    {
        if ($request->hasFile('image_file')) {
            $extension = $request->image_file->getClientOriginalExtension();
            $dir = public_path('img') . '/barang';
            $filename = $request->get('kode_produksi') . '.' . $extension;
            $request->image_file->move($dir, $filename);
            // return $request;
            return 'success';
        } else {
            return 'false';
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $bar = Barang::find($barang);
        return $bar->delete();
    }
}
