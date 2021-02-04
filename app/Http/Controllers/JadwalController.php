<?php

namespace App\Http\Controllers;

use App\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        return view('jadwal.index', ['dataJadwal' => Jadwal::get()]);
    }

    public function create()
    {
        return view('jadwal.add');
    }

    public function store(Request $request)
    {
        $this->validation($request);
        Jadwal::create([
            'hari' => $request->hari,
            'acara' => $request->acara,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai,
        ]);
        return redirect()->route('jadwal.index')->with('success', 'Data berhasil ditambah');
    }

    public function show($id)
    {
        //
    }

    public function edit(Jadwal $jadwal)
    {
        return view('jadwal.edit', compact('jadwal'));
    }

    public function update(Request $request, $id)
    {
        $this->validation($request);
        Jadwal::where('id', $id)->update([
            'hari' => $request->hari,
            'acara' => $request->acara,
            'mulai' => $request->mulai,
            'selesai' => $request->selesai
        ]);
        return redirect()->route('jadwal.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        Jadwal::destroy($id);
        return redirect()->route('jadwal.index')->with('success', 'Data berhasil dihapus');
    }

    private function validation(Request $request)
    {
        $validation = $request->validate(
            [
                'acara' => 'required|max:30',
                'hari' => 'required',
                'mulai' => 'required',
                'selesai' => 'required',
            ],
            [
                'acara.required' => 'Data tidak boleh kosong, harap diisi',
                'hari.required' => 'Data tidak boleh kosong, harap diisi',
                'mulai.required' => 'Data tidak boleh kosong, harap diisi',
                'selesai.required' => 'Data tidak boleh kosong, harap diisi',
                'acara.max' => 'Maksimal 30 karakter',
            ]
        );
    }
}
