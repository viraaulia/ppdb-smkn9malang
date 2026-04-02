<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Sekolah;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $data = [
            'sekolahs'=> Sekolah::paginate(10),
            ];
        return view('admin.pages.sekolah.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_sekolah' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
            'alamat' => 'required'
        ]);

        Sekolah::create($request->all());
        return to_route('sekolah.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $sekolah = Sekolah::find($id);
        return view('admin.pages.sekolah.edit', compact('sekolah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama_sekolah' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
            'alamat' => 'required'
        ]);

        $sekolah = Sekolah::findOrFail($id);
        $sekolah->update($request->all());

        return to_route('sekolah.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $sekolah = Sekolah::find($id);
        $sekolah->delete();

        return to_route('sekolah.index');
    }
}
