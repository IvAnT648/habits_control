@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br>
        <h1>Create new target</h1>
        <br><br>
    </div>
    <div class="container-fluid col-5">
        <form class="form-horizontal border" style="padding: 5%" action="{{ route('targets.store') }}" method="post">
            @csrf
            @include('targets.partials.form')
        </form>
    </div>
@endsection
