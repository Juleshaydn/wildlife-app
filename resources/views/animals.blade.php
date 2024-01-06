{{-- resources/views/animals.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Ensure this path is correct -->
    <title>Animals List</title>
</head>
<body class="bg-gray-100">
    @include('partials.nav') <!-- Ensure your navigation is styled or has Tailwind classes -->
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold text-gray-800 my-6">Animals List</h1>
        <ul class="bg-white rounded shadow-md p-6">
            @foreach ($animals as $animal)
                <li class="border-b border-gray-200 py-2 flex justify-between items-center">
                    <span class="text-gray-600">ID: {{ $animal->id }}</span>
                    <span class="text-gray-800 font-medium">{{ $animal->name }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
