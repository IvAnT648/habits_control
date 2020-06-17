@extends('layouts.app')

@section('content')
    <activity-component
        :list="{{json_encode($targets)}}"
        :csrf="{{ csrf_token() }}"
        :create-target-url="{{ route('targets.create') }}">
    </activity-component>
    <div class="container col-lg-6">
        <h1>Activity</h1>
    </div>
    <div class="container col-lg-6">
        <h2>Goals for today</h2>
        <div class="today-activity justify-content-center">
            <table class="table-hover target-activity">
                <thead>
                <th>Title</th>
                <th>Type</th>
                <th>Action</th>
                </thead>
                <tbody>
                    @forelse ($targets as $target)
                        @include('activity.item')
                    @empty
                        <tr><h5 style="font-style: italic">Data not found</h5></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('header-links')
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link header-link" href="{{ url('/targets') }}">Targets</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link header-link" href="{{ url('/activity') }}">Activity</a>
        </li>
    </ul>
@endsection
