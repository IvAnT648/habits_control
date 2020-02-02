@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br>
        <h1>Create new target</h1>
        <br><br>
    </div>
    <div class="container col-md-6">
        <form action="{{ url('/targets/create') }}" method="POST">
            <p>
                <label>
                    Краткое название цели
                    <input type="text" name="title" required>
                </label>
            </p>
            <p>
                <label>
                    Описание цели
                    <textarea name="description"></textarea>
                </label>
            </p>
            <p>
                <label>
                    Почему или для чего я сталю эту цель
                    <textarea name="reasons"></textarea>
                </label>
            </p>
            <p>
                <button type="submit">
                    Создать
                </button>
            </p>
        </form>
    </div>
@endsection
