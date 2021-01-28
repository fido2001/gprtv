@extends('frontend.app')

@section('content')
<section class="blog_area single_post_area">
    <div class="container">
        <div class="col-lg-9 posts-list">
            <div class="single-post">
                <div class="youtube-area pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="video-items-active">
                            <div class="video-items text-center">
                                    <div class="responsive">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <div id="player-container" class="embed-responsive-item"></div>
                                        </div>
                                    </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog_details">
                <h2>Live Streaming GPR TV</h2>
                {{-- <h3 style="font-size: 15px"><a style="color: black" href="{{ route('show.instansi', $video->instansi->slug) }}">Instansi {{ $video->instansi->name }}</a>
                    <div class="f-right">{{ Carbon\Carbon::parse($video->created_at)->translatedFormat("l, d F Y") }}</div>
                </h3>
                <ul class="blog-info-link mt-3 mb-4">
                    <li>Kategori : <a href="{{ route('show.category', $video->category->slug) }}">{{ $video->category->name }}</a></li>
                    <li>Tags : 
                        @foreach ($video->tags as $tag)
                        <a href="{{ route('show.tag', $tag->slug) }}"> {{ $tag->name }} </a>
                        @endforeach
                    </li>
                    <li><i class="fa fa-user"></i> <span class="text-muted">{{ $video->author->first_name }} {{ $video->author->last_name }}</span></li>
                </ul>
                <p class="excert">
                    {!! nl2br($video->body) !!}
                </p> --}}
            </div>
        </div>
        {{-- <div class="col-lg-3"></div> --}}
    </div>
</section>
@endsection