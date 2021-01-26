<?php

namespace App\Http\Controllers;

use App\Category;
use App\Instansi;
use App\Tag;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = Video::get();
        return view('video.index', ['dataVideo' => $video]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('video.add', [
            'dataKategori' => Category::all(),
            'dataInstansi' => Instansi::all(),
            'dataTag' => Tag::all(),
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
        $this->validation($request);

        $attr = $request->all();

        if ($request->file('cover')) {
            $fileType = $request->file('cover')->extension();
            $name = \Str::random(8) . '.' . $fileType;
            $new_cover = Storage::putFileAs('cover', $request->file('cover'), $name);
        }
        $attr['thumbnail'] = $new_cover;

        if ($request->file('file_video')) {
            $videoType = $request->file('file_video')->extension();
            $video = \Str::random(8) . '.' . $videoType;
            $new_video = Storage::putFileAs('video', $request->file('file_video'), $video);
        }
        $attr['link_file'] = $new_video;

        $slug = \Str::slug($request->title);
        $attr['slug'] = $slug;
        $attr['category_id'] = $request->category_id;
        $attr['instansi_id'] = $request->instansi_id;
        $video = auth()->user()->videos()->create($attr);
        $video->tags()->attach($request->tags);

        return redirect()->route('video.index')->with('success', 'Data berhasil ditambah');
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
    public function edit(Video $video)
    {
        return view('video.edit', [
            'video' => $video,
            'dataKategori' => Category::get(),
            'dataTag' => Tag::get(),
            'dataInstansi' => Instansi::get()
        ]);
        // dd($video);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $request->validate(
            [
                'title' => 'required|max:100',
                'cover' => 'mimes:jpeg,png,jpg,svg|max:2048',
                'file_video' => 'mimes:mp4|max:100000',
                'body' => 'required',
                'category_id' => 'required',
                'instansi_id' => 'required',
                'tags' => 'required'
            ],
            [
                'title.required' => 'Data tidak boleh kosong, harap diisi',
                'body.required' => 'Data tidak boleh kosong, harap diisi',
                'category_id.required' => 'Data tidak boleh kosong, harap diisi',
                'instansi_id.required' => 'Data tidak boleh kosong, harap diisi',
                'tags.required' => 'Data tidak boleh kosong, harap diisi',
                'title.max' => 'Maksimal 100 Karakter',
                'cover.max' => 'Maksimal 2 Mb',
                'cover.mimes' => 'Hanya dapat menerima file jpeg, png, jpg, svg',
                'file_video.mimes' => 'Hanya dapat menerima file mp4',
            ]
        );

        if ($request->file('cover')) {
            $fileType = $request->file('cover')->extension();
            $name = \Str::random(8) . '.' . $fileType;

            Storage::delete($video->cover);
            $new_cover = Storage::putFileAs('cover', $request->file('cover'), $name);
        } else {
            $new_cover = $video->thumbnail;
        }

        if ($request->file('file_video')) {
            $videoType = $request->file('file_video')->extension();
            $file_video = \Str::random(8) . '.' . $fileType;

            Storage::delete($video->link_file);
            $new_video = Storage::putFileAs('video', $request->file('file_video'), $file_video);
        } else {
            $new_video = $video->link_file;
        }

        $attr = $request->all();
        $attr['thumbnail'] = $new_cover;
        $attr['link_file'] = $new_video;
        $attr['category_id'] = request('category_id');
        $attr['instansi_id'] = request('instansi_id');
        $attr['user_id'] = auth()->id();

        $video->update($attr);
        $video->tags()->sync(request('tags'));

        return redirect()->route('video.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Video::destroy($id);
        return redirect()->route('video.index')->with('success', 'Data berhasil dihapus');
    }

    private function validation(Request $request)
    {
        $validation = $request->validate(
            [
                'title' => 'required|max:100',
                'thumbnail' => 'max:100',
                'link_youtube' => 'max:100',
                'body' => 'required',
                'category_id' => 'required',
                'instansi_id' => 'required',
                'tags' => 'required'
            ],
            [
                'title.required' => 'Data tidak boleh kosong, harap diisi',
                'body.required' => 'Data tidak boleh kosong, harap diisi',
                'category_id.required' => 'Data tidak boleh kosong, harap diisi',
                'instansi_id.required' => 'Data tidak boleh kosong, harap diisi',
                'tags.required' => 'Data tidak boleh kosong, harap diisi',
                'title.max' => 'Maksimal 100 Karakter',
                'thumbnail.max' => 'Maksimal 100 Karakter',
                'link_youtube.max' => 'Maksimal 100 Karakter',
            ]
        );
    }
}
