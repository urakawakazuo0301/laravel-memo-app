@if (session('success'))
    <p>{{ session('success') }}</p>   
@endif

<h1>タスク一覧</h1>

<p>
    <a href="{{ route('tasks.create') }}">新規作成</a>
</p>

<ul>
    @foreach ($tasks as $task)
        <li>
            <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
        </li>
    @endforeach
</ul>