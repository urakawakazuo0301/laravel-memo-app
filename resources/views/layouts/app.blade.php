<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>メモアプリ</title>
</head>
<body>
    <header>
        <a href="{{ route('tasks.index') }}">タスク一覧</a>
        <a href="{{ route('tasks.create') }}">新規作成</a>
    </header>

    @if (session('success'))
        <p>{{ session('success')}}</p>
    @endif

    <main>
        @yield('content')
    </main>
</body>
</html> 