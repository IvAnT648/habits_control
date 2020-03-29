@extends('layouts.app')

@section('content')
    <div class="container col-lg-6">
        <h1>Activity</h1>
        <br/>
        @component('components.breadcrumb', ['items' => [['route' => 'home', 'text' => 'Main'], ['text' => 'Activity']]]) @endcomponent
        <hr>
    </div>
    <div class="container col-lg-6">
        <h2 style="text-align: center">Goals for today</h2>
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
