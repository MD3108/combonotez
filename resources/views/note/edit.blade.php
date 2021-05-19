<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - Update Note</title>

    <!-- Favicon 
    TODO fix path -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL('/storage/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL('/storage/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL('/storage/images/favicon/favicon-16x16.png') }}">
    <!--<link rel="manifest" href="{{ URL('/storage/images/favicon/site.webmanifest') }}"> -->
    <link rel="mask-icon" href="{{ URL('/storage/images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ URL('/storage/images/favicon/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#ebf6ff">
    <meta name="msapplication-config" content="{{ URL('/storage/images/favicon/browserconfig.xml') }}">
    <meta name="theme-color" content="#ebf6ff">
    
    <!-- Google meta  https://anthonypauwels.be/quarantedeux/metadatas/?fbclid=IwAR18PR20_19YlCS2LlEVodSXnXkVtamNtd_M_be1wHOCaw3Q4bUMxauMPuU
    TODO add them-->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Semi+Condensed&family=Saira:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="body --form">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <!--Warning-->
            <symbol id="icon-warning" viewBox="0 0 10 32">
                <path d="M0.594 27.459c0-2.25 1.824-4.074 4.074-4.074s4.074 1.824 4.074 4.074c0 2.25-1.824 4.074-4.074 4.074s-4.074-1.824-4.074-4.074z"></path>
                <path d="M4.669 20.839v0c-2.25 0-4.074-1.824-4.074-4.074v-12.223c0-2.25 1.824-4.074 4.074-4.074v0c2.25 0 4.074 1.824 4.074 4.074v12.223c0 2.25-1.824 4.074-4.074 4.074z"></path>
            </symbol>
        <!-- Next -->
            <symbol id="icon-next" viewBox="0 0 19 32">
                <path d="M18.171 17.49c0.815-0.815 0.815-2.136 0-2.951l-13.281-13.281c-0.815-0.815-2.136-0.815-2.951 0s-0.815 2.136 0 2.951l11.806 11.806-11.806 11.805c-0.815 0.815-0.815 2.136 0 2.951s2.136 0.815 2.951 0l13.281-13.281zM15.304 18.101h1.391v-4.174h-1.391v4.174z"></path>
            </symbol>
            <!-- Previous -->
            <symbol id="icon-previous" viewBox="0 0 31 32">
                <path d="M7.453 14.431c-0.735 0.735-0.735 1.927 0 2.662l11.979 11.979c0.735 0.735 1.927 0.735 2.662 0s0.735-1.927 0-2.662l-10.648-10.648 10.648-10.648c0.735-0.735 0.735-1.927 0-2.662s-1.927-0.735-2.662 0l-11.979 11.979zM9.412 13.88h-0.627v3.765h0.627v-3.765z"></path>
            </symbol>
         <!-- Edit -->
            <symbol id="icon-edit" viewBox="0 0 34 32">
                <path d="M26.767 1.908l4.174 4.173c0.347 0.347 0.347 0.91 0 1.257l-15.035 15.035c-0.347 0.347-0.91 0.347-1.257 0l-4.173-4.174c-0.347-0.347-0.347-0.91 0-1.257l15.035-15.035c0.347-0.347 0.91-0.347 1.257 0z"></path>
                <path d="M6.355 27.749c-0.661 0.177-1.266-0.428-1.089-1.089l1.498-5.592c0.177-0.661 1.003-0.882 1.487-0.398l4.093 4.093c0.484 0.484 0.262 1.31-0.399 1.487l-5.592 1.498z"></path>
            </symbol>
        <!-- Close -->
            <symbol id="icon-close" viewBox="0 0 32 32">
                <path d="M21.802 3.508c1.848-1.848 4.845-1.848 6.693 0s1.848 4.845 0 6.693l-18.406 18.406c-1.848 1.848-4.845 1.848-6.693 0s-1.848-4.845 0-6.693l18.406-18.406z"></path>
                <path d="M28.414 21.86c1.846 1.85 1.846 4.85 0 6.7s-4.839 1.85-6.686 0l-18.386-18.426c-1.846-1.85-1.846-4.85 0-6.7s4.84-1.85 6.686 0l18.386 18.426z"></path>
            </symbol>
         <!-- Check -->
            <symbol id="icon-check" viewBox="0 0 37 32">
                <path d="M4.976 25.622l28.732-16.86 2.986 5.256-28.732 16.86-2.986-5.256z"></path>
                <path d="M5.172 13.827l4.977 8.761-5.172 3.035-4.977-8.761 5.172-3.035z"></path>
            </symbol>
        </svg>
    <div id="app">
        <main class="main --form">
            <section class="section --form">
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <div class="header">
                                <button class="btn --previous">
                                    <svg class="icon icon-previous">
                                        <use xlink:href="#icon-previous"></use>
                                    </svg>
                                </button>
                                <h1 class="title --main text-center">
                                    Update your Combo Note
                                </h1>
                            </div>
                            
                            @if ($errors->any())
                                <div class="">
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                             @foreach ($errors->all() as $error)
                                            <li>
                                                {{ $error }}
                                            </li>
                                            @endforeach
                                         </ul>
                                     </div>
                                </div>
                            @endif

                            <form class="form"
                                action="/note/{{ $note->id }}" 
                                method="POST">
                                @csrf 
                                @method('PUT')
                                <div class="form__part --fighter" data-step="1" data-visible="true">
                                    <div>
                                        <h2 class="title --form">
                                            Who’s your fighter
                                        </h2>
                                    </div>
                                    <div class="form__fighters">
                                        <div class="fighters__select">
                                            @foreach ($fighters as $fighter)
                                            <input class="checkbox" type="checkbox" name="fighters[]" id="fighter-{{ $fighter->id }}" value="{{ $fighter->id }}">
                                            <label class="f-select__fighter" for="fighter-{{ $fighter->id }}" >
                                                <img src="{{ asset('/storage' .$fighter->image_path) }}" alt="{{ $fighter->name }}">
                                            </label>
                                            @endforeach
                                        </div>
                                        <div class="fighters__chosen">
                                            <h2 class="title --form">
                                                Your chosen Fighter(s)
                                            </h2>
                                            <div class="f-chosen">
                                                <div class="f-chosen__el --main">
                                                    <div class="el__img">
                                                        fighter 1
                                                    </div>
                                                    <input type="number" name="choice_1" value="" id="choice_1" class="hide">
                                                </div>
                                                <div class="f-chosen__el --a1">
                                                    <div class="el__img">
                                                        fighter 2
                                                    </div>
                                                    <input type="number" name="choice_2" value="" id="choice_2" class="hide">
                                                    <div class="el__move">
                                                        @foreach ( config('enum.assists') as $key=>$assist )
                                                            <input type="radio" name="assist-1" id="a1-{{ $assist }}" value="{{ $key }}">
                                                            <label class="assist-{{ $assist }}" for="a1-{{ $assist }}" data-content="">
                                                                {{ $assist }}
                                                            </label>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="f-chosen__el --a2">
                                                    <div class="el__img">
                                                        fighter 3
                                                    </div>
                                                    <input type="number" name="choice_3" value="" id="choice_3" class="hide">
                                                    <div class="el__move">
                                                        @foreach ( config('enum.assists') as $key=>$assist )
                                                            <input type="radio" name="assist-2" id="a2-{{ $assist }}" value="{{ $key }}">
                                                            <label class="assist-{{ $assist }}" for="a2-{{ $assist }}" >
                                                                {{ $assist }}
                                                            </label>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary  --next --one" >
                                            Next
                                        </button>
                                    </div>
                                </div>
                                <div class="form__part --combo" data-step="2" data-visible="false">
                                    <div class="combo">
                                        <div class="combo__name">
                                            <label for="name" class=" title --form">
                                                Give your note a Name
                                            </label>
                                            <input name="name" type="text" class="" id="name" value="{{ $note->name }}">
                                        </div>
                                        <div class="combo__notation">
                                            <label class=" title --form" for="notation-list">
                                                Enter your Bombo</span>
                                            </label>
                                            <input name="notation" type="text" id="notation-list" class="" value='{{ $note->notations }}'>
                                            <div class="c-notation">
                                                <div class="c-notation__field " id="notation-render">
                                                
                                                </div>
                                                <div class="c-notation__buttons">
                                                    <button type="button" class=" btn btn-secondary --undo">
                                                        Undo
                                                    </button>
                                                    <button type="button" class=" btn btn-danger --clear">
                                                        Clear all Buttons
                                                    </button>
                                                    <button type="button" class=" btn --delay"> 
                                                        <img src="{{ asset('/storage/images/buttons/DL.png') }}" alt="delay">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hide alert alert-warning mt-3" role="alert">
                                            <div class="d-flex align-items-center">
                                                <svg class="icon icon-warning mr-3">
                                                    <use xlink:href="#icon-warning"></use>
                                                </svg>
                                                <span class="pl-2">
                                                    Plug in your Game Pad or Stick. If pluged in press one button.
                                                </span>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary  --next --two" >
                                            Next
                                        </button>
                                    </div>
                                </div>
                                <div class="form__part --details" data-step="3" data-visible="false">
                                    <div class="details">
                                        <h2 class="title --form">
                                            What are the Combo details
                                        </h2>
                                        <div class="details__damage">
                                            <label for="damage" class="title --small">
                                                How  much Damage is inflicted
                                            </label>
                                            <input name="damage" type="number" min="0" max="1000000" value="{{ $note->damage }}" id="damage">
                                        </div>
                                        <div class="details__ki d-flex justify-content-md-between">
                                            <div class="">
                                                <label for="ki-start" class="title --small">
                                                    How many Ki-bar(s) at start
                                                </label>
                                                <input name="ki-start" type="number" step=".1" min="0" max="7" value="{{ $note->ki_start }}" id="ki-start">
                                            </div>
                                            <div class="">
                                                <label for="ki-end" class="title --small">
                                                    How many Ki-bar(s) at end
                                                </label>
                                                <input name="ki-end" type="number" step=".1" min="0" max="7" value="{{ $note->ki_end }}" id="ki-end">
                                            </div>
                                        </div>
                                        <div class="details__categories">
                                            <div class="categories">
                                                <span class="title --small">
                                                    Belongs in there Category(ies)
                                                </span>
                                                <div class="categories__container">
                                                    @foreach ($categories as $category)
                                                    <div>
                                                        <input type="checkbox" name="categories[]" id="{{ $category->name }}" value="{{ $category->id }}">
                                                        <label for="{{ $category->name }}" >
                                                            {{ $category->name }}
                                                        </label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="details__difficulty">
                                            <div class="difficulty">
                                                <span class="title --small">
                                                    The combo is (Difficulty)
                                                </span>
                                                <div class="difficulty__container">
                                                    @foreach (config('enum.difficulties') as $key=>$difficulty)
                                                    <div>
                                                        <input type="radio" name="difficulty" id="{{ $difficulty }}" value="{{ $key }}">
                                                        <label for="{{ $difficulty }}" >
                                                            {{ $difficulty }}
                                                        </label>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="details__youtube">
                                            <label class="title --small" for="youtube" >
                                                Preview as youtube URL (Optional)
                                            </label>
                                            <input type="url" name="youtube" id="youtube" value="{{ $note->youtube_url }}">
                                        </div>
                                        <button type="button" class="btn btn-primary  --next --three" >
                                            Next
                                        </button>
                                    </div>
                                </div>
                                <div class="form__part --check" data-step="4" data-visible="false">
                                    <div>
                                        <h2 class="title --form">
                                            Are you ready to publish&nbsp;?
                                        </h2>
                                        <div class="card">
                                            <div class="card__content">
                                                <div class="content__header">
                                                    <div class="header__left">
                                                        <div class="l-header__container">
                                                            <div class="fighter">
                                                                <img src="{{ request()->input('assist-1') }}" alt="#">
                                                            </div>
                                                            <div class="assist">
                                                                <div class="assist__container --a1">
                                                                    <img src="#" alt="#">
                                                                    <div class="assist__move">
                                                                        <span>
                                                                            
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="assist__container --a2">
                                                                    <img src="#" alt="#">
                                                                    <div class="assist__move">
                                                                        <span>
                                                                            
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="header__right">
                                                        <div class="r-header__container">
                                                            <div class="categories">
                                                                <div class="categories__list">

                                                                </div>
                                                            </div>
                                                            <div class="damage">
                                                                <span class="damage__value">
                                                                    2620 
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
                                                                            0 ki
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="ki__el --end">
                                                                    <div class="ki__indicator">
                                                                        At end
                                                                    </div>
                                                                    <div class="ki__value">
                                                                        <span>
                                                                            0.5 ki
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content__body">
                                                    <div class="body__title">
                                                        <h3 class="title --note">
                                                            My First Combo Note
                                                        </h3>
                                                        <button type="button" class="btn btn-primary --vod hide">
                                                            <svg class="icon icon-play">
                                                                <use xlink:href="#icon-play"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="body__main">
                                                        <div class="notation">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="content__footer">
                                                    <div class="footer__left">
                                                        <div class="l-footer__container">
                                                            <div class="user">
                                                                <!--<div class="user__profil">
                                                                    <img src="#" alt="User">
                                                                </div>-->
                                                                <div class="user__info">
                                                                    <span>
                                                                        {{ Auth::user()->name }}
                                                                    </span>
                                                                    <span>
                                                                        
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="alert alert-primary mt-3 hide" role="alert">
                                            <svg class="icon icon-edit mr-3">
                                                <use xlink:href="#icon-edit"></use>
                                            </svg>
                                            Select an element to edit
                                        </div>
                                    </div>

                                    <div class="">
                                        <button type="submit" class="btn btn-primary ">Publish</button>
                                    </div>
                                </div>

                                

                                <!--<input class="hide" type="number" name="note_id" id="note_id" value="">-->
                            </form>
                        </div>
                        
                        <div class="col-3">
                            <a href="/note" class="btn-close --close " aria-label="Close" >
                                <svg class="icon icon-close --light">
                                    <use xlink:href="#icon-close"></use>
                                </svg>
                            </a>
                            <div class="progression">
                                <div class="progression__container">
                                    <h2 class="title --progression">
                                        Note Completion
                                    </h2>
                                    <ul class="progression__list">
                                        <li class="progression__el ">
                                            Fighter choice
                                        </li>
                                        <li class="progression__el ">
                                            The combo
                                        </li>
                                        <li class="progression__el ">
                                            Combo details
                                        </li>
                                        <li class="progression__el ">
                                            Check up
                                        </li>
                                    </ul>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="{{ URL('/js/form.js') }}" ></script>
    <script src="{{ URL('/js/controller-js/controller.min.js') }}"></script>
    <script src="{{ URL('/js/controller-js/controller.layouts.min.js') }}"></script>
    <script src="{{ URL('/js/gamepad.js') }}" ></script>
</body>
</html>