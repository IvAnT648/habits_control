@extends('layouts.app')

@section('content')

    <div class="container">

        @component('components.breadcrumb')
            @slot('title') Список целей @endslot
            @slot('parent') Главная @endslot
            @slot('active') Цели @endslot
        @endcomponent

        <hr>

        <a href="{{ route('targets.index') }}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Создать категорию</a>
        <table class="table table-striped">
            <thead>
            <th>Название цели</th>
            <th>Описание</th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse ($targets as $target)
                <tr>
                    <td>{{ $target->title }}</td>
                    <td>{{ $target->description }}</td>
                    <td>
{{--                        <a href="{{ route('targets.edit', ['id' => $target->target_id]) }}"><i class="fa fa-edit"></i></a>--}}
                        <a href="#"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
