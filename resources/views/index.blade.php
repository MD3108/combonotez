@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        {{ __('You are logged in!') }}
                        
                </div>
            @endif
        </div>
    </div>
</div>
<!--Sectoion welcome & what is CNZ-->
<section class="section --dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1 class="text-center title --main">
                    Welcome to Combo NoteZ
                </h1>
                
                <div class="d-flex">
                    <div class="">
                        <h2 class="title">
                            Get all the latest and diverse Combos from the Dragon Ball FighterZ community in one place.
                        </h2>
                        <p>
                            As a fellow DBFZ player there is no better place to learn and discorver new combos. A filter feature allows to find all combos you need with ease. Learn all the combos you need in no time and watch yourself surpass your limits !!!
                        </p>
                        <a href="{{ url('/') }}" role="button" class="btn btn-primary btn-lg">Discorver now</a>
                    </div>
                    <div>
                        <!--<img src="{{ URL('/storage/gif/ssj-goku-llmmhhh.gif') }}" alt="goku auto combo gif"> -->
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="">
                    <h2 class="text-center title --has-sub">
                        How to use Combo NoteZ
                    </h2>
                    <span class="text-center title --sub">
                        The Combo NoteZ web site allows to discover or create notes
                    </span>
                </div>
                <div>
                    <div>
                        <h3 class="title --h3 --has-sub">
                            Discover
                        </h3>
                        <span class="title --sub">
                            1. Find specific combo(s)
                        </span>
                    </div>
                    <div>
                        <!--Filter-->
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <span class="font-weight-bold">
                                Use the filter section to filter by :
                            </span>
                        </div>
                        <div>
                            <ul>
                                <li>
                                    Fighter(s)
                                </li>
                                <li>
                                    Assists
                                </li>
                                <li>
                                    Damage
                                </li>
                                <li>
                                    Spark
                                </li>
                                <li>
                                    Popularity (default)
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li>
                                    Newest (default)
                                </li>
                                <li>
                                    Favorites
                                </li>
                                <li>
                                    User
                                </li>
                                <li>
                                    Category
                                </li>
                                <li>
                                    Difficulty
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
