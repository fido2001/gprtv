<?php

namespace App\Http\Controllers;

use App\Tayang;
use Illuminate\Http\Request;

class TayangController extends Controller
{
    public function index()
    {
        return view('tayang.index', ['datatayang' => Tayang::get()]);
    }

    public function create()
    {
        return view('tayang.add');
    }

    public function store(Request $request)
    {
        $this->validation($request);
        Tayang::create([
            'acara' => $request->acara,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
        ]);
        return redirect()->route('tayang.index')->with('success', 'Data berhasil ditambah');
    }

    public function show($id)
    {
        //
    }

    public function edit(Tayang $tayang)
    {
        return view('tayang.edit', compact('tayang'));
    }

    public function update(Request $request, $id)
    {
        $this->validation($request);
        Tayang::where('id', $id)->update([
            'acara' => $request->acara,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai
        ]);
        return redirect()->route('tayang.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        Tayang::destroy($id);
        return redirect()->route('tayang.index')->with('success', 'Data berhasil dihapus');
    }

    private function validation(Request $request)
    {
        $validation = $request->validate(
            [
                'acara' => 'required|max:75',
                'mulai' => 'required',
                'selesai' => 'required',
            ],
            [
                'acara.required' => 'Data tidak boleh kosong, harap diisi',
                'mulai.required' => 'Data tidak boleh kosong, harap diisi',
                'selesai.required' => 'Data tidak boleh kosong, harap diisi',
                'acara.max' => 'Maksimal 75 karakter',
            ]
        );
    }
}
