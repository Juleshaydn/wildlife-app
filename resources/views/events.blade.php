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
    @include('partials.nav') <!-- Ensure your navigation is styled or has Tailwind classes -->
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Upcoming Events</h1>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            @forelse ($events as $event)
                <div class="px-4 py-5 border-b border-gray-200">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $event->name }}</h2>
                    <p class="text-sm text-gray-600">Date: {{ $event->date }} | Time: {{ $event->time }}</p>
                    <p class="text-sm text-gray-600">Location: {{ $event->location }}</p>
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
