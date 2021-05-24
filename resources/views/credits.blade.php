@extends('layouts.app')

@section('content')
    <h1 class="text-hide m-0">
        Credits 
    </h1>
    <div class="container --card">
        <section class="section --side-page">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="credits">
                        <h2 class="title --main text-center">
                            Credits&nbsp;-&nbsp;Thank you all
                        </h2>
                        <div class="credits__content --one">
                            <div class="credits__img">
                                <h3 class="title --h4">
                                    DBFZ Community / Damascus 
                                </h3>
                                <img class="" src="{{ asset('/storage/images/dbfz-logo.png') }}" alt="dbfz logo">
                            </div>
                            <div class="credits__txt">
                                <p>
                                    Thanks to you guys, I had everything I needed to design this website. Your enthusiasm and passion for seeing this project become a reality are what drives me to do my absolute best&nbsp;!
                                </p>
                                <p>
                                    Thanks for filling out forms, participate in user tests, giving pieces of advice&nbsp;! Your the best&nbsp;!
                                </p>
                                <p>
                                    Special thanks to Damascus, being a Bandai Namco employee, he confirmed the copy-right rules on DBFZ. This project will stay non-commercial for its life span.
                                </p>
                                <p>
                                    Thanks to, Aisk, Alvin, Tyrant, WhiteBl4ck, and Damascus again for using their discord to share my forms.
                                </p>
                            </div>
                        </div>
                        <div class="credits__content --two">
                            <div>
                                <h3 class="title --h4">
                                    Teachers of DWM at HEAJ
                                </h3>
                                <div>
                                    <p>
                                        Thanks to all my Web & Mobile Design Teachers for all the feedback sessions.
                                    </p>
                                    <p>
                                        I know to you this project subject is very unfamiliar. However, you managed to adapt very well and provide valuable input.
                                    </p>
                                    <ul class="list --list-style">
                                        <li class="list__el">
                                            Mr.&nbsp;Tournay
                                        </li>
                                        <li class="list__el">
                                            Mr.&nbsp;Bourgaux
                                        </li>
                                        <li class="list__el">
                                            Mr.&nbsp;Di Stefano
                                        </li>
                                        <li class="list__el">
                                            Mr.&nbsp;Thronte
                                        </li>
                                        <li class="list__el">
                                            Mr.&nbsp;Therasse
                                        </li>
                                        <li class="list__el">
                                            Mr.&nbsp;Marchal
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <img class="" src="{{ asset('/storage/images/dwm.png') }}" alt="A cool cat for DwM">
                        </div>
                        <div class="credits__content --one">
                            <div class="credits__img">
                                <h3 class="title --h4">
                                    Dary and his Discord 
                                </h3>
                                <img class="" src="{{ asset('/storage/images/dary.png') }}" alt="code with dary logo">
                            </div>
                            <div class="credits__txt">
                                <p>
                                    Thanks to his excellent tutorials on his youtube and his discord, I managed to develop this website.
                                </p>
                                <p>
                                    Special thanks to obviously;
                                </p>
                                <ul class="list --list-style --first">
                                    <li class="list__el">
                                        <a class="" href="https://www.youtube.com/channel/UCkzGZ6ECGCBh0WK9bVUprtw">Dary</a>
                                    </li>
                                    <li class="list__el">
                                        Alex1897
                                    </li>
                                    <li class="list__el">
                                        Kamino
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section --dark --last --side-page">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="techno">
                        <h2 class="title --main text-center">
                            Technologies&nbsp;&amp;&nbsp; Sources
                        </h2>
                        <div class="techno__content">
                            <ul class="list">
                                <li class="list__el">
                                    <a class="link" href="https://laravel.com/">Laravel</a>
                                </li>
                                <li class="list__el">
                                   <a class="link" href="https://getbootstrap.com/"> Bootstrap 5</a>
                                </li>
                                <li class="list__el">
                                    <a class="link" href="https://sass-lang.com/">HTML5&nbsp;&amp;&nbsp;SCSS</a>
                                </li>
                                <li class="list__el">
                                    <a class="link" href="https://www.javascript.com/">Javascript</a>
                                </li>
                                <li class="list__el">
                                    <a class="link" href="https://www.mysql.com/">MySQL</a>
                                </li>
                            </ul>
                            <ul class="list">
                                <li class="list__el --no-p">
                                    Libraries used
                                </li>
                                <li class="list__el">
                                    <a class="link" href="https://samiare.github.io/Controller.js/">Controller JS</a>
                                </li>
                                <li class="list__el">
                                    <a class="link" href="https://masonry.desandro.com/">Masonry</a>
                                </li>
                                <li class="list__el">
                                    <a class="link" href="https://infinite-scroll.com/">Infinite Scroll</a>
                                </li>
                            </ul>
                            
                                
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection