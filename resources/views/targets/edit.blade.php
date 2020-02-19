@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br>
        <h1>Edit '{{ $target->title }}' target</h1>
        <br><br>
    </div>
    <div class="container col-md-6">
        <form class="form-horizontal" action="{{ route('targets.update', $target) }}" method="post">
            @csrf
            @method('put')
            @include('targets.partials.form')
        </form>
    </div>
@endsection
