@extends('layouts.app')

@section('content')
    <section>
        <div class="guide">
            <a href="{{ url('/guide') }}" class="btn --guide">
                <svg class="icon icon-info">
                    <use xlink:href="#icon-info"></use>
                </svg>
            </a>
        </div>
        <div class="container">
            <h1 class="text-hide m-0">
                Combo NoteZ
            </h1>
            @if(session()->has('message'))
                <div class="alert alert-success --notes" role="alert">
                    {{ session()->get('message') }}
                </div>
            @endif
            
            <div class="row">
                <div class="col-12">
                    <div class="card --filter">
                        <div class="filter">
                            <div class="filter__title">
                                <svg class="icon icon-filter">
                                    <use xlink:href="#icon-filter"></use>
                                </svg>
                                <h2 class="title --filter">
                                    Filter
                                </h2>
                            </div>
                            <div class="filter__tabs">
                                <div class="filter__tab">
                                    <h3 class="tab__title title --filter --fighters">
                                        Fighters
                                    </h3>
                                </div>
                                <div class="filter__tab">
                                    <h3 class="tab__title title --filter --assists">
                                        Assists
                                    </h3>
                                </div>
                                <div class="filter__tab">
                                    <h3 class="tab__title title --filter --other">
                                        Other
                                    </h3>
                                </div>
                                <button class="btn --dd">
                                    <svg class="icon icon-drop-down">
                                        <use xlink:href="#icon-drop-down"></use>
                                    </svg>
                                </button>
                            </div>
                            <form class="filter__content" method="GET">
                                @csrf
                                <div class="content__part --fighters" data-visible="false">
                                    <div class="part">
                                       <div class="part__fighters">
                                            @foreach ($fighters as $fighter)
                                            <input type="checkbox" name="fighters[]" id="ff-{{ $fighter->id }}" value="{{ $fighter->id }}">
                                            <label class="fighter" for="ff-{{ $fighter->id }}">
                                                <img src="{{ asset('/storage/'. $fighter->image_path) }}" alt="{{ $fighter->name }}">
                                            </label>
                                            @endforeach
                                            <button type="button" class="btn --fighter">
                                                Clear all
                                            </button>
                                       </div>
                                    </div>    
                                </div>
                                <div class="content__part --assists" data-visible="false">
                                    <div class="part">
                                       <div class="part__assists">
                                            @foreach ($fighters as $fighter)
                                            <div class="assist --filter">
                                                <input type="hidden" name="afs[]" value="{{ $fighter->id }}">
                                                <select class="assist__select --fighter{{ $fighter->id }}" name="assists[]" id="a-{{ $fighter->id }}">
                                                    <option value="">
                                                        -
                                                    </option>
                                                    @foreach ( config('enum.assists') as $key=>$assist)
                                                    <option value="{{ $key }}">
                                                        {{ $assist }}
                                                    </option>
                                                    @endforeach
                                                    <option value="4">
                                                        ∀
                                                    </option>
                                                </select>
                                                <label class="assist__fighter" for="a-{{ $fighter->id }}">
                                                    <img src="{{ asset('/storage/'. $fighter->image_path) }}" alt="{{ $fighter->name }}">
                                                </label>
                                            </div>
                                            @endforeach
                                            <button type="button" class="btn --assist">
                                                Clear all
                                            </button>
                                       </div>
                                    </div> 
                                </div>
                                <div class="content__part --other" data-visible="false">
                                    <div class="part">
                                       <div class="part__other">
                                            <div class="other__filters --creator">
                                                <label class="title --h4" for="creator">
                                                    Creator of Note(s)
                                                </label>
                                                <!-- At the moment I want to use this as Note name search not user name-->
                                                <input type="text" name="creator" id="creator" maxlength="45" placeholder="Search Username"
                                                 value="{{ request('creator') }}">
                                            </div>
                                            <div class="other__filters --categories">
                                                <span class="title --h4">
                                                    Categories
                                                </span>
                                                <div class="categories__list">
                                                    @foreach ($categories as $category)
                                                        @if($category->name != "SPARK")
                                                        <div class="categories__el">
                                                            <input type="checkbox" name="categories[]" id="{{ $category->name }}" value="{{ $category->id }}">
                                                            <label for="{{ $category->name }}" >
                                                                {{ $category->name }}
                                                            </label>
                                                        </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="other__filters --difficulties">
                                                <span class="title --h4">
                                                    Difficulties
                                                </span>
                                                <div class="difficulties__list">
                                                    @foreach (config('enum.difficulties') as $key=>$difficulty)
                                                    <div class="difficulties__el">
                                                        <input type="checkbox" name="difficulties[]" id="{{ $difficulty }}" value="{{ $key }}">
                                                        <label for="{{ $difficulty }}" >
                                                            {{ $difficulty }}
                                                        </label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                       </div>
                                    </div> 
                                </div>
                                <div class="content__part --general" data-visible="false">
                                    <div class="part">
                                       <div class="part__general">
                                            <div class="general__filters --damage">
                                                <div class="damage">
                                                    <div class="damage__slider">
                                                        <div class="slider__header">
                                                            <label for="damageRange" class="form-label">More than</label>
                                                            <span class="header__field">
                                                                <span id="slider_value2" class="value">
                                                                    0
                                                                </span>
                                                                &nbsp;Damage
                                                            </span>
                                                        </div>
                                                        <input type="range" name="damage" class="form-range --damage" value="0" min="0" max="10000" step="100" id="damageRange">
                                                    </div>
                                                    <div class="damage__spark">
                                                        <input type="checkbox" name="spark" id="spark" value="5">
                                                        <label for="spark">
                                                            <svg class="icon icon-blocked">
                                                                <use xlink:href="#icon-blocked"></use>
                                                            </svg>
                                                            <img src="{{ asset('/storage/images/buttons/SPARK.png') }}" alt="SPARK">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="general__filters --classics">
                                                <div class="classics__list">
                                                    <div class="classics__el btn">
                                                        <input type="checkbox" name="classics[]" id="popular" value="1">
                                                        <label for="popular">
                                                            Popular
                                                        </label>
                                                    </div>
                                                    <div class="classics__el btn">
                                                        <input type="checkbox" name="classics[]" id="newest" value="2">
                                                        <label for="newest">
                                                            Oldest
                                                        </label>
                                                    </div>
                                                    <div class="classics__el btn">
                                                        <input type="checkbox" name="classics[]" id="favorites" value="3">
                                                        <label for="favorites">
                                                            Favorites
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">
                                                Apply Filters
                                            </button>
                                       </div>
                                    </div> 
                                </div>
                            </form>
                            <div class="alert alert-primary --notes hide ">
                                <p> 
                                    Register or login to show love to the Sauce. 
                                </p>
                                <button type="button" class="btn-close" aria-label="Close">
                                    <svg class="icon icon-close --light">
                                        <use xlink:href="#icon-close"></use>
                                    </svg>
                                </button>
                                <!-- Added with Js if user tries to like with out being authenticated-->
                            </div>
                        </div>
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
                                                            @if( $i == 1 )
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
                                                            @elseif( $i == 2 )
                                                                <div class="assist__container --a{{ $i }}">
                                                                    <img src="{{ asset('/storage'. $note->fighters[$i]->image_path ) }}" alt="{{ $note->fighters[$i]->name }}">
                                                                
                                                                    @foreach ( config('enum.assists') as $key=>$assist )
                                                                    @if($note->assistTwo == $key)
                                                                    <div class="assist__move --{{ $assist }}">
                                                                        <span>
                                                                            {{ $assist }}
                                                                        </span>
                                                                    </div>
                                                                    @endif
                                                                    @endforeach
                                                                </div>
                                                            @endif
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
                                                <span class="title --note">
                                                    {{ $note->name }}
                                                </span>
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
                                                        {{-- <imgsrc="#"alt="User"> --}}
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
                                                            <form action="{{ route('notes.favorite') }}" class="f-form-js">
                                                                @if(isset(Auth::user()->id))
                                                                <input type="hidden" class="f-user-id-js" value="{{ Auth::user()->id }}">
                                                                @else
                                                                <input type="hidden" class="f-user-id-js" value="null">
                                                                @endif
                                                                <input type="hidden" class="f-note-id-js" value="{{ $note->id }}">
                                                                @if(isset(Auth::user()->id))
                                                                <button type="submit" class="btn --transparent">
                                                                    <svg class="icon icon-favorite {{ $note->isFavoredByAuthUser() ? '--fill' : '' }}">
                                                                        <use xlink:href="#icon-favorite"></use>
                                                                    </svg>
                                                                </button>
                                                                @endif
                                                                @guest
                                                                <svg class="icon icon-favorite disabled">
                                                                    <use xlink:href="#icon-favorite"></use>
                                                                </svg>
                                                                @endguest
                                                                @if(session()->has('message'))
                                                                    <div class="alert alert-primary --f-notes" role="alert">
                                                                        {{ session()->get('message') }}
                                                                    </div>
                                                                @endif
                                                            </form>
                                                        </div>
                                                        <div class="interactions__likes">
                                                            <form action="{{ route('notes.like') }}" class="form-js">
                                                                @if(isset(Auth::user()->id))
                                                                <input type="hidden" class="user-id-js" value="{{ Auth::user()->id }}">
                                                                @else
                                                                <input type="hidden" class="user-id-js" value="null">
                                                                @endif
                                                                <input type="hidden" class="note-id-js" value="{{ $note->id }}">
                                                                @if(isset(Auth::user()->id))
                                                                <button type="submit" class="btn --transparent">
                                                                    <svg class="icon icon-like {{ $note->isLikedByAuthUser() ? '--fill' : '' }}">
                                                                        <use xlink:href="#icon-like"></use>
                                                                    </svg>
                                                                </button>
                                                                <span class="count-js">{{ $note->likes->count() }}</span>
                                                                @endif
                                                                @guest
                                                                <svg class="icon icon-like disabled">
                                                                    <use xlink:href="#icon-like"></use>
                                                                </svg>
                                                                <span class="count-js">{{ $note->likes->count() }}</span>
                                                                @endguest
                                                                @if(session()->has('message'))
                                                                    <div class="alert alert-success --notes" role="alert">
                                                                        {{ session()->get('message') }}
                                                                    </div>
                                                                @endif
                                                            </form>
                                                        </div>
                                                        @if (isset(Auth::user()->id) && Auth::user()->id == $note->user_id)
                                                        <div class="interactions__update">
                                                            <div class="update__toggler">
                                                                <svg class="icon icon-more">
                                                                    <use xlink:href="#icon-more"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="update__menu ">
                                                                <div class="menu__edit">
                                                                    <a class="btn card-link" href="{{ url('/note/'. $note->id .'/edit') }}" >
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
                                        <button class="btn-close --close " aria-label="Close" >
                                            <svg class="icon icon-close --light">
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
                        <div class="loader-ellips infinite-scroll-request d-flex justify-content-center">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                        <p class="infinite-scroll-last text-md-center m-auto">You have seen all notes, create some more!</p>
                        <p class="infinite-scroll-error text-md-center m-auto">No more pages to load</p>
                      </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('cdn')
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <!--<script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>-->
    <script src="{{ URL('/js/infinite-scroll.js') }}"></script>
    <script src="{{ URL('/js/masonry.js') }}"></script>
    <script src="{{ URL('/js/filter.js') }}"></script>
    <script src="{{ URL('/js/like.js') }}"></script>    {{--  --}}
    <script src="{{ URL('/js/vod.js') }}"></script>
@endsection