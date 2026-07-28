@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('tasks.update', $task) }}" method="post">
    @csrf
    @method('PUT')

    <div>
        <label>タイトル</label>
        <input type="text" name="title" value="{{ old('title', $task->title) }}">
    </div>

    <div>
        <label>本文</label>
        <textarea name="body">{{ old('body', $task->body) }}</textarea>
    </div>

    <button type="submit">保存</button>
</form>