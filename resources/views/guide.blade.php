@extends('layouts.app')

@section('content')
    <div class="guide">
        <a href="{{ url('/note') }}" class="btn --guide">
            <svg class="icon icon-info">
                <use xlink:href="#icon-info"></use>
            </svg>
        </a>
    </div>
    <div class="container --card">
        <section class="section --side-page">
            <a href="{{ url('/note') }}" class="btn --close">
                <svg class="icon icon-close">
                    <use xlink:href="#icon-close"></use>
                </svg>
            </a>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="guide">
                        <h1 class="title --main text-center">
                            Combo notation guide
                        </h1>
                        <div class="guide__inputs">
                            <h2 class="title text-center">
                                Universal inputs
                            </h2>
                            <div class="guide__imgs">
                                <img src="{{ asset('/storage/images/stick.png') }}" alt="simple illustration of arcade stick">
                                <img src="{{ asset('/storage/images/gamepad.png') }}" alt="simple illustration of gamepad">
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="guide__buttons">
                                    <h3 class="title --h4">
                                        Buttons
                                    </h3>
                                    <div class="buttons__list">
                                        <div class="buttons__el">
                                           <img src="{{ asset('/storage/images/buttons/L.png') }}" alt="the L button">
                                           <span class="">
                                                Light   
                                            </span>     
                                        </div>
                                        <div class="buttons__el">
                                           <img src="{{ asset('/storage/images/buttons/M.png') }}" alt="the M button">
                                           <span class="">
                                                Medium  
                                            </span> 
                                        </div>
                                        <div class="buttons__el">
                                           <img src="{{ asset('/storage/images/buttons/S.png') }}" alt="the S button">
                                           <span class="">
                                                Special  
                                            </span> 
                                        </div>
                                        <div class="buttons__el">
                                           <img src="{{ asset('/storage/images/buttons/H.png') }}" alt="the H button">
                                           <span class="">
                                                Heavy  
                                            </span> 
                                        </div>
                                        <div class="buttons__el">
                                           <img src="{{ asset('/storage/images/buttons/A1.png') }}" alt="the A1 button">
                                           <span class="">
                                                Assist 1   
                                            </span> 
                                        </div>
                                        <div class="buttons__el">
                                           <img src="{{ asset('/storage/images/buttons/A2.png') }}" alt="the A2 button">
                                           <span class="">
                                                Assist 2   
                                            </span> 
                                        </div>
                                    </div>
                                </div>
                                <div class="guide__buttons">
                                    <h3 class="title --h4">
                                        Special buttons
                                    </h3>
                                    <div class="buttons__list">
                                        <div class="buttons__el">
                                            
                                            <img src="{{ asset('/storage/images/buttons/L.png') }}" alt="the L button">
                                            <span>
                                                &nbsp;+&nbsp;
                                            </span>
                                            <img src="{{ asset('/storage/images/buttons/M.png') }}" alt="the L button">
                                            <span>
                                                &nbsp;=&nbsp;
                                            </span>
                                            
                                            <img src="{{ asset('/storage/images/buttons/DR.png') }}" alt="the L button">
                                            <span class="">
                                                Dragon Rush   
                                            </span> 
                                        </div>
                                        <div class="buttons__el">
                                            
                                            <img src="{{ asset('/storage/images/buttons/S.png') }}" alt="the L button">
                                            <span>
                                                &nbsp;+&nbsp;
                                            </span>
                                            <img src="{{ asset('/storage/images/buttons/H.png') }}" alt="the L button">
                                            <span>
                                                &nbsp;=&nbsp;
                                            </span>
                                            
                                            <img src="{{ asset('/storage/images/buttons/SD.png') }}" alt="the L button">
                                            <span class="">
                                                Super Dash   
                                            </span> 
                                        </div>
                                        <div class="buttons__el">
                                            
                                            <img src="{{ asset('/storage/images/buttons/L.png') }}" alt="the L button">
                                            <span>
                                                &nbsp;+&nbsp;
                                            </span>
                                            <img src="{{ asset('/storage/images/buttons/S.png') }}" alt="the L button">
                                            <span>
                                                &nbsp;=&nbsp;
                                            </span>
                                            
                                            <img src="{{ asset('/storage/images/buttons/KC.png') }}" alt="the L button">
                                            <span class="">
                                                Ki Charge  
                                            </span> 
                                        </div>
                                        <div class="buttons__el">
                                            <div>
                                                <img src="{{ asset('/storage/images/buttons/M.png') }}" alt="the L button">
                                                <span>
                                                    &nbsp;+&nbsp;
                                                </span>
                                                <img src="{{ asset('/storage/images/buttons/H.png') }}" alt="the L button">
                                                <span>
                                                    &nbsp;=&nbsp;
                                                </span>
                                            </div>
                                            <img src="{{ asset('/storage/images/buttons/VN.png') }}" alt="the L button">
                                            <span class="">
                                                Vanish 
                                            </span> 
                                        </div>
                                        <div class="buttons__el">
                                            <img src="{{ asset('/storage/images/buttons/SPARK.png') }}" alt="the L button">
                                            <span class="">
                                                Spark 
                                            </span> 
                                        </div>
                                        <div class="buttons__el">
                                            <img src="{{ asset('/storage/images/buttons/DL.png') }}" alt="the L button">
                                            <span class="">
                                                Delay  
                                            </span>                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="guide__buttons">
                                    <h3 class="title --h4">
                                        Special diractions
                                    </h3>
                                    <div class="buttons__list">
                                        <div class="buttons__el">
                                            <img src="{{ asset('/storage/images/buttons/214.png') }}" alt="the L button">
                                            <span class="">
                                                Quarter circle back  
                                            </span>   
                                        </div>
                                        <div class="buttons__el">
                                            <img src="{{ asset('/storage/images/buttons/236.png') }}" alt="the L button">
                                            <span class="">
                                                Quarter circle forward 
                                            </span>   
                                        </div>
                                        <div class="buttons__el">
                                            <img src="{{ asset('/storage/images/buttons/28.png') }}" alt="the L button">
                                            <span class="">
                                                Super Jump 
                                            </span>   
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section --dark --last --terms">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="terms">
                        <h2 class="title text-center">
                            Fighting game term guide
                        </h2>
                        <ul class="terms__list">
                            <li class="terms__el">
                                <strong>BnB</strong> = Bread and Butter - A must learn combo when learning new fighter.
                            </li>
                            <li class="terms__el">
                                <strong>Universal</strong> - 
                                A combo that is Universal works on every fighter/character of the cast.
                            </li>
                            <li class="terms__el">
                                <strong>ToD</strong>  = Touch of Death - A combo that inflicts 10’000 damage or more KO'ing a fighter.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection