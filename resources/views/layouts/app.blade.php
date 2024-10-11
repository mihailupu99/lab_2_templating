<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

<x-header title="To-do app"/>


    <!-- Conținutul paginii -->
    <div class="container mx-auto py-8 flex-grow">
        @yield('content')
    </div>

    <!-- Footer sticky -->
    <footer class="bg-blue-600 text-white p-4">
        <div class="container mx-auto text-center">
            &copy; 2024 Copyright.
        </div>
    </footer>

</body>
</html>