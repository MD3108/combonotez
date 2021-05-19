@extends('layouts.app')

@section('content')
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <span>
                    {{ $note->fighter }}
                </span>
            </div>
            <div>
                <div class="text-right">
                    <span>
                        {{ $note->damage }}
                    </span>
                    <span class="text-uppercase">
                        dmg
                    </span>
                </div>
                
                <div class="d-flex">
                    <div>
                        <span>
                            {{ $note->ki_start }}
                        </span>
                        <span class="">
                            Ki&nbsp;(start)
                        </span>
                    </div>
                    <span>
                        &nbsp;-&nbsp;
                    </span>
                    <div>
                        <span>
                            {{ $note->ki_end }}
                        </span>
                        <span class="">
                            Ki&nbsp;(end)
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h2 class="card-title">
                {{ $note->name }}
            </h2>
            <p class="card-text">
                {{ $note->notation }}
            </p>
        </div>
        <div class="pt-4">
            <div class="d-flex justify-content-between">
                <div class="">
                    <span>
                        {{ $note->user->name }}
                    </span>
                    <span>
                        {{ date("m / d / y", strtotime($note->created_at)) }}
                    </span>
                </div>
                @if (isset(Auth::user()->id) && Auth::user()->id == $note->user_id)
                    <div>
                        <a href="/{{ $note->id }}/edit" class="text-uppercase card-link">
                            Edit
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection