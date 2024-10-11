<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app')

@section('title', 'Task list')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Task list</h1>

    @if(!empty($tasks))
        <ul class="list-disc pl-8">
            @foreach ($tasks as $task)
                <li class="mb-2">
                    <a href="{{ route('tasks.show', $task['id']) }}" class="text-blue-600 hover:underline">
                        {{ $task['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>There are no tasks to show.</p>
    @endif
@endsection
