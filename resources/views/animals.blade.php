{{-- resources/views/animals.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Ensure this path is correct -->
    <title>Animals List</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    @include('partials.nav')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Animals List</h1>
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <ul>
                @forelse ($animals as $animal)
                    <li class="px-4 py-5 border-b border-gray-200">
                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-gray-600">ID: {{ $animal->id }}</span>
                            <span class="text-lg text-gray-800">{{ $animal->name }}</span>
                        </div>
                    </li>
                @empty
                    <li class="px-4 py-5 text-center text-gray-500">
                        No animals found.
                    </li>
                @endforelse
            </ul>
        </div>
    </div>
</body>
</html>
