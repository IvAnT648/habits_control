@extends('layouts.app')

@section('content')
    <div class="container col-lg-6">

        <h2>List of targets</h2>
        @component('components.breadcrumb', ['items' => [['route' => 'home', 'text' => 'Main'], ['text' => 'Target']]]) @endcomponent

        <hr>

        <a href="{{ route('targets.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i>  Create a target</a>
        <table class="table table-striped">
            <thead>
            <th>Target title</th>
            <th>Description</th>
            <th class="text-right">Action</th>
            </thead>
            <tbody>
            @forelse ($targets as $target)
                <tr>
                    <td>{{ $target->title }}</td>
                    <td>{{ $target->description }}</td>
                    <td>
                        <a href="{{ route('targets.edit', ['target' => $target->target_id]) }}"><i class="fa fa-pencil pull-right"></i></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Data not found</h2></td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
