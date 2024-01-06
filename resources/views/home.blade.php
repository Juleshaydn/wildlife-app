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
            <!-- Replace with your content -->
            <div class="px-4 py-6 sm:px-0">
                <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
                    <!-- The rest of your homepage content -->
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </main>
</body>
</html>
