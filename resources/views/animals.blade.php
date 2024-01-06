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
                        <div class="flex flex-col md:flex-row items-center justify-between">
                            <!-- Animal Image -->
                            <div class="mb-4 md:mb-0 md:mr-4">
                                <img src="data:image/jpeg;base64,{{ base64_encode($animal->img) }}" alt="{{ $animal->name }}" class="w-32 h-32 object-cover rounded-full">
                            </div>
                            <!-- Animal Details -->
                            <div class="flex-1">
                                <h2 class="text-xl font-semibold text-gray-800">{{ $animal->name }}</h2>
                                <p class="text-sm text-gray-600">{{ $animal->description }}</p>
                            </div>
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
