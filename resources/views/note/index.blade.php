@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1 class="text-hide">
                Combo NoteZ
            </h1>
            @if(session()->has('message'))
                <div class="alert alert-success mb-3" role="alert">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="card-title">
                                Filter
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">   
                    <div class="grid">
                        @foreach ($notes as $note)
                            <div class="grid-item">
                                <div class="card">
                                    <div class="card __content">
                                        <div class="content __header">
                                            <div class="header __left">
                                                <div class="l-header __container">

                                                    <div class="fighter">
                                                        <img src="{{ asset('/storage'. $note->fighters[0]->image_path ) }}" alt="{{ $note->fighters[0]->name }}">
                                                    </div>
                                                    <div class="assist">
                                                        <div class="assist __container --one">
                                                            <img src="{{ asset('/storage'. $note->fighters[1]->image_path ) }}" alt="{{ $note->fighters[1]->name }}">
                                                            <div class="assist __move --{{ $note->assistOne }}">
                                                                <span>
                                                                    {{ $note->assistOne }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="assist __container --two">
                                                            <img src="{{ asset('/storage/'. $note->fighters[2]->image_path ) }}" alt="{{ $note->fighters[2]->name }}">
                                                            <div class="assist __move --{{ $note->assistTwo }}">
                                                                <span>
                                                                    {{ $note->assistTwo }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="header __right">
                                                <div class="r-header __container">
                                                    <div class="categories">
                                                        @foreach ($note->categories as $category)  
                                                        <div class="categories __el">
                                                            {{ $category->name }}
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="damage">
                                                        <span class="damage __value">
                                                            {{ $note->damage }} 
                                                        </span>
                                                        <span class="damage __unit">
                                                            damage
                                                        </span>
                                                    </div>
                                                    <div class="ki">
                                                        <div class="ki__begin">
                                                            <div class="ki__indicator">
                                                                At start
                                                            </div>
                                                            <div class="ki__value">
                                                                <span>
                                                                    {{ $note->ki_start }} ki
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="ki__end">
                                                            <div class="ki__indicator">
                                                                At end
                                                            </div>
                                                            <div class="ki__value">
                                                                <span>
                                                                    {{ $note->ki_end }} ki
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content __body">
                                            <div class="body __title">
                                                <H3 class="title --note">
                                                    {{ $note->name }}
                                                </H3>
                                                <button type="button" class="btn btn-primary --vod">
                                                    <svg class="icon icon-play">
                                                        <use xlink:href="#icon-play"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="body __main">
                                                <div class="notation">
                                                    <div>
                                                        <span>
                                                            2x
                                                        </span>
                                                        <img src="{{ asset('/storage/images/buttons/L.png') }}" alt="L">
                                                        <span>
                                                            2x
                                                        </span>
                                                        <img src="{{ asset('/storage/images/buttons/M.png') }}" alt="M">
                                                        <span>
                                                            3x
                                                        </span>
                                                        <img src="{{ asset('/storage/images/buttons/H.png') }}" alt="H">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content __footer">
                                            <div class="footer __left">
                                                <div class="l-footer __container">
                                                    <div class="user">
                                                        <img src="#" alt="User">
                                                        <div>
                                                            <span>
                                                                {{ $note->user->name }}
                                                            </span>
                                                            <span>
                                                                {{ date("m / d / y", strtotime($note->created_at)) }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="footer __right">
                                                <div class="r-footer __container">
                                                    <div class="interactions">
                                                        <div class="interactions__favorites">
                                                            
                                                        </div>
                                                        <div class="interactions__likes">
                                                            
                                                        </div>
                                                        @if (isset(Auth::user()->id) && Auth::user()->id == $note->user_id)
                                                        <div class="interactions__update">
                                                            <div class="update__toggler">
                                                                <svg class="icon icon-more">
                                                                    <use xlink:href="#icon-more"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="update__menu hide">
                                                                <div class="menu__edit">
                                                                    <a href="/note/{{ $note->id }}/edit" class="text-uppercase d-block btn card-link">
                                                                        <svg class="icon icon-edit">
                                                                            <use xlink:href="#icon-edit"></use>
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                                <div class="menu__delete">
                                                                    <form
                                                                        action="/note/{{ $note->id }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="text-uppercase btn" type="submit">
                                                                            <svg class="icon icon-delete">
                                                                                <use xlink:href="#icon-delete"></use>
                                                                            </svg>
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card --vod hide">
                                    <div class="card __content --vod">
                                        <iframe 
                                            class="vod"
                                            src="{{ url($note->youtube_url) }}" 
                                            title="YouTube video player"  
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                            allowfullscreen
                                        ></iframe>
                                        <button class="btn-close --vod" aria-label="Close" >
                                            <svg class="icon icon-close">
                                                <use xlink:href="#icon-close"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="page-load-status">
                        <div class="loader-ellips infinite-scroll-request">
                          <span class="loader-ellips__dot"></span>
                          <span class="loader-ellips__dot"></span>
                          <span class="loader-ellips__dot"></span>
                          <span class="loader-ellips__dot"></span>
                        </div>
                        <p class="infinite-scroll-last text-md-center">You have seen all notes, create some more!</p>
                        <p class="infinite-scroll-error text-md-center">No more pages to load</p>
                      </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('cdn')
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
    <script src="{{ URL('/js/masonry.js') }}"></script>
    <script src="{{ URL('/js/vod.js') }}"></script>
@endsection