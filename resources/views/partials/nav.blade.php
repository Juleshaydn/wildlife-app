{{-- resources/views/partials/nav.blade.php --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-lg">
    <div class="container">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link text-white">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('animals.index') }}" class="nav-link text-white">Animals</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('info') }}" class="nav-link text-white">Info</a>
            </li>
        </ul>
    </div>
</nav>
