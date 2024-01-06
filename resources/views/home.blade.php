{{-- resources/views/home.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
    @include('partials.nav')

    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Welcome to the Home Page
            </h1>
        </div>
    </header>

    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Featured Animals -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Featured Animals</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    @foreach ($randomAnimals as $animal)
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h3 class="text-xl font-bold text-gray-800">{{ $animal->name }}</h3>
                            <!-- Add more animal details here if needed -->
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('animals.index') }}" class="text-blue-600 hover:underline">View all animals</a>
            </div>

            <!-- Upcoming Events -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Upcoming Events</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    @foreach ($upcomingEvents as $event)
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h3 class="text-xl font-bold text-gray-800">{{ $event->name }}</h3>
                            <p>Date: {{ $event->date }}</p>
                            <p>Time: {{ $event->time }}</p>
                            <!-- Add more event details here if needed -->
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('events') }}" class="text-blue-600 hover:underline">View all events</a>
            </div>
        </div>
    </main>
</body>
</html>
