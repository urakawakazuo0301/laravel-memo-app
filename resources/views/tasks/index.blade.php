<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            タスク一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if (session('success'))
                        <p>{{ session('success') }}</p>
                    @endif
                    
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
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
