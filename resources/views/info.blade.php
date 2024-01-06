{{-- resources/views/info.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Ensure this path is correct -->
    <title>Information Page</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-green-50 text-gray-800">
    @include('partials.nav') <!-- Ensure your navigation is styled or has Tailwind classes -->
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">About Jem Wildlife Centre</h1>
        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-gray-600 mb-4">Jem Wildlife Centre is based near Penkridge in Staffordshire, that cares for British wild animals that have been rescued. Their mission is to help sick, injured, and orphaned wildlife, either by rehabilitating and returning them back into the wild or by providing a life-long home to those who would not survive in the wild.</p>
            <p class="text-gray-600">Here are a few key aspects of our mission:</p>
            <ul class="list-disc pl-5 mt-4 text-gray-600">
                <li>Rehabilitation of injured and orphaned wildlife</li>
                <li>Education and outreach to promote wildlife conservation</li>
                <li>Research and monitoring of local wildlife populations</li>
                <li>Providing a sanctuary for non-releasable animals</li>
            </ul>
        </div>
    </div>
</body>
</html>
