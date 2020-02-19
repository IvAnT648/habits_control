@extends('layouts.app')

@section('content')
    <div class="container col-lg-6">
        <h2>List of targets</h2>
        @component('components.breadcrumb', ['items' => [['route' => 'home', 'text' => 'Main'], ['text' => 'Target']]]) @endcomponent
        <hr>
        <a href="{{ route('targets.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i>  Create a target</a>
        <br><br>
        <table class="table table-light border">
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
                    <td class="text-right">
                        <form onsubmit="return confirm('Delete the target?')"
                              action="{{ route('targets.destroy', ['target' => $target]) }}"
                              method="post">

                            @method('delete')
                            @csrf
                            <a class="btn" href="{{ route('targets.edit', ['target' => $target]) }}">
                                <i class="fa fa-pencil-square-o fa-2x"></i>
                            </a>
                            <button type="submit" class="btn"><i class="fa fa-trash-o fa-2x"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h5 style="font-style: italic">Data not found</h5></td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
