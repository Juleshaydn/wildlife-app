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
<body class="bg-gray-100">
    @include('partials.nav') <!-- Ensure your navigation is styled or has Tailwind classes -->
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Information Page</h1>
        <div class="bg-white rounded-lg shadow p-6">
            <p class="text-gray-600 mb-4">This is your information page where you can share details about your site, company, or provide users with helpful information.</p>
            <p class="text-gray-600">Feel free to structure this page according to your content needs. Here are a few ideas on what you might include:</p>
            <ul class="list-disc pl-5 mt-4 text-gray-600">
                <li>About your site or company</li>
                <li>Contact information</li>
                <li>Helpful resources and links</li>
                <li>Frequently asked questions</li>
            </ul>
        </div>
    </div>
</body>
</html>
