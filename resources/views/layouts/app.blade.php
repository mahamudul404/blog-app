<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Home</title>
    <!-- Tailwind CSS (make sure you have included Tailwind CSS in your project) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50">

    @include('layouts.navigation')

    <div class="container mx-auto px-4">
        {{ $slot }}
    </div>

</body>

</html>
