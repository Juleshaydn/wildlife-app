{{-- resources/views/home.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildlife Sanctuary</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-green-50 text-gray-800">
    @include('partials.nav')

    <header class="bg-green-600">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight lg:text-6xl">
                Home
            </h1>
            <p class="mt-6 max-w-lg mx-auto text-xl text-green-200 sm:max-w-3xl">
                Discover the beauty of wildlife and nature.
            </p>
        </div>
    </header>

    <main>
        <div class="max-w-7xl mx-auto py-12 sm:px-6 lg:px-8">
            <!-- Featured Animals -->
            <section class="mb-12">
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Featured Animals</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($randomAnimals as $animal)
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <!-- Animal Image -->
                            <div class="mb-4 h-48 overflow-hidden rounded-lg">
                                <img src="data:image/jpeg;base64,{{ base64_encode($animal->img) }}" alt="{{ $animal->name }}" class="w-full h-full object-cover object-center">
                            </div>
                            <!-- Animal Name -->
                            <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $animal->name }}</h3>
                            <!-- Animal Description -->
                            <p class="text-gray-600">{{ $animal->description }}</p>
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('animals.index') }}" class="inline-block mt-4 text-blue-600 hover:underline">View all animals</a>
            </section>

            <!-- Upcoming Events -->
            <section>
                <h2 class="text-3xl font-semibold text-gray-800 mb-6">Upcoming Events</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($upcomingEvents as $event)
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h3 class="text-xl font-bold text-gray-800">{{ $event->name }}</h3>
                            <p class="text-sm text-gray-600">Date: {{ $event->date }}</p>
                            <p class="text-sm text-gray-600">Time: {{ $event->time }}</p>
                            <!-- Add more event details here if needed -->
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('events') }}" class="inline-block mt-4 text-blue-600 hover:underline">View all events</a>
            </section>
        </div>
    </main>
</body>
</html>
