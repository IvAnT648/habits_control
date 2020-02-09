@extends('layouts.app')

@section('content')
<div class="container col-md-6">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <a href="{{ url('activity') }}" class="list-group-item">
                <h4 class="list-group-item-heading">Перейти к таблице активности</h4>
            </a>
        </div>
        <div class="col-sm-6">
            <a href="{{ url('targets') }}" class="list-group-item">
                <h4 class="list-group-item-heading">Перейти к редактированию целей</h4>
            </a>
        </div>
    </div>
</div>
@endsection
