<?php

namespace App\Http\Controllers;

use App\Category;
use App\Instansi;
use App\User;
use App\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        $kategori = count(Category::get());
        $pengguna = count(User::where('level', 'user')->get());
        $video = count(Video::get());
        $instansi = count(Instansi::get());
        return view('admin.index', compact('kategori', 'pengguna', 'video', 'instansi'));
    }

    public function thumbnail()
    {
        return view('video.thumbnail');
    }

    public function link_yt()
    {
        return view('video.link_yt');
    }
}
