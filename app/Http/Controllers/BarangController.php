<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use PDF;

class BarangController extends Controller
{
    public function index(){
        $barangs = Barang::latest()->with('category')->filter(request(['search','category','price']))->paginate(9);
        return view('barang.index',[
            'barangs' => $barangs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()

    {

        return view('barang.create',[
            'categories' => Category::with('barang')->get(), 
        ]);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validate = $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'foto' => 'required',
            'keterangan' => 'required',
        ]);
        $validate['category_id'] = $request->category_id;
        $validate['slug'] = Str::of($request->nama_barang)->slug('-');

        $validate['foto'] = $request->file('foto')->getClientOriginalName();
        $request->file('foto')->storePubliclyAs('image',$request->file('foto')->getClientOriginalName(),'public');
        Barang::create($validate);

        return redirect()->route('barang.index')
                        ->with('success','Gedung created successfully.');
    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */

    public function show(Barang $barang)

    {

        // return view('barang.show',compact('barang'));

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */

    public function edit(Barang $barang)

    {

        return view('barang.edit',[
            'barang' => $barang,
            'categories' => Category::with('barang')->get(),
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, barang $barang)
    {
        $validate = $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'keterangan' => 'required',
        ]);

        
        $validate['category_id'] = $request->category_id;
        $validate['slug'] = Str::of($request->nama_barang)->slug('-');
        if(isset($request->foto)){
            $validate['foto'] = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storePubliclyAs('image',$request->file('foto')->getClientOriginalName(),'public');
        }else{
            $validate['foto'] = $barang->foto;
        }
        $barang->update($validate);

        return redirect()->route('barang.index')->with('success','barang updated successfully');

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */

    public function destroy(Barang $barang)
    {
        if(Storage::exists('public/image/'.$barang->foto)){
            Storage::delete('public/image/'.$barang->foto);
          }else{
            dd('File not found.');
        }
        Barang::destroy($barang->id);
        return redirect()->route('barang.index')->with('success','barang deleted successfully');
    }

    public function exportpdf(){
        $data = barang::all();
        view()->share('data',$data);
        $pdf = PDF::loadview('databarang-pdf');
        return $pdf->download('data.pdf');
    }
}