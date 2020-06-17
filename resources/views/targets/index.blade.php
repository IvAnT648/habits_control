@extends('layouts.app')

@section('content')
    <div class="container align-content-center col-sm-6 page_cnt">
        <h2 class="page-name">My targets</h2>
        @if (count($targets))
            <div class="col-sm">
                <div class="row target-row target-row-header">
                    <div class="col-sm text-center">
                        Title
                    </div>
                    <div class="col-sm text-center">
                        Description
                    </div>
                    <div class="col-sm text-center">
                        Actions
                    </div>
                </div>
                <hr>
                @foreach ($targets as $target)
                    <div class="row target-row">
                        <div class="col-sm text-center">
                            {{ $target->title }}
                        </div>
                        <div class="col-sm text-center">
                            {{ $target->description }}
                        </div>
                        <div class="col-sm align-content-center">
                            <div class="row target-row-buttons">
                                <form action="{{ route('targets.edit', ['target' => $target]) }}"
                                      method="get"
                                >
                                    @csrf
                                    <button type="submit" class="btn"><i class="fa fa-pencil-square-o action-icon"></i></button>
                                </form>
                                <form onsubmit="return confirm('Delete the target?')"
                                      action="{{ route('targets.destroy', ['target' => $target]) }}"
                                      method="post"
                                >

                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn"><i class="fa fa-trash-o action-icon"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="row target-row target-row-add">
                    <a class="col-sm text-center" href="{{ route('targets.create') }}">
                        <img src="{{ asset('img/plus.svg') }}" alt="add new target" width="20px">
                    </a>
                </div>
            </div>
        @else
            <div class="row justify-content-sm-center">
                <div class="text-center"><h3 class="font-weight-light">Empty.</h3></div>
                <div class="w-100"></div>
                <div class="text-center"><h5 class="font-weight-light">Create a new target.</h5></div>
                <div class="w-100"></div>
                <a class="btn btn-primary col-sm-auto" href="{{ route('targets.create') }}">
                    <i class="fa fa-plus-square-o"></i>
                    Create
                </a>
            </div>
        @endif
    </div>
@endsection

@section('header-links')
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link header-link" href="{{ url('/targets') }}">Targets</a>
        </li>
        <li class="nav-item mr-auto">
            <a class="nav-link header-link" href="{{ url('/activity') }}">Activity</a>
        </li>
    </ul>
@endsection
