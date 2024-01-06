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
<body class="bg-green-50 text-gray-800">
    @include('partials.nav')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Animals List</h1>
        <div class="grid md:grid-cols-2 gap-4">
            @forelse ($animals as $animal)
                <div class="bg-white rounded-lg shadow">
                    <div class="flex flex-col items-center p-4 cursor-pointer" onclick="toggleDescription({{ $animal->id }})">
                        <!-- Animal Image -->
                        <img src="data:image/jpeg;base64,{{ base64_encode($animal->img) }}" alt="{{ $animal->name }}" class="w-32 h-32 object-cover rounded-full mb-4">
                        <!-- Animal Name -->
                        <h2 class="text-xl font-semibold text-gray-800">{{ $animal->name }}</h2>
                    </div>
                    <!-- Hidden Description -->
                    <div id="description-{{ $animal->id }}" class="hidden text-sm text-gray-600 p-4">
                        {{ $animal->description }}
                    </div>
                </div>
            @empty
                <div class="col-span-2 text-center text-gray-500">
                    No animals found.
                </div>
            @endforelse
        </div>
    </div>

    <script>
        function toggleDescription(animalId) {
            var element = document.getElementById('description-' + animalId);
            if (element) {
                element.classList.toggle('hidden');
            }
        }
    </script>
</body>
</html>
