<?php

namespace App\Http\Controllers;

use App\Video;
use App\Category;
use App\Instansi;
use App\Tag;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        $video = Video::where('cover', '!=', 'null')->get();
        return view('file.index', ['dataVideo' => $video]);
    }

    public function create()
    {
        return view('file.add', [
            'dataKategori' => Category::all(),
            'dataInstansi' => Instansi::all(),
            'dataTag' => Tag::all(),
        ]);
    }

    public function store(Request $request)
    {
    }

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
    public function edit($id)
    {
    }

    public function update(Request $request)
    {
    }

    public function destroy($id)
    {
    }
}
