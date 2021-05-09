@extends('layouts.app')

@section('content')
<div class="container --card">
    <div class="row">
        <div class="col-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        {{__('You are logged in!') }}
                </div>
            @endif
        </div>
    </div>

    <!--Sectoion welcome & what is CNZ-->
    <section class="section --dark --first --what-is-cnz">
        
            <div class="row justify-content-center">
                <div class="col-10">
                    <h1 class="text-center title --main">
                        Welcome to Combo NoteZ
                    </h1>
                    
                    <div class="d-flex justify-content-center content">
                        <div class="content__el --left">
                            <h2 class="title">
                                Get all the latest and diverse Combos from the Dragon Ball FighterZ community in one place.
                            </h2>
                            <p>
                                As a fellow DBFZ player there is no better place to learn and discorver new combos. A filter feature allows to find all combos you need with ease. Learn all the combos you need in no time and watch yourself surpass your limits !!!
                            </p>
                            <a href="{{ url('/') }}" role="button" class="btn btn-primary btn-lg">Discorver now</a>
                        </div>
                        <div class="content__el --right">
                            <img class="" src="{{ asset('/storage/gif/ssj-goku-llmmhhh.gif') }}" alt="goku simple combo gif">
                        </div>
                    </div>
                </div>
                
            </div>
    </section>
    <section class="section --how-to-use">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div>
                        <h2 class="text-center title --has-sub">
                            How to use Combo NoteZ
                        </h2>
                        <span class="text-center title --sub">
                            The Combo NoteZ web site allows to discover or create notes
                        </span>
                    </div>
                    <div class="discover">
                        <h3 class="title --h3 --has-sub">
                            Discover
                        </h3>
                        <div class="discover__find">
                            <h4 class="title --sub">
                                1. Find specific combo(s)
                            </h4>
                            <div>
                                <!--Filter-->
                                <img src="{{ asset('/storage/images/filter-section.png') }}" alt="cnz filter section">
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
                        <div class="discover__read">
                            <h4 class="title --sub">
                                2. How to read notes
                            </h4>
                            <div class="read__note">
                                <div class="card">
                                    <div class="card__content">
                                        <div class="content__header">
                                            <div class="header__left">
                                                <div class="l-header__container">
                                                    <div class="fighter">
                                                        <img src="{{ asset('/storage/images/fighters/ssj-goku.png') }}" alt="Janemba">
                                                    </div>
                                                    <div class="assist">
                                                        <div class="assist__container --a1">
                                                            <img src="#" alt="#">
                                                            <div class="assist__move --B">
                                                                <span>
                                                                    B
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="assist__container --a2">
                                                            <img src="#" alt="#">
                                                            <div class="assist__move --B">
                                                                <span>
                                                                    B
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
                                                            <div class="categories__el">
                                                                Universal
                                                            </div>
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
                                                <button type="button" class="btn btn-primary --vod">
                                                    <svg class="icon icon-play">
                                                        <use xlink:href="#icon-play"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="body__main">
                                                <div class="notation">
                                                    <span class="input --txt">
                                                        2x 
                                                    </span> 
                                                    <img class="input --L" src="{{ asset('/storage/images/buttons/L.png') }}" alt="L button">
                                                    <img class="input --sep" src="{{ asset('/storage/images/buttons/sep.png') }}" alt="sep button">
                                                    <span class="input --txt">
                                                        2x  
                                                    </span> 
                                                    <img class="input --M" src="{{ asset('/storage/images/buttons/M.png') }}" alt="M button">
                                                    <img class="input --sep" src="{{ asset('/storage/images/buttons/sep.png') }}" alt="sep button">
                                                    <span class="input --txt">
                                                        3x  
                                                    </span>
                                                    <img class="input --M" src="{{ asset('/storage/images/buttons/H.png') }}" alt="M button">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content__footer">
                                            <div class="footer__left">
                                                <div class="l-footer__container">
                                                    <div class="user">
                                                        <!--<img src="#" alt="User">-->
                                                        <div>
                                                            <span>
                                                                Combo NoteZ Master
                                                            </span>
                                                            <span>
                                                                11/05/21
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
                            </div>
                            <a href="{{ url('/') }}" role="button" class="btn btn-primary btn-lg">Discorver now</a>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="">
                                <div>
                                    <h3 class="title --h3 --has-sub">
                                        Create your Note(s)
                                    </h3>
                                    <div>
                                        <p>
                                            You first have to register or if you already have, login to get permission. 
                                            Next, fill out the 4 step Form to generate your very own combo note.
                                        </p>
                                        <p>
                                            Also and like the game you’ll need your controller / stick
                                        </p>
                                    </div>
                                </div>
                                <img class="" src="{{ asset('/storage/images/create-form-illu.png') }}" alt="">
                            </div>
                            <div>
                                <div>
                                    <h4 class="title --h3 --has-sub">
                                        1. Choice of Fighter(s)
                                    </h4>
                                    <img class="" src="{{ asset('/storage/images/form-1.jpg') }}" alt="">
                                </div>
                                <div>
                                    <p>
                                        The very first step is to pick the character(s) that is/are used in your combo. 
                                    </p>
                                    <p>
                                        Like in the game you just press on the profil picture of your fighter(s) and, exepet for your first fighter, the 2 remaining characters act as activable assist in-game.
                                    </p>
                                    <p>
                                        Only choose assist fighter if your combo requires them. If you pick assist fighter don’t forget to pick A, B or C assist or else Combo NoteZ will pick ‘A’ for you.
                                    </p>
                                    <p>
                                        Once you have your fighter(s) press next. 
                                    </p>
                                </div>
                            </div>
                            <div class="">
                                <div>
                                    <h4 class="title --h3 --has-sub">
                                        2. The combo - Press those buttons
                                    </h4>
                                    <div>
                                        <p>
                                            YHere you have the fun part. 
                                        </p>
                                        <p>
                                            Plug in your controller and press one button for the website to regognize your controller. Next you’ll press those buttons to display the combo notation as if u were performing it in game.
                                        </p>
                                        <p>
                                            As soon as you happy with your combo notation, don’t forget to give your combo a cool fitting name and proceed to the next step.
                                        </p>
                                        <p>
                                            Combo NoteZ supports a wide range of controllers and sticks, especialy those compatible to PS or Xbox.
                                        </p>
                                    </div>
                                </div>
                                <img class="" src="{{ asset('/storage/images/form-2.jpg') }}" alt="">
                            </div>
                            <div>
                                <div>
                                    <h4 class="title --h3 --has-sub">
                                        3. Tell us about the combo details
                                    </h4>
                                    <img class="" src="{{ asset('/storage/images/form-3.jpg') }}" alt="">
                                </div>
                                <div>
                                    <p>
                                        Here you’ll be able to tell us all the benefits of the combo. As well as to indicate ous it category and difficulty. 
                                    </p>
                                    <p>
                                        You also have a field to enter your combo as an Youtube URL to enable to preview it. To have this preview may bosst your note popularity since we DBFZ like to watch the bombos before hand. 
                                    </p>
                                    <p>
                                        However this URL field is optional since there is no easy way in-game to recorde. If all fields are filled go to the final step
                                    </p>
                                </div>
                            </div>
                            <div class="">
                                <div>
                                    <h4 class="title --h3 --has-sub">
                                        4. Check out your combo note & publish
                                    </h4>
                                    <div>
                                        <p>
                                            Is your Combo Note looking clean? You can correct any mistake from the previous steps on this screen. You just have to click the element that needs changing and you’ll be able to edit. 
                                        </p>
                                        <p>
                                            If everything is correct share your note by pressing the “publish”. Now your note is with us so we can all enjoy it together! 
                                        </p>
                                    </div>
                                </div>
                                <img class="" src="{{ asset('/storage/images/form-4.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
@endsection
