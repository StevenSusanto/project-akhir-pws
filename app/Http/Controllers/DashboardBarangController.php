<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.barang.index',[
            'barang'=> Barang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.barang.create',[
            'categories'=> Category::all()
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
        $validatedData = $request->validate([
            'article'=>'required|max:255',
            'slug'=>'required',
            'category_id'=>'required',
            'varians'=>'required'
        ]);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->varians), 100);

        Barang::create($validatedData);

        return redirect('/dashboard/barang')->with('sukses', 'Berita Baru Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barum)
    {
        return view('dashboard.barang.show',[
            'barang'=> $barum
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barum)
    {
        return view('dashboard.barang.edit', [
            'barang'=> $barum,
            'categories'=> Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barum)
    {
        $rules = [
            'article' => 'required|max:255',
            'category_id' => 'required',
            'varians' => 'required'
        ];
        
        if($request->slug != $barum->slug){
            $rules['slug']='required|unique:beritas';
        }
        $validatedData = $request->validate($rules);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->varians), 100);
        
        Barang::where('id', $barum->id)
            ->update($validatedData);

        return redirect('/dashboard/barang')->with('sukses', 'Berita Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barum)
    {
        Barang::destroy($barum->id);

        return redirect('/dashboard/barang')->with('sukses', 'Data Berita Berhasil Dihapus!');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Barang::class, 'slug', $request->article);

        return response()->json(['slug'=>$slug]);
    }
}
