<?php

namespace App\Http\Controllers;

use App\Instansi;
use Illuminate\Http\Request;

class InstansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instansi = Instansi::get();
        return view('instansi.index', ['dataInstansi' => $instansi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instansi.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
        Instansi::create([
            'name' => $request->name,
            'slug' => \Str::slug($request->name)
        ]);
        return redirect()->route('instansi.index')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Instansi $instansi)
    {
        return view('instansi.edit', compact('instansi'));
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
        $this->validation($request);
        Instansi::where('id', $id)->update([
            'name' => $request->name,
            'slug' => \Str::slug($request->name)
        ]);
        return redirect()->route('instansi.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Instansi::destroy($id);
        return redirect()->route('instansi.index')->with('success', 'Data berhasil dihapus');
    }

    private function validation(Request $request)
    {
        $validation = $request->validate(
            [
                'name' => 'required|max:75'
            ],
            [
                'name.required' => 'Data tidak boleh kosong, harap diisi',
                'name.max' => 'Maksimal 75 karakter',
            ]
        );
    }
}
