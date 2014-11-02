@extends('master')

@section('styles')

<style>
    #container {
        position: relative;
        width: 100%;
        height: 100%;
        display: table;
    }

    #container::before {
        position: absolute;
        content: ' ';
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background-color: black;
        opacity: .1;
        z-index: -1;
    }

    #form-signup-container {
        width: 100%;
        height: auto;
        display: table-cell;
        vertical-align: middle;
    }
</style>

@stop

@section('body')

<div id="container">
    <div id="form-signup-container">
        <div class="col-md-4 col-md-offset-4">
            @if (strpos(Route::currentRouteAction(), 'create') !== false)
                @include('components.signup')
            @else
                @include('components.signin')
            @endif
        </div>
    </div>
</div>

@stop
