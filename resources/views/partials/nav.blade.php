{{-- resources/views/partials/nav.blade.php --}}

<nav class="bg-blue-600 shadow-lg">
    <div class="container mx-auto px-4">
        <ul class="flex items-center">
            <li class="nav-item mr-6">
                <a href="{{ route('home') }}" class="nav-link text-white hover:text-blue-200">Home</a>
            </li>
            <li class="nav-item mr-6">
                <a href="{{ route('animals.index') }}" class="nav-link text-white hover:text-blue-200">Animals</a>
            </li>
            <li class="nav-item mr-6">
                <a href="{{ route('events') }}" class="nav-link text-white hover:text-blue-200">Events</a>
            </li>
            <li class="nav-item mr-6">
                <a href="{{ route('info') }}" class="nav-link text-white hover:text-blue-200">Info</a>
            </li>
        </ul>
    </div>
</nav>
