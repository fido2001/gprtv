<?php

namespace App\Http\Controllers;

use App\Category;
use App\Headline;
use App\Instansi;
use App\Jadwal;
use App\Tag;
use App\Tayang;
use App\Video;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home', [
            'videoTerbaru' => Video::latest()->take(1)->get(),
            'videoTerbaruBawah' => Video::latest()->take(3)->get(),
            'videoTerbaruKanan' => Video::where('category_id', '1')->latest()->take(5)->get(),
            'filmPendek' => Video::where('category_id', '7')->latest()->take(4)->get(),
            'videoKominfo' => Video::where('instansi_id', '2')->latest()->take(5)->get(),
            'videoDrama' => Video::where('category_id', '6')->latest()->take(5)->get(),
            'dramaCaption' => Video::where('category_id', '6')->latest()->take(1)->get(),
            'videoBerita' => Video::where('category_id', '8')->latest()->take(5)->get(),
            'dataKategori' => Category::get(),
            'jadwalSenin' => Jadwal::where('hari', 'Senin')->get(),
            'jadwalSelasa' => Jadwal::where('hari', 'Selasa')->get(),
            'jadwalRabu' => Jadwal::where('hari', 'Rabu')->get(),
            'jadwalKamis' => Jadwal::where('hari', 'Kamis')->get(),
            'jadwalJumat' => Jadwal::where('hari', 'Jumat')->get(),
            'jadwalSabtu' => Jadwal::where('hari', 'Sabtu')->get(),
            'jadwalMinggu' => Jadwal::where('hari', 'Minggu')->get(),
            'jadwalTayang' => Tayang::get(),
            'dataHeadline' => Headline::get()
        ]);
    }

    public function allVideo()
    {
        return view('video.all', [
            'dataTag' => Tag::get(),
            'dataKategori' => Category::get(),
            'allvideos' => Video::latest()->take(4)->get(),
            'videos' => Video::latest()->paginate(4)
        ]);
    }

    public function showVideo(Video $video)
    {
        $videos = Video::where('category_id', $video->category_id)->latest()->limit(5)->get();
        $dataKategori = Category::get();
        return view('video.show', compact('video', 'videos', 'dataKategori'));
    }

    public function showCategory(Category $category)
    {
        $videos = $category->videos()->latest()->paginate(5);
        $allvideos = Video::latest()->take(4)->get();
        $dataKategori = Category::get();
        $dataTag = Tag::get();
        return view('video.all', compact('allvideos', 'videos', 'category', 'dataKategori', 'dataTag'));
    }

    public function showTag(Tag $tag)
    {
        $videos = $tag->videos()->latest()->paginate(5);
        $allvideos = Video::latest()->take(4)->get();
        $dataKategori = Category::get();
        $dataTag = Tag::get();
        return view('video.all', compact('allvideos', 'videos', 'tag', 'dataKategori', 'dataTag'));
    }

    public function showInstansi(Instansi $instansi)
    {
        $videos = $instansi->videos()->latest()->paginate(5);
        $allvideos = Video::latest()->take(4)->get();
        $dataKategori = Category::get();
        $dataTag = Tag::get();
        return view('video.all', compact('allvideos', 'videos', 'instansi', 'dataKategori', 'dataTag'));
    }

    public function search()
    {
        $query = request('q');

        $allvideos = Video::latest()->take(4)->get();
        $dataKategori = Category::get();
        $dataTag = Tag::get();
        $videos = Video::where("title", "like", "%$query%")->latest()->paginate(4);
        return view('video.all', compact('allvideos', 'videos', 'dataKategori', 'dataTag', 'query'));
    }

    public function aboutus()
    {
        return view('frontend.about', [
            'dataKategori' => Category::get()
        ]);
    }

    public function live()
    {
        return view('video.live', [
            'dataKategori' => Category::get(),
            'jadwalTayang' => Tayang::get()
        ]);
    }

    public function jadwal()
    {
        return view('frontend.jadwal', [
            'dataKategori' => Category::get(),
            'jadwalSenin' => Jadwal::where('hari', 'Senin')->get(),
            'jadwalSelasa' => Jadwal::where('hari', 'Selasa')->get(),
            'jadwalRabu' => Jadwal::where('hari', 'Rabu')->get(),
            'jadwalKamis' => Jadwal::where('hari', 'Kamis')->get(),
            'jadwalJumat' => Jadwal::where('hari', 'Jumat')->get(),
            'jadwalSabtu' => Jadwal::where('hari', 'Sabtu')->get(),
            'jadwalMinggu' => Jadwal::where('hari', 'Minggu')->get(),
        ]);
    }
}
