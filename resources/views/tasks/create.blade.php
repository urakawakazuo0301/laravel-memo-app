<h1>新規タスク</h1>

<form action="{{ route('tasks.store') }}" method="post">
    @csrf
    
    <div>
        <label>タイトル</label>
        <input type="text" name="title">
    </div>

    <div>
        <label>本文</label>
        <textarea name="body"></textarea>
    </div>

    <button type="submit">保存</button>
</form>