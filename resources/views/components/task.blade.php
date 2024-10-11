<!-- resources/views/components/task.blade.php -->

@props(['task'])

<div class="bg-white shadow-md rounded p-6 mb-4">
    <h2 class="text-xl font-bold mb-2">{{ $task['title'] }}</h2>
    <p class="text-gray-700 mb-4">{{ $task['description'] }}</p>

    <p class="text-sm text-gray-500">Created at: {{ $task['created_at'] }}</p>
    <p class="text-sm text-gray-500">Updated at: {{ $task['updated_at'] }}</p>

    <p>Status: {{ $task['status'] ? 'Completed' : 'Not Completed' }}</p>
    <x-priority :priority="$task['priority']"/>
    <p>Assigned to: {{ $task['assigned_to'] }}</p>

    <div class="mt-4">
        <a href="{{ route('tasks.edit', $task['id']) }}" class="text-blue-600 mr-2">Edit</a>
        <form action="{{ route('tasks.destroy', $task['id']) }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600">Delete</button>
        </form>
    </div>
</div>
