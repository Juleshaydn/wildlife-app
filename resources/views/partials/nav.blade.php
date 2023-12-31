{{-- resources/views/partials/nav.blade.php --}}

<nav class="bg-blue-800 p-4 shadow-lg">
    <div class="container mx-auto">
        <ul class="flex items-center justify-center space-x-4">
            <li>
                <a href="{{ route('home') }}" class="text-white hover:text-blue-300 font-semibold">Home</a>
            </li>
            <li>
                <a href="{{ route('animals.index') }}" class="text-white hover:text-blue-300 font-semibold">Animals</a>
            </li>
            <li>
                <a href="{{ route('info') }}" class="text-white hover:text-blue-300 font-semibold">Info</a>
            </li>
        </ul>
    </div>
</nav>
