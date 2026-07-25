<h1>タスク一覧</h1>

<p>
    <a href="{{ route('tasks.create') }}">新規作成</a>
</p>

<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->title }}</li>
    @endforeach
</ul>