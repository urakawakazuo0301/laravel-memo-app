<h1>{{ $task->title }}</h1>

<p>{{ $task->body }}</p>

<p>
    <a href="{{ route('tasks.edit', $task) }}">編集</a>
</p>
<p>
    <a href="{{ route('tasks.index') }}">一覧に戻る</a>
</p>
