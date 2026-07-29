<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            タスク編集
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
