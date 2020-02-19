@extends('layouts.app')

@section('content')
<div class="container col-md-6">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="jumbotron">
                <a href="{{ route('activity') }}" class="btn btn-dark btn-lg">
                    <h4 class="list-group-item-heading">Activity</h4>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="jumbotron">
                <a href="{{ route('targets.index') }}" class="btn btn-dark btn-lg">
                    <h4 class="list-group-item-heading">Targets</h4>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
