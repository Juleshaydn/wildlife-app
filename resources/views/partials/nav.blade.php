{{-- resources/views/partials/nav.blade.php --}}

<nav class="bg-green-600 shadow-lg">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo or Brand Name -->
        <div class="text-white text-2xl font-bold">
            <a href="{{ route('home') }}">Jem Wildlife Centre</a>
        </div>

        <!-- Navigation Links -->
        <ul class="flex items-center">
            <li class="nav-item mr-6">
                <a href="{{ route('home') }}" class="nav-link text-white hover:text-green-200 transition duration-300">Home</a>
            </li>
            <li class="nav-item mr-6">
                <a href="{{ route('animals.index') }}" class="nav-link text-white hover:text-green-200 transition duration-300">Animals</a>
            </li>
            <li class="nav-item mr-6">
                <a href="{{ route('events') }}" class="nav-link text-white hover:text-green-200 transition duration-300">Events</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('info') }}" class="nav-link text-white hover:text-green-200 transition duration-300">Info</a>
            </li>
        </ul>

        <!-- Mobile Menu Button -->
        <button class="text-white md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
        </button>
    </div>
</nav>
