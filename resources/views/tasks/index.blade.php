@extends('layouts.app')

@section('content')
    <h1>タスク一覧</h1>

    <ul>
        @foreach ($tasks as $task)
            <li>
                <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection