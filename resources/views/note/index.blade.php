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
                    <div class="grid --notes">
                        @foreach ($notes as $note)
                        <div class="grid-item">
                            <!-- find a solution to grid item to remove this section tag -->
                            <section>
                                <div class="card">
                                <div class="card-body">
                                    <div class="card-body__header d-flex justify-content-between">
                                        <div class="cb-header__fighter d-flex ">
                                            @foreach ($note->fighters as $fighter)
                                            @if ($loop->first)
                                            <img class="fighter --main" src="{{ asset('/storage' .$fighter->image_path) }}" alt="{{ $fighter->name }}">
                                            <div>
                                                @elseif($loop->index == 1)
                                                <div class="assist">
                                                    <img class="fighter --a1" src="{{ asset('/storage' .$fighter->image_path) }}" alt="{{ $fighter->name }}">
                                                    <!-- --a --b --c for the 3 diffrent assist & depoending which was chosen-->
                                                    <div class="assist__move --{{ $note->assistOne }}">
                                                        <span>
                                                            {{ $note->assistOne }}
                                                        </span>
                                                    </div>                                                    
                                                </div>

                                                @elseif($loop->index == 2)
                                                <div class="assist">
                                                    <img class="fighter --a2" src="{{ asset('/storage' .$fighter->image_path) }}" alt="{{ $fighter->name }}">
                                                    <!-- --a --b --c for the 3 diffrent assist & depoending which was chosen-->
                                                    <div class="assist__move --{{ $note->assistTwo }}">
                                                        <span>
                                                            {{ $note->assistTwo }}
                                                        </span>
                                                    </div>
                                                </div>
                                                @endif    
                                                @endforeach
                                            </div><!--cb-header__fighter End-->
                                        </div>
                                        <div class="cb-header__details">
                                            <div class="details__categories">
                                                @foreach ($note->categories as $category)
                                                    <div class="category">
                                                        <span>
                                                            {{ $category->name }}
                                                        </span>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="details__damage text-right">
                                                <span class="damage__value">
                                                    {{ $note->damage }}
                                                </span>
                                                <span class="damage__unit">
                                                    Damage
                                                </span>
                                            </div>
                                            <div class="details__ki d-flex">
                                                <div class="ki --start">
                                                    <span class="start__unit">
                                                        At start
                                                    </span>
                                                    <div class="start__value">
                                                        <span>
                                                            {{ $note->ki_start }}&nbsp;Ki
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="ki --end">
                                                    <span class="end__unit">
                                                        At end
                                                    </span>
                                                    <div class="end__value">
                                                        <span>
                                                            {{ $note->ki_end }}&nbsp;Ki
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- cb-header__details End -->
                                    </div>
                                    <div class="card-body__combo">
                                        <div class="cb-combo d-flex justify-content-between">
                                            <h2 class="cb-combo__name card-title">
                                                {{ $note->name }}
                                            </h2>
                                            <button class="cb-combo__btn --vod btn ">
                                                <svg class="icon icon-play">
                                                    <use xlink:href="#icon-play"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        
                                        <div class="cb-combo__notation">
                                            {{-- var_dump($note->notation) --}}
                                            <!--<script>
                                                var notation = @json($note->notation);
                                                console.log(notation);
                                            </script>-->
                                        </div>
                                    </div><!-- card-body__combo End -->
                                    <div class="card-body__footer pt-4">
                                        <div class="d-flex justify-content-between">
                                            <div class="cb-footer__user-date">
                                                <span class="ud__username">
                                                    {{ $note->user->name }}
                                                </span>
                                                <span class="ud__date">
                                                    {{ date("m / d / y", strtotime($note->created_at)) }}
                                                </span>
                                            </div>
                                            <div class="cb-footer__interactions d-flex justify-content-between align-items-center">
                                                <div class="interactions__favorites">
                                                    @foreach ($note->favorites as $favorite)
                                                        <!-- && Auth::user()->id ==    && Auth::user()->id == $user->id-->
                                                        @foreach ($favorite->users as $user)
                                                            @if (isset(Auth::user()->id) && Auth::user()->id == $user->id )
                                                                <svg class="icon icon-favorite --fill">
                                                                    <use xlink:href="#icon-favorite"></use>
                                                                </svg>
                                                            @elseif (isset(Auth::user()->id) && Auth::user()->id != $user->id )
                                                                <svg class="icon icon-favorite">
                                                                    <use xlink:href="#icon-favorite"></use>
                                                                </svg>
                                                            @endif
                                                        @endforeach
                                                    @endforeach 
                                                </div>
                                                <div class="interactions__likes">
                                                    <div class="likes">
                                                        <svg class="icon icon-like">
                                                            <use xlink:href="#icon-like"></use>
                                                        </svg>
                                                        @foreach ($note->likes as $key=>$like)
                                                        @foreach ($like->users as $user)
                                                        @if (isset(Auth::user()->id) && Auth::user()->id == $user->id )
                                                        <svg class="icon icon-like --fill">
                                                            <use xlink:href="#icon-like"></use>
                                                        </svg>
                                                        @elseif (isset(Auth::user()->id) && Auth::user()->id != $user->id )
                                                                    
                                                        @endif
                                                        @if ($loop->last)
                                                    </div>
                                                            <div class="likes__count">
                                                                {{ $loop->count }}
                                                            </div>
                                                        @endif
                                                        @endforeach
                                                        @endforeach 
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
                                    </div><!-- card-body__footer End -->
                                </div>
                                </div>
                                <div class="card --vod hide">
                                    <div class="card-body --vod">
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
                            </section>
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
    <!-- <script src="{{ URL('/js/vod.js') }}"></script> -->
@endsection