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
                        <h2 class="card-title">
                            Filter
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">   
                    <div class="grid">
                        @foreach ($notes as $noteKey=>$note)
                            <div class="grid-item">
                                <div class="card" data-difficulty="{{ $note->difficulty }}">
                                    <div class="card__content">
                                        <div class="content__header">
                                            <div class="header__left">
                                                <div class="l-header__container">
                                                    @for ( $i = 0 ; $i < 3 ; $i++ )
                                                        @if ($i === 0)
                                                        <div class="fighter">
                                                            <img src="{{ asset('/storage'. $note->fighters[$i]->image_path ) }}" alt="{{ $note->fighters[$i]->name }}">
                                                        </div>
                                                        <div class="assist">
                                                        @elseif(!empty($note->fighters[$i]) )
                                                            <div class="assist__container --a{{ $i }}">
                                                                <img src="{{ asset('/storage'. $note->fighters[$i]->image_path ) }}" alt="{{ $note->fighters[$i]->name }}">
                                                               
                                                                @foreach ( config('enum.assists') as $key=>$assist )
                                                                @if($note->assistOne == $key)
                                                                <div class="assist__move --{{ $assist }}">
                                                                    <span>
                                                                        {{ $assist }}
                                                                    </span>
                                                                </div>
                                                                @endif
                                                                @endforeach
                                                                
                                                            </div>
                                                        @endif
                                                    @endfor
                                                        </div>

                                                </div>
                                            </div>
                                            <div class="header__right">
                                                <div class="r-header__container">
                                                    <div class="categories">
                                                        <div class="categories__list">
                                                            @foreach ($note->categories as $category)  
                                                            <div class="categories__el">
                                                                {{ $category->name }}
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="damage">
                                                        <span class="damage__value">
                                                            {{ $note->damage }} 
                                                        </span>
                                                        <span class="damage__unit">
                                                            Damage
                                                        </span>
                                                    </div>
                                                    <div class="ki">
                                                        <div class="ki__el --begin">
                                                            <div class="ki__indicator">
                                                                At start
                                                            </div>
                                                            <div class="ki__value">
                                                                <span>
                                                                    {{ $note->ki_start }} ki
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="ki__el --end">
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
                                        <div class="content__body">
                                            <div class="body__title">
                                                <H3 class="title --note">
                                                    {{ $note->name }}
                                                </H3>
                                                @if (!empty($note->youtube_url))
                                                    <button type="button" class="btn btn-primary --vod">
                                                        <svg class="icon icon-play">
                                                            <use xlink:href="#icon-play"></use>
                                                        </svg>
                                                    </button>
                                                @endif
                                                
                                            </div>
                                            <div class="body__main">
                                                <div class="notation">
                                                    
                                                    @php 
                                                        $array = json_decode($note->notations);
                                                        //var_dump($array->inputs);
                                                    @endphp
                                                    @foreach ($array->inputs as $input)
                                                        {{-- $input --}}
                                                        
                                                            @if (str_contains($input,'x'))
                                                               <span class="input --txt">
                                                                    {{ $input }}  
                                                                </span> 
                                                            @else
                                                            <img class="input --{{ $input }} --img" 
                                                                src="{{ asset('/storage/images/buttons/'. $input.'.png' ) }}" 
                                                                alt="{{ $input }} button">
                                                            @endif
                                                            
                                                       
                                                        
                                                    @endforeach
                                                    {{-- $note->notations --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content__footer">
                                            <div class="footer__left">
                                                <div class="l-footer__container">
                                                    <div class="user">
                                                        <!--<img src="#" alt="User">-->
                                                        <div class="user__info">
                                                            <span>
                                                                {{ $note->user->name }}
                                                            </span>
                                                            <span>
                                                                {{ date("d / m / y", strtotime($note->created_at)) }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="footer__right">
                                                <div class="r-footer__container">
                                                    <div class="interactions">
                                                        <div class="interactions__favorites">
                                                            <svg class="icon icon-favorite">
                                                                <use xlink:href="#icon-favorite"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="interactions__likes">
                                                            <svg class="icon icon-like">
                                                                <use xlink:href="#icon-like"></use>
                                                            </svg>
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
                                @if (!empty($note->youtube_url))
                                <div class="card --vod hide">
                                    <div class="card__content --vod">
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
                                @endif
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
    <!--<script src="{{-- URL('/js/render.js') --}}"></script>
@endsection