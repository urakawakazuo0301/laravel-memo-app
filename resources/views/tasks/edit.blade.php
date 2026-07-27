<form action="{{ route('tasks.update', $task) }}" method="post">
    @csrf
    @method('PUT')

    <div>
        <label>タイトル</label>
        <input type="text" name="title" value="{{ $task->title }}">
    </div>

    <div>
        <label>本文</label>
        <textarea name="body">{{ $task->body }}</textarea>
    </div>

    <button type="submit">保存</button>
</form>