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
<body class="bg-gray-100">
    @include('partials.nav')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Upcoming Events</h1>

        <!-- Search Form -->
        <form method="GET" action="{{ route('events') }}" class="mb-6">
    <div class="flex items-center">
        <input type="text" name="search" placeholder="Search events..." class="px-4 py-2 w-full rounded-l-lg border" value="{{ request('search') }}">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r-lg">Search</button>
    </div>
</form>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            @forelse ($events as $event)
                <div class="px-4 py-5 border-b border-gray-200">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $event->name }}</h2>
                    <p class="text-sm text-gray-600">Date: {{ $event->date }} | Time: {{ $event->time }}</p>
                    <p class="text-sm text-gray-600">Location: {{ $event->location }}</p>
                    <p class="text-sm text-gray-600">Description: {{ $event->description }}</p>
                    <p class="text-sm text-gray-600">Price: ${{ number_format($event->price, 2) }}</p>
                </div>
            @empty
                <div class="px-4 py-5 text-center text-gray-500">
                    No upcoming events found.
                </div>
            @endforelse
        </div>
    </div>
</body>
</html>
