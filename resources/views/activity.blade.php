@extends('layouts.app')

@section('content')
<div class="container col-lg-6">
    <h1>Activity's table page</h1>
    @component('components.breadcrumb', ['items' => [['route' => 'home', 'text' => 'Main'], ['text' => 'Activity']]]) @endcomponent
    <hr>
</div>
@endsection
