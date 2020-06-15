@extends('layouts.app')

@section('content')
@endsection

@section('header-links')
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link header-link" href="{{ url('/targets') }}">Targets</a>
        </li>
        <li class="nav-item">
            <a class="nav-link header-link" href="{{ url('/activity') }}">Activity</a>
        </li>
    </ul>
@endsection
