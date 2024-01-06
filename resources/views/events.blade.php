{{-- resources/views/events.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Ensure this path is correct -->
    <title>Events List</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-green-50 text-gray-800">
    @include('partials.nav')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-10 text-center">Upcoming Events</h1>

        <!-- Search Form -->
        <div class="mb-6">
            <form method="GET" action="{{ route('events') }}" class="flex justify-center">
                <input type="text" name="search" placeholder="Search events..." class="px-4 py-2 w-full md:w-1/3 rounded-l-lg border" value="{{ request('search') }}">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r-lg">Search</button>
            </form>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($events as $event)
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-semibold text-gray-800">{{ $event->name }}</h2>
                    <p class="text-sm text-gray-600 mt-2">{{ $event->description }}</p>
                    <div class="mt-4">
                        <span class="text-green-600 font-bold">Date:</span> {{ $event->date }}
                    </div>
                    <div class="mt-2">
                        <span class="text-green-600 font-bold">Time:</span> {{ $event->time }}
                    </div>
                    <!-- Add more event details here if needed -->
                </div>
            @empty
                <div class="col-span-3 text-center text-gray-500">
                    No upcoming events found.
                </div>
            @endforelse
        </div>
    </div>
</body>
</html>
