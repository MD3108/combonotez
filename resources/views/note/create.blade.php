<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} - Create</title>

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
                                
                                <h1 class="title --main text-center">
                                    Create your Combo Note
                                </h1>
                            </div>
                            

                            @if ($errors->any())
                                <div class="mb-3">
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
                                action="/note" 
                                method="POST">
                                @csrf
                                <div class="form__part --fighter" data-step="1" data-visible="true">
                                    <div>
                                        <h2 class="title --form">
                                            Who’s your fighter
                                        </h2>
                                    </div>
                                    <div class="form__fighters">
                                        <div class="fighters__select">
                                            @foreach ($fighters as $fighter)
                                            <label class="f-select__fighter" for="{{ $fighter->id }}" >
                                                <img src="{{ asset('/storage' .$fighter->image_path) }}" alt="{{ $fighter->name }}">
                                            </label>
                                            <input type="checkbox" name="fighters[]" id="{{ $fighter->id }}" value="{{ $fighter->id }}">
                                            @endforeach
                                        </div>
                                       

                                        <div class="fighters__chosen">
                                            <h2 class="title --form">
                                                Your chosen Fighter(s)
                                            </h2>
                                            <div class="f-chosen">
                                                <div class="f-chosen__el --main">
                                                    fighter 1
                                                </div>
                                                <div class="f-chosen__el --a1">
                                                    <div>
                                                        fighter 2
                                                    </div>
                                                    <div>
                                                        @foreach ( config('enum.assists') as $key=>$assist )
                                                        <div>
                                                                <label class="assist-1" for="a1-{{ $assist }}" >
                                                                {{ $assist }}
                                                            </label>
                                                            <input type="radio" name="assist-1" id="a1-{{ $assist }}" value="{{ $key }}">
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="f-chosen__el --a2">
                                                    <div>
                                                        fighter 3
                                                    </div>
                                                    <div>
                                                        @foreach ( config('enum.assists') as $key=>$assist )
                                                        <div>
                                                            <label class="assist-2" for="a2-{{ $assist }}" >
                                                                {{ $assist }}
                                                            </label>
                                                            <input type="radio" name="assist-2" id="a2-{{ $assist }}" value="{{ $key }}">
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary mb-3 --next --one" >
                                            Next
                                        </button>
                                    </div>
                                </div>
                                <div class="form__part --combo" data-step="2" data-visible="false">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">
                                            Give your note a Name
                                        </label>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="My first Combo Note">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="notation-list">
                                            Enter your combo - press <span class="text-uppercase">them buttons</span>
                                        </label>
                                        <input name="notation" type="text" id="notation-list" class="" value='{"inputs": ["2x", "L", "sep", "2x", "M", "sep", "2x", "H"]}'>
                                        <div class="btn-history form-control" id="notation-render">
                                           
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-secondary --undo"> Undo </button>
                                            <button type="button" class="btn btn-danger --clear"> Clear Inputs </button>
                                        </div>
                                    </div>
                                    <div class="hide alert alert-warning mt-3" role="alert">
                                        <div class="d-flex align-items-center">
                                            <span class="pl-2">
                                                Plug in your Game Pad or Stick. If pluged in press one button.
                                            </span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary mb-3 --next --two" >
                                        Next
                                    </button>
                                </div>
                                <div class="form__part --details" data-step="3" data-visible="false">
                                    <div class="mb-3">
                                        <label for="damage" class="form-label">
                                            How  much Damage is inflicted
                                        </label>
                                        <input name="damage" type="number" min="0" max="1000000" class="form-control" id="damage" placeholder="2620">
                                    </div>
                                    <div class="d-flex justify-content-md-between">
                                        <div class="mb-3">
                                            <label for="ki-start" class="form-label">
                                                How many Ki-bar(s) at start
                                            </label>
                                            <input name="ki-start" type="number" step=".1" min="0" max="7" class="form-control" id="ki-start" placeholder="0">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ki-end" class="form-label">
                                                How many Ki-bar(s) at end
                                            </label>
                                            <input name="ki-end" type="number" step=".1" min="0" max="7" class="form-control" id="ki-end" placeholder="0.5">
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            @foreach ($categories as $category)
                                            <div>
                                                <label class="" for="{{ $category->name }}" >
                                                    {{ $category->name }}
                                                </label>
                                                <input type="checkbox" name="categories[]" id="{{ $category->name }}" value="{{ $category->id }}">
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div>
                                        @foreach (config('enum.difficulties') as $key=>$difficulty)
                                        <div>
                                            <label class="difficulty" for="{{ $difficulty }}" >
                                                {{ $difficulty }}
                                            </label>
                                            <input type="radio" name="difficulty" id="{{ $difficulty }}" value="{{ $key }}">
                                        </div>
                                        @endforeach
                                    </div>
                                    <div>
                                        <label class="" for="youtube" >
                                            Your combo preview as youtube URL
                                        </label>
                                        <input type="text" name="youtube" id="youtube" value="https://youtube.com/embed/" placeholder="https://www.youtube.com/embed/">
                                    </div>
                                    <button type="button" class="btn btn-primary mb-3 --next --three" >
                                        Next
                                    </button>
                                </div>
                                <div class="form__part --check" data-step="4" data-visible="false">
                                    <div>
                                        <div>

                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary mb-3">Publish</button>
                                    </div>
                                </div>

                                

                                <!--<input class="hide" type="number" name="note_id" id="note_id" value="">-->
                            </form>
                        </div>
                        <div class="col-3">
                            <button class="btn-close --vod" aria-label="Close" >
                                <svg class="icon icon-close">
                                    <use xlink:href="#icon-close"></use>
                                </svg>
                            </button>
                            <div class="progression">
                                <div>
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