<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1 class="title">
                                Update Note
                            </h1>
                            @if ($errors->any())
                                <div class="mb-3">
                                     @foreach ($errors->all() as $error)
                                     <div>
                                         <span>
                                            {{ $error }}
                                         </span>
                                     </div>
                                    @endforeach
                                </div>
                               
                            @endif
                            <form action="/note/{{ $note->id }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="fighter" class="form-label">
                                        Choose a Fighter
                                    </label>
                                    <div>
                                        <select name="fighter" class="form-select" aria-label="Default select example">
                                            <option value="SSJ Goku">SSJ Goku</option>
                                            <option value="SSJ Vegeta">SSJ Vegeta</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">
                                            Give your note a Name
                                        </label>
                                        <input name="name" value="{{ $note->name }}" type="text" class="form-control" id="name" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="notation" class="form-label">
                                            Enter your combo (press those buttons)
                                        </label>
                                        <textarea name="notation" class="form-control" id="notation" rows="3">
                                        {{ $note->notation }}
                                        </textarea>
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <label for="damage" class="form-label">
                                            How  much Damage is inflicted
                                        </label>
                                        <input name="damage" value="{{ $note->damage }}" type="number" class="form-control" id="damage" >
                                    </div>
                                    <div class="d-flex justify-content-md-between">
                                        <div class="mb-3">
                                            <label for="ki-start" class="form-label">
                                                How many Ki-bar(s) at start
                                            </label>
                                            <input name="ki-start" value="{{ $note->ki_start }}" type="number" step=".1" class="form-control" id="ki-start" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="ki-end" class="form-label">
                                                How many Ki-bar(s) at end
                                            </label>
                                            <input name="ki-end" value="{{ $note->ki_end }}" type="number" step=".1" class="form-control" id="ki-end" >
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary mb-3">Publish</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>