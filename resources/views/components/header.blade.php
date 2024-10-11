<!-- resources/views/components/header.blade.php -->

<nav class="bg-blue-600 p-4 text-white">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-2xl font-bold">{{ $title }}</a>
        <ul class="flex space-x-4">
            <li><a href="/" class="hover:underline">Home</a></li>
            <li><a href="/about" class="hover:underline">About Us</a></li>
            <li><a href="/tasks" class="hover:underline">Tasks</a></li>
        </ul>
    </div>
</nav>
