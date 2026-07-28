<h1>新規タスク</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('tasks.store') }}" method="post">
    @csrf
    
    <div>
        <label>タイトル</label>
        <input type="text" name="title" value="{{ old('title') }}">
    </div>

    <div>
        <label>本文</label>
        <textarea name="body">{{ old('body') }}</textarea>
    </div>

    <button type="submit">保存</button>
</form>