<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $task->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <p>{{ session('success') }}</p>
                    @endif

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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>