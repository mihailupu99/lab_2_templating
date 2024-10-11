<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('title', 'Home page')

@section('content')
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-4">A to-do app that helps you track the tasks of a team.</h1>
        <p class="text-lg mb-8">This app should help you to sort out the priority of the tasks and the person responsible for a specific task.</p>

        <!-- Navigație către secțiuni -->
        <div class="space-x-4">
            <a href="{{ route('tasks.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">
                List of the tasks
            </a>
            <a href="{{ route('tasks.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-500">
                Create a new task
            </a>
            <h2 class="text-2xl font-semibold mt-8">Latest created task</h2>
            @if(isset($latestTask))
                <x-task :task="$latestTask" />
            @else
                <p>Nu există sarcini.</p>
            @endif
        </div>
    </div>

    <div class="mt-10">
        <h2 class="text-3xl font-bold mb-4">About the app</h2>
        <p class="text-lg">A simple to-do app created in laravel that uses blade templating.</p>
    </div>
@endsection
