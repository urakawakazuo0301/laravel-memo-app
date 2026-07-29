@extends('layouts.app')

@section('content')

<h1>{{ $task->title }}</h1>

<p>{{ $task->body }}</p>

<p>
    <a href="{{ route('tasks.edit', $task) }}">編集</a>
</p>

<form action="{{ route('tasks.destroy', $task) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">削除</button>
</form>

<p>
    <a href="{{ route('tasks.index') }}">一覧に戻る</a>
</p>
@endsection